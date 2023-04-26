<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\InfoDataController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCourseController;
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

Route::get('/data', [InfoDataController::class, 'index']);
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::get('/students/{student}/courses', [StudentCourseController::class, 'show']);
Route::get('/students/{student}/careers', [StudentCourseController::class, 'show']);
Route::get('/students/{student}/data', [StudentController::class, 'data']);
Route::get('/career', [CareerController::class, 'index']);
