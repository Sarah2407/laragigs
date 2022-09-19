<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserConrtoller;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Routes for listing
Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

Route::get('/listings/{listing}', [ListingController::class, 'show']);


//Routes for users
Route::get('/register', [UserConrtoller::class, 'create'])->middleware('guest');

Route::post('/users', [UserConrtoller::class, 'store']);

Route::post('/logout', [UserConrtoller::class, 'logout'])->middleware('auth');

Route::get('/login', [UserConrtoller::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserConrtoller::class, 'authenticate']);