<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard.index');
});


// route resource digunakan untuk memanggil semua function yang ada di controller yang ada di --resource 
Route::resource('tags','App\Http\Controllers\TagsController');
Route::resource('categories','App\Http\Controllers\CategoriesController');
Route::resource('blog','App\Http\controllers\BlogController');