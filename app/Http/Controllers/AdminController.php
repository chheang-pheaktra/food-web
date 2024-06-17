<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }
    public function category()
    {
        $category=Category::all();
        return view('Admin/Crud_Category/index',compact('category'));
    }
    public function product()
    {
        $category=Category::all();
        $product=Product::all();
        return view('Admin/Crud_Product/index',compact('category','product'));
    }
}
