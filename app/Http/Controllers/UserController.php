<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userprofile()
    {
        return view('userprofile');
    }

    public function about()
    {
        return view('about');
    }
    public function cart()
    {
        $cartSummary =$this->getCartSummary();
        return view('cart',compact('cartSummary'));
    }
    public function shop()
    {
        return view('shop');
    }
    public function product()
    {
        $category=Category::all();
        $product=Product::all();
        return view('Home/view_product',compact('product','category'));
    }
    public function addProducttoCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []); // Ensure the session key is 'cart'

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->thumbnail
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }
    public function increaseQuantity($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product quantity increased!');
    }

    public function decreaseQuantity($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            if($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            } else {
                unset($cart[$id]);
            }
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product quantity decreased!');
    }
    public function getCartSummary()
    {
        $cart = session()->get('cart', []);
        $subtotal = 0;
        foreach ($cart as $id => $details) {
            $subtotal += $details['price'] * $details['quantity'];
        }
        $taxRate = 0.1; // Example tax rate of 10%
        $taxes = $subtotal * $taxRate;
        $shipping = 0; // Example shipping cost, adjust as needed
        $total = $subtotal + $taxes + $shipping;

        return [
            'subtotal' => $subtotal,
            'taxes' => $taxes,
            'shipping' => $shipping,
            'total' => $total,
        ];
    }
    public function processCheckout(Request $request)
    {
        $cartSummary = $this->getCartSummary();

        // Here you can integrate with a payment gateway like Stripe, PayPal, etc.
        // For example, using Stripe:
        /*
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $cartSummary['total'] * 100, // Amount in cents
            'currency' => 'usd',
        ]);

        $clientSecret = $paymentIntent->client_secret;
        */

        // After successful payment, clear the cart
        session()->forget('cart');

        return redirect('/')->with('success', 'Order placed successfully!');
    }

    public function view($id)
    {
        $product=Product::find($id);
        $feedback=Feedback::all();
        $user=User::all();
        return view('/Home/detail',compact('product','feedback','user'));
    }
}
