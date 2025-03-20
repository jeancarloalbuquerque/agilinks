<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('links', LinkController::class);
Route::resource('collections', CollectionController::class);