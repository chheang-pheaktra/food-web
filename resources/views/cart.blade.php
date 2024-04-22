@extends('layouts.user')
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
@section('contents')
    <main>
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
                                <tr>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img class="h-16 w-16 object-fit mr-4" src="https://i.pinimg.com/564x/54/bf/1c/54bf1c1e189fc043dc120d2e4dcc95e5.jpg" alt="Product image">
                                            <span class="font-semibold">Product name</span>
                                        </div>
                                    </td>
                                    <td class="py-4">$19.99</td>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <button class="border rounded-md py-2 px-4 mr-2">-</button>
                                            <span class="text-center w-8">1</span>
                                            <button class="border rounded-md py-2 px-4 ml-2">+</button>
                                        </div>
                                    </td>
                                    <td class="py-4">$19.99</td>
                                </tr>
                                <!-- More product rows -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="md:w-1/4">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-lg font-semibold mb-4">Summary</h2>
                            <div class="flex justify-between mb-2">
                                <span>Subtotal</span>
                                <span>$19.99</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Taxes</span>
                                <span>$1.99</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Shipping</span>
                                <span>$0.00</span>
                            </div>
                            <hr class="my-2">
                            <div class="flex justify-between mb-2">
                                <span class="font-semibold">Total</span>
                                <span class="font-semibold">$21.98</span>
                            </div>
                            <button class="bg-orange-600 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
