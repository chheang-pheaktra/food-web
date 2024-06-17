@extends('layouts.user')
@section('contents')
    <div class="mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="rounded-lg  mb-4">
                        <img class="w-full h-full object-cover" src="{{asset($product->thumbnail)}}" alt="Product Image">
                    </div>
                    <div class="flex -mx-2 mb-8">
                        <div class="w-1/2 px-2">
                            <a href="{{ route('addProduct.to.cart', $product->id) }}">
                                <button class="w-full bg-orange-600 text-white py-2 px-4 rounded-full font-bold hover:bg-orange-300">
                                    Add to Cart
                                </button>
                            </a>
                        </div>
                        <div class="w-1/2 px-2">
                            <button class="w-full bg-gray-200 text-gray-800 py-2 px-4 rounded-full font-bold hover:bg-gray-300">
                                Add to Wishlist
                            </button>
                        </div>
                    </div>
                </div>
                <div class=" content-center md:flex-1 px-4">
                    <h1  class="text-4xl text-center font-bold text-gray-800 mb-8">{{$product->title}}</h1>
                    <div class="flex mb-8">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 ">Price:</span>
                            <span class="text-gray-600 ">$29.99</span>
                        </div>
                    </div>
                    <div>
                        <span class="font-bold text-gray-700 ">Product Description:</span>
                        <p class="text-gray-600 text-sm mt-2">
                           {{$product->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h2 class="text-lg font-bold mb-4">Feedback</h2>
        <div class="flex flex-col space-y-4">
            @foreach($product->feedback as $feedbackItem)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold">{{ $feedbackItem->user->name }}</h3>
                    <p class="text-gray-700 text-sm mb-2">{{ $feedbackItem->created_at->format('M d, Y H:i') }}</p>
                    <p class="text-gray-700">
                        {{ $feedbackItem->description }}
                    </p>
                </div>
            @endforeach
            <form class="bg-white p-4 rounded-lg shadow-md" action="/feedback/{{auth()->id()}}/{{$product->id}}" method="POST">
                @csrf
                <h3 class="text-lg font-bold mb-2">Add Feedback</h3>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="comment">
                        Comment
                    </label>
                    <textarea
                        name="description"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="comment" rows="3" placeholder="Enter your comment"></textarea>
                </div>
                <button
                    class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>

@endsection
