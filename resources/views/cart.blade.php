@extends('layouts.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <main class="mt-32">
        <h1 class="text-4xl font-semibold text-center mt-4">Your Orders</h1>
        <div class="py-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-3/4">
                        <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                            <table class="w-full">
                                <thead>
                                <tr>
                                    <th class="text-left font-semibold">Product</th>
                                    <th class="text-left font-semibold">Price</th>
                                    <th class="text-left font-semibold">Quantity</th>
                                    <th class="text-left font-semibold">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                        <tr>
                                            <td class="py-4" rowId="{{ $id }}">
                                                <div class="flex items-center">
                                                    <img class="h-16 w-16 object-fit mr-4" src="{{ asset($details['image']) }}" alt="Product image">
                                                    <span class="font-semibold">{{ $details['title'] }}</span>
                                                </div>
                                            </td>
                                            <td class="py-4">{{ $details['price'] }}</td>
                                            <td class="py-4">
                                                <div class="flex items-center">
                                                    <form action="{{ route('cart.decrease', $id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="border rounded-md py-2 px-4 mr-2">-</button>
                                                    </form>
                                                    <span class="text-center w-8">{{ $details['quantity'] }}</span>
                                                    <form action="{{ route('cart.increase', $id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="border rounded-md py-2 px-4 ml-2">+</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="py-4">${{ $details['price'] * $details['quantity'] }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>


                            </table>
                        </div>
                    </div>
                    <div class="md:w-1/4">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-lg font-semibold mb-4">Summary</h2>
                            <div class="flex justify-between mb-2">
                                <span>Subtotal</span>
                                <span>${{ number_format($cartSummary['subtotal'], 2) }}</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Taxes</span>
                                <span>${{ number_format($cartSummary['taxes'], 2) }}</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Shipping</span>
                                <span>${{ number_format($cartSummary['shipping'], 2) }}</span>
                            </div>
                            <hr class="my-2">
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold">${{ number_format($cartSummary['total'], 2) }}</span>
                            </div>
                            <form action="{{ route('checkout.process') }}" method="POST">
                                @csrf
                                <button type="submit" class="bg-orange-600 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
