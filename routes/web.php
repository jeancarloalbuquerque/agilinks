<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('links', [LinkController::class, 'index'])->name('links.index');
Route::get('links/create', [LinkController::class, 'create'])->name('links.create');
Route::post('links', [LinkController::class, 'store'])->name('links.store');