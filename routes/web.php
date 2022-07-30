<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\front\PageController@index')->name('home');
// frontend
// cara membuat route get untuk halaman utama dan memakai name untuk inisial route
Route::get('/class', 'App\Http\Controllers\front\PageController@indexClass')->name('class.index');
Route::get('/program', 'App\Http\Controllers\front\PageController@indexProgram')->name('program.index');
Route::get('/opini', 'App\Http\Controllers\front\PageController@indexOpini')->name('opini.index');
Route::get('/corner', 'App\Http\Controllers\front\PageController@indexCorner')->name('corner.index');

Route::get('/article/{slug}', 'App\Http\Controllers\front\PageController@show')->name('article.show');


Route::get('/blogpost', function ()  {
    return view('frontend.blog.post');
});


// backend


Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-panel', function () {
        return view('dashboard.index');
    });
    // route resource digunakan untuk memanggil semua function yang ada di controller yang ada di --resource 
    Route::resource('tags','App\Http\Controllers\TagController');
    Route::resource('categories','App\Http\Controllers\CategoriesController');
    Route::resource('blog','App\Http\controllers\BlogController');
    Route::resource('pages','App\Http\controllers\FrontpageController');
    Route::resource('image','App\Http\controllers\ImageController');
    Route::resource('home','App\Http\controllers\HomePageController');
    
    Route::post('logout','App\Http\controllers\AuthController@logout')->name('logout');
    
    

});
