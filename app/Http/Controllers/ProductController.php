<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view ('product.index',[
            'products' => Product::latest('created_at')->paginate(6)
        ]);
    }

    public function show(Product $product)
    {
        return view ('product.show',[
            'product' => $product
        ]);
    }
}
