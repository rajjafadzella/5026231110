<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

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

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('satu', function () {
	return view('pertama');
});

Route::get('linktree', function () {
	return view('linktree2');
});

Route::get('align', function () {
	return view('align');
});

Route::get('bootstrap', function () {
	return view('bootstrap1');
});

Route::get('flex-items', function () {
	return view('flexitems');
});

Route::get('sidebar', function () {
	return view('sidebar');
});

Route::get('validasi-form', function () {
	return view('validasi1');
});

Route::get('javascript-form', function () {
	return view('js1');
});

Route::get('ets-landingpage', function () {
	return view('index');
});

Route::get('danantara', function () {
	return view('danantara');
});


Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

Route::get('/pegawai/{nama}',[PegawaiController::class,'index']);
Route::get('/formulir',[PegawaiController::class,'formulir']);
Route::post('/formulir/proses',[PegawaiController::class,'proses']);


// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);
