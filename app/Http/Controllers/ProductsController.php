<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Categories;


class ProductsController extends Controller
{

    public function show(products $products)
    {
        return view ('products.show',[
            'products' => $products
        ]);
    }

    public function lastOne()
    {
        return view('products.products',[
            'latest' => products::latest('created_at')->first(),
            'categories' => Categories::latest('created_at')->get(),
            'products' => products::latest('created_at')->paginate(6)
        ]);
    }
}
