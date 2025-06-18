<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function store(Request $request)
    {
    $product = Product::create($request->all());
    return redirect()->route('products.index')->with('success', '商品が正常に登録されました。');
    }
}
