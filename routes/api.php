<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsApiController;

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


Route::get('/records', [RecordsApiController::class, 'index']);
Route::post('/records', [RecordsApiController::class, 'store']);
Route::put('/records/{record}', [RecordsApiController::class, 'update']);
Route::delete('/records/{record}', [RecordsApiController::class, 'destroy']);