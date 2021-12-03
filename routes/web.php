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
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::prefix('dashboard')->group(function () {
    /*
    Categories
    */
    Route::get('/categories'                    , 'CategoryController@list');
    
    Route::get('/categories/create'             , 'CategoryController@create');
    Route::post('/categories/create'            , 'CategoryController@create');

    Route::get('/categories/edit/{id?}'         , 'CategoryController@update');
    Route::post('/categories/edit/{id?}'        , 'CategoryController@update');

    Route::get('/categories/delete/{id?}'       , 'CategoryController@delete');

    Route::post('/categories/update/_bulk'      , 'CategoryController@_bulk');

    /*
    Products
    */
    Route::get('/products'                    , 'ProductController@list');
    
    Route::get('/products/create'             , 'ProductController@create');
    Route::post('/products/create'            , 'ProductController@create');

    Route::get('/products/edit/{id?}'         , 'ProductController@update');
    Route::post('/products/edit/{id?}'        , 'ProductController@update');

    Route::get('/products/delete/{id?}'       , 'ProductController@delete');

    Route::post('/products/update/_bulk'      , 'ProductController@_bulk');
    Route::get('/products/filter'      , 'ProductController@filter');


    /*
    Demos
    */
    Route::get('/input-masking' , 'DemoController@inputMasking');
    Route::get('/select2' , 'DemoController@select2');
});