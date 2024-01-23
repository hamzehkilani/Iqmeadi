<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller\clientscontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/client', [clientscontroller::class, 'getClient']);
Route::get('/getclientImage/{id}', [clientscontroller::class, 'getClientImage']);
Route::get('/getclientvideo/{id}', [clientscontroller::class, 'getClientVedio']);
Route::get('/getrandomimage', [clientscontroller::class, 'getRandomImage']);

