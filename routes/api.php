<?php

use App\Http\Controllers\GetImageController;
use App\Http\Controllers\GetPropertiController;
use App\Http\Controllers\PostPropertiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getProperties' , [GetPropertiController::class , 'getAllProducts']);

Route::post('/postProduct' , [PostPropertiController::class , 'postProduct']);

Route::post('/debugUploadImage' , [PostPropertiController::class , 'debugUploadImage']);

Route::get('/getImage/{imageName}' , [GetImageController::class , 'fetchPropertiImage']);
