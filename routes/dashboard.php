<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();



Route::middleware(['auth'])->prefix('dashboard')->group(function(){

	Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard');
	Route::resource('/categories', 'Dashboard\CategoriesController');
	Route::get('/trashbox', 'Dashboard\DashboardController@trashbox')->name('trash.box');
	Route::get('/categories/restore/{id}', 'Dashboard\CategoriesController@restore')->name('categories.restore');
	Route::get('/product/restore/{id}', 'Dashboard\ProductsController@restore')->name('product.restore');
	Route::get('/user/restore/{id}', 'Dashboard\UserController@restore')->name('users.restore');
	Route::resource('/products', 'Dashboard\ProductsController');
	Route::resource('/users', 'Dashboard\UserController');

});