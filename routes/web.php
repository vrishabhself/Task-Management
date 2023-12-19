<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::get('task/create', [TaskController::class, 'create'])->name('task.create');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::get('task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::get('task/show/{id}', [TaskController::class, 'show'])->name('task.show');
Route::delete('/task/delete/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::post('/task/complete/{id}', [TaskController::class, 'complete'])->name('task.complete');
