<?php

use App\Http\Controllers\ConditionController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\TimeLogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkOrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::middleware(['auth'])->group(function () {
    Route::resource('work_orders', WorkOrderController::class);
    Route::resource('conditions', ConditionController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RolController::class);
    Route::resource('time_log', TimeLogController::class);
    Route::resource('ships', ShipController::class);
});
