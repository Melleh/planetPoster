<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


public function index()
{

    $products = Product::latest()->get();

    return view('products.index', ['products' => $products]);

}

public function show(Product $product)
{
    $features = Product::take(3)->get();

    return view('products.show', [
        'product' => $product,
        'features' => $features
        ]);

}


}
