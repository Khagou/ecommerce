<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view ('products.products',[
            'products' => Products::latest('created_at')->paginate(6)
        ]);
    }

    public function show(Products $product)
    {
        return view ('products.show',[
            'products' => $product
        ]);
    }
}
