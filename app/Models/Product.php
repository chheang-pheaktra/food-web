<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'price',
        'category_id',
        'thumbnail',
        'description'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}

