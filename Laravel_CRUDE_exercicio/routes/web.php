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

Route::get('/', function () { return redirect('cars');  });

Auth::routes();


Route::get('/home', 'CarController@index')->name('home');




Route::get('/brands','BrandController@index');
Route::prefix('brands')-> group(function(){

    Route::get('', 'BrandController@index');

    Route::group(['middleware'=> ['auth', 'admin']], function() {
        Route::get('/export', 'BrandController@export');
        Route::get('/create','BrandController@create');
        Route::post('','BrandController@store');
        Route::get('/truncate', 'BrandController@truncate');
        Route::get('/{brand}/edit','BrandController@edit');
        Route::put('/{brand}','BrandController@update');
        Route::delete('/{brand}','BrandController@destroy');
    });
    Route::get('/brands/{brand}','BrandController@show');
});


Auth::routes();

Route::get('/cars','CarController@index');
Route::get('/home', 'CarController@index')->name('home');
Route::prefix('cars')-> group(function(){

    Route::get('', 'CarController@index');

        Route::group(['middleware'=> ['auth', 'isAdmin']], function() {
            Route::get('/create','CarController@create');
            Route::post('','CarController@store');
            Route::get('/truncate', 'CarController@truncate');
            Route::get('{car}/edit','CarController@edit');
            Route::put('/{car}','CarController@update');
            Route::delete('/{car}','CarController@destroy');
    });
    Route::get('/{car}','CarController@show');
});
