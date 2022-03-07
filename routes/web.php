<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Models\Products;
use App\Models\Categories;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil', [
        'randomProducts' => Products::inRandomOrder()->limit(3)->get(),
        'randomFavoris' => Products::where('favoris', 1)->inRandomOrder()->first(),
        'lastProducts' => Products::latest()->limit(4)->get(),
        'bestProducts' => Products::latest()->limit(4)->get(),
    ]);
});

Route::controller(ProductsController::class)->group(function (){
    // Route::get('/products', 'index');
    Route::get('/products', 'lastOne');
    Route::get('/products/{products}-{slug}', 'show');
   
    
});

Route::get('/contact', function() {
    return view('contact');
});


Route::controller(CategoriesController::class)->group(function (){
    Route::get('/categories/{category} ', 'index');
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
