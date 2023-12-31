<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WeatherAPIController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/conditions', [App\Http\Controllers\ConditionController::class, 'index'])->name('conditions.index');
Route::get('/conditions/create', [App\Http\Controllers\ConditionController::class, 'create'])->name('conditions.create');
Route::post('/conditions', [App\Http\Controllers\ConditionController::class, 'store'])->name('conditions.store');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'edit'])->name('tasks.edit');
Route::patch('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('tasks.update');

Route::delete('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/conditions/weather', [App\Http\Controllers\WeatherAPIController::class, 'index'])->name('weather.index');