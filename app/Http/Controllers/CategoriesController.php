<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function index(Categories $category)
    {
        
        return view('products.categories', [
            'latest' => Products::latest('created_at')->first(),
            'categories' => Categories::latest('created_at')->get(),
            'products' => Products::latest('created_at')->paginate(6),
            'category' => $category,
        ]);
    }
}   
