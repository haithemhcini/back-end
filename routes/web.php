<?php

use App\Http\Controllers\RecordsController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');});

Route::get('/records', [RecordsController::class, 'show']);
Route::post('/records', [RecordsController::class, 'create']);
Route::put('/records/{record}', [RecordsController::class, 'update']);
Route::delete('/records/{record}', [RecordsController::class, 'delete']);


Route::get('/records/add', [RecordsController::class, 'add']);
Route::get('/records/{record}/edit', [RecordsController::class, 'edit']);