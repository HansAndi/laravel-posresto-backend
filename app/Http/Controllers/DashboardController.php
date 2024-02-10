<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $products = Product::count();
        $categories = Category::count();

        return view('pages.dashboard', compact('users', 'products', 'categories'));
    }

}
