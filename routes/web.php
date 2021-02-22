<?php

use App\Models\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;







// Route::get('/strongly', function () {
//     return view('strongly');
// });


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/{product}', 'App\Http\Controllers\ProductController@show')->name('products.show');

