<?php

use App\Http\Controllers\Kuis1Controller;
use App\Http\Controllers\Kuis2Controller;
use App\Http\Controllers\Kuis3Controller;
use App\Http\Controllers\Kuis4Controller;
use App\Http\Controllers\StudentController;
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

Route::post('/student',[StudentController::class, 'store']);
Route::post('/kuis1',[Kuis1Controller::class, 'store']);
Route::post('/kuis2',[Kuis2Controller::class, 'store']);
Route::post('/kuis3',[Kuis3Controller::class, 'store']);
Route::post('/kuis4',[Kuis4Controller::class, 'store']);
