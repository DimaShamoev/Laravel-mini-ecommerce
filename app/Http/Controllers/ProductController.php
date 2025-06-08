<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function createProduct(Request $request) {
        Product::create([
            'name' => $request->name,
            'description' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
        ]);
    
        return redirect('/');
    }

}