<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){
        return view('dashboard.app');
    }

    public function trashbox(){
        $categories = Category::onlyTrashed()->get();
        $products = Product::onlyTrashed()->get();
        $users = User::onlyTrashed()->get();
        return view('dashboard.trashbox',[
            'categories' => $categories, 
            'products' => $products,
            'users' => $users,
            ]);
    }
}
