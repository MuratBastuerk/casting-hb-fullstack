<?php

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

Route::middleware( 'auth:sanctum' )->get( '/cat_image', [\App\Http\Controllers\Api\ConsumeCat::class, 'randomImage'] );
Route::middleware( 'auth:sanctum' )->get( '/cat_fact', [\App\Http\Controllers\Api\ConsumeCat::class, 'randomFact'] );
Route::middleware( 'auth:sanctum' )->get( '/cat_breeds', [\App\Http\Controllers\Api\ConsumeCat::class, 'breeds'] );
