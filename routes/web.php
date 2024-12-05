<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pages/{id}', [\App\Http\Controllers\HomeController::class, 'pages'])->name('pages');
Route::get('/news', [\App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/news/{slug}', [\App\Http\Controllers\HomeController::class, 'newsDetail'])->name('newsDetail');
Route::get('/galleries', [\App\Http\Controllers\HomeController::class, 'galleries'])->name('galleries');
