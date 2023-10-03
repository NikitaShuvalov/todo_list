<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::middleware(["auth"])->group(function () {
    Route::get("/dashboard/tasks", [\App\Http\Controllers\TaskController::class, "index"])->name("tasks.index");

    Route::post("/dashboard/tasks", [\App\Http\Controllers\Api\TaskController::class, "store"])->name("tasks.store");

    Route::get("/dashboard/edit/{id}", [\App\Http\Controllers\TaskController::class, "edit"])->name("tasks.update");
    Route::post("/dashboard/edit/{id}", [\App\Http\Controllers\Api\TaskController::class, "update"]);

    Route::get("/dashboard/delete/{id}", [\App\Http\Controllers\Api\TaskController::class, "destroy"])->name("tasks.destroy");
});
