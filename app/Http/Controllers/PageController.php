<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function showHomePage() {
        $users = User::all();
        $products = Product::all();
        $categories = Category::all();
        
        return view('index', [
            'users' => $users,
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function showUserPage() {
        return view('user');
    }

    public function showProductsPage() {
        return view('products');
    }

    public function showCategoryPage() {
        return view('category');
    }

    public function showOrdersPage() {
        return view('orders');
    }

}