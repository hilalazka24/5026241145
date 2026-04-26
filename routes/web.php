<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('pert1', function () {
	return view('intro');
});

Route::get('pert2', function () {
	return view('news1');
});

Route::get('pert3', function () {
	return view('responsive');
});

Route::get('task-tm3', function () {
	return view('task-tm3');
});

Route::get('pert4', function () {
	return view('145');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);
