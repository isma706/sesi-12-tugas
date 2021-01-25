<?php

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

Route::resource('/', 'HomeController');
Route::resource('/news', 'NewsPageController');
Route::resource('/product', 'ProductPageController');
Route::resource('/about', 'AboutPageController');
Route::resource('/bisnis', 'BisnisPageController');
Route::resource('/investor', 'InvestorPageController');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
    Route::resource('/', 'DashboardController');
    Route::resource('/news', 'NewsController');
    Route::resource('/product', 'ProductController');
    Route::resource('/about', 'AboutController');
    Route::resource('/bisnis', 'BisnisController');
    Route::resource('/investor', 'InvestorController');

    });
