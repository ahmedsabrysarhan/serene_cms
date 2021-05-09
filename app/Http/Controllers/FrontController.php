<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        // Categories in all Front
        $categories = Category::all();
        $products = Product::all();
        return view('home', ['categories' => $categories, 'products' => $products]);
    }
}
