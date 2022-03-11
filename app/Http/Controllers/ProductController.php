<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact(['products']));
    }
    public function create() {
        return view('products.create', compact([]));
    }
    public function store(Request $request) {
        Product::create($request->all());
        return redirect('/products');
    }
    public function edit($id) {
        $products = Product::find($id);
        return view('products.edit', compact(['products']));
    }
    public function destroy($id) {
        $products = Product::find($id);
        $products->delete();
        return redirect('/products');
    }
    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }
}
