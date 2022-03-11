<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductApiController extends Controller
{
    public function index() 
    {
        $products = Product::all();
        return response()->json(['message' => 'Success', 'data' => $products ]);
    }
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json(['messege' => 'Success', 'data' => $product]);
    }
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json(['messege' => 'Success', 'data' => $product]);
    }
    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(['messege' => 'Success', 'data' => $product]);
    }
    public function destroy($id) {
        $products = Product::find($id);
        $products->delete();
        return response()->json(['messege' => 'Success', 'data' => null]);
    }
}
