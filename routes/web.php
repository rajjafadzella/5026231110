<?php

use Illuminate\Support\Facades\Route;
//use itu import java.io kalo di java
//Illuminate\Support\Facades\ itu package, route itu class

//System.out.println("Hello world")
// / itu published url, function itu controller
Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('pertama');
});
