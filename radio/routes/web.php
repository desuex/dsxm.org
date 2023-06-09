<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\NetworkController::class, 'index']);
Route::get('/networks/{network}/channels', [\App\Http\Controllers\ChannelsController::class, 'index']);
Route::get('/channels/{key}', [\App\Http\Controllers\TracksController::class, 'index']);


Route::get('/register', function(){return view('auth.register');});
