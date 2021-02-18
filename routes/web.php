<?php

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;







// Route::get('/strongly', function () {
//     return view('strongly');
// });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/strongly', 'App\Http\Controllers\ProductController@index')->name('products.index');
