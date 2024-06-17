<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request,$user_id,$product_id)
    {
        $product = Product::findOrFail($product_id);
       Feedback::create([
           'user_id'=>$user_id,
           'product_id'=>$product->id,
           'description'=>$request->description
       ]);
        return redirect()->back();
    }
}
