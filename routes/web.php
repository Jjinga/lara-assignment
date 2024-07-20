<?php

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home/{user}', [App\Http\Controllers\profiles::class, 'index'])->name('home.show');

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');



Route::get('/', [ListingController::class, 'index']);
Route::post('/create', [ListingController::class, 'store']);
