#!/usr/bin/env node
var plan = require('flightplan');

// configuration
plan.target('staging', [{
  host: 'YOUR SERVER IP',
  port: 22,
  username: 'USER',
  privateKey: '~/.ssh/id_rsa'
  agent: process.env.SSH_AUTH_SOCK,

  www: '/var/www',
  appdir: '/var/www/app',
  releasedir: '/var/www/releases',
  release: 'release_' + new Date().getTime(),
  ownerUser: 'www-data',
  repository: 'your repo',
  branch: 'master',
  maxDeploys: 5
}]);

plan.local(function(local){
  // DEPLOY ON GREEN
  //local.exec('gulp test');
  //local.exec('gulp coverage');
  if(plan.runtime.target === 'production') {
    var input = local.prompt('Ready for deploying to production? [yes]');
    if(input.indexOf('yes') === -1) {
      local.abort('user canceled flight'); // this will stop the flightplan right away.
    }
  }
});

plan.remote('setup', function(remote){
  remote.hostname();
  remote.exec('[ -d '+remote.runtime.releasedir+' ] || mkdir '+remote.runtime.releasedir);
});



plan.remote('deploy', function(remote) {

  // fetching the latest code
  remote.hostname();
  remote.log('Fetching the latest code');
  remote.with('cd '+remote.runtime.releasedir, function() {
    remote.exec('git clone -b '+remote.runtime.branch+' '+remote.runtime.repository+' '+remote.runtime.release);
  });

  // installing dependencies
  remote.log('Installing dependencies');
  remote.with('cd '+remote.runtime.releasedir+'/'+remote.runtime.release, function() {
    remote.exec('composer install --prefer-dist --no-scripts', { exec: { maxBuffer: 2000*1024}, silent: true });
    remote.exec('php artisan clear-compiled --env=production');
    remote.exec('php artisan optimize --env=production');
    // maybe install npm/bower dependiecies
  });

  // symlinks
  remote.exec('ln -nfs '+remote.runtime.releasedir+'/'+remote.runtime.release+' '+remote.runtime.appdir);
  remote.exec('chgrp -R www-data '+remote.runtime.appdir);
  remote.exec('chmod -R ug+rwx '+remote.runtime.appdir);

  // env file
  remote.with('cd '+remote.runtime.releasedir+'/'+remote.runtime.release, function() {
    remote.exec('ln -nfs ../../.env .env');
    remote.exec('chgrp -h www-data .env');
  });

  // Logs
  remote.exec('rm -r '+remote.runtime.releasedir+'/'+remote.runtime.release+'/storage/logs');
  remote.with('cd '+remote.runtime.releasedir+'/'+remote.runtime.release+'/storage', function(){
    remote.exec('ln -nfs ../../../logs logs');
    remote.exec('chgrp -h www-data logs');
  });

  // Update Currente Site
  remote.exec('ln -nfs '+remote.runtime.releasedir+'/'+remote.runtime.release+' '+remote.runtime.appdir);
  remote.exec('chgrp -h www-data '+remote.runtime.appdir);

  // Reload the Application
  remote.log('Reload application');
  remote.exec('sudo service php5-fpm reload');

  if (remote.runtime.maxDeploys > 0) {
    remote.log('Cleaning up old deploys...');
    remote.with('cd '+remote.runtime.www, function(){
      remote.exec('rm -rf `ls -1dt releases/* | tail -n +' + (remote.runtime.maxDeploys+1) + '`');
    });
  }

  remote.log('Successfully deployed in ' +remote.runtime.release);
  remote.log('To rollback to the previous version run "fly rollback:production"');

});

plan.remote('rollback', function(remote) {
  remote.hostname();

  remote.with('cd ' + remote.runtime.www, function() {
      var command = remote.exec('ls -1dt releases/* | head -n 2', { silent: true });
      var versions = command.stdout.trim().split('\n');

      if (versions.length < 2) {
          return remote.log('No version to rollback to');
      }

      var lastVersion = versions[0];
      var previousVersion = versions[1];

      remote.log('Rolling back from ' + lastVersion + ' to ' + previousVersion);
      remote.exec('ln -fsn ' + previousVersion + ' app');

      // remove the bad build
      remote.exec('rm -rf ' + lastVersion);
  });
});