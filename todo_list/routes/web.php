<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TaskController;

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

Route::get("/tasks", [TaskController::class, "index"]);
Route::post("/tasks", [\App\Http\Controllers\Api\TaskController::class, "store"]);

Route::get("/edit/{id}", [TaskController::class, "edit"]);
Route::post("/edit/{id}", [\App\Http\Controllers\Api\TaskController::class, "update"]);

Route::get("/delete/{id}", [\App\Http\Controllers\Api\TaskController::class, "destroy"]);
