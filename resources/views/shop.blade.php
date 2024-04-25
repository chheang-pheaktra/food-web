@extends('layouts.user')
@section('contents')
    <main>
        <h1 class="text-4xl font-semibold text-center mt-4">Shops</h1>
        <div class="flex justify-evenly flex-wrap mx-4 gap-3 mt-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden object-cover max-w-lg w-full">
                <img src="https://i.pinimg.com/564x/7b/01/01/7b010157f8636553e2ee6d3a61b1d7ec.jpg" alt="Mountain" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Amazon Coffee </h2>
                    <p class="text-gray-700 leading-tight mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sapien porttitor, blandit velit ac,
                        vehicula elit. Nunc et ex at turpis rutrum viverra.
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="https://i.pinimg.com/564x/d9/b8/38/d9b8383cda7434b8e2a9748bb93e0791.jpg" alt="Avatar" class="w-8 h-8 rounded-full mr-2 object-cover">
                            <span class="text-gray-800 font-semibold">Amazon</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
                <img src="https://i.pinimg.com/564x/cf/2d/40/cf2d403cd42606020bb2d4765f7810ac.jpg" alt="Mountain" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Starbucks Coffee</h2>
                    <p class="text-gray-700 leading-tight mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sapien porttitor, blandit velit ac,
                        vehicula elit. Nunc et ex at turpis rutrum viverra.
                    </p>
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="https://i.pinimg.com/564x/9a/c3/ac/9ac3ac8e330535ec02019b550d3a4601.jpg" alt="Avatar" class="w-8 h-8 rounded-full mr-2 object-cover">
                            <span class="text-gray-800 font-semibold">Starbucks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
