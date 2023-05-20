<?php

use App\Models\Channel;
use App\Models\Network;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('health', function(){
    return [
        'database'=> DB::connection()->getDatabaseName() === env('DB_DATABASE')
    ];
});

Route::get('channels', function(){
    return Channel::all();
});

Route::get('networks', function(){
    return Network::all();
});