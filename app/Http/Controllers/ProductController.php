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

    public function deleteProduct($productId) {
        $product = Product::find($productId);

        if ($product) $product->delete();

        return redirect('/');
    }

    public function showProductEditForm($productId) {
        $product = Product::find($productId);
        return view('edit_forms.edit_product', compact('product'));
    }

    public function editProduct(Request $request, $productId) {
        $product = Product::findOrFail($productId);

        if ($product) {
            $product->name = $request->name;
            $product->description = $request->desc;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->category_id = $request->category_id ?? null;
            $product->save();
        }
        
        return redirect('/');
    }

}