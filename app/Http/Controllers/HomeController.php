<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $category=Category::all();
        $product=Product::all();
        return view('home',compact('category','product'));
    }

    public function adminHome()
    {
        $users=User::get();
        return view('dashboard',compact('users'));
    }
}
