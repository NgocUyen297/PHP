<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

Route::get('/posts', [PostsController::class, 'index']);
Route::resource('foods',FoodsController::class);





