<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view ('accueil',[
            'products' => Products::latest('created_at')->paginate(6)
        ]);
    }

    public function show(Products $product)
    {
        return view ('products.products',[
            'products' => $product
        ]);
    }
}
