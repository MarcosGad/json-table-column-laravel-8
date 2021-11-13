<?php

use Illuminate\Support\Facades\Route;

Route::get('produc/create','ProductController@show_product_form')->name('produc.create');
Route::post('produc/create','ProductController@store');
Route::get('produc','ProductController@index')->name('produc.index');
