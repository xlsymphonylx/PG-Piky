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
    // Word orders Controller
    Route::get('work_orders', [WorkOrderController::class, 'index'])->middleware('permission:show-work_orders')->name('work_orders.index');
    Route::get('work_orders/create', [WorkOrderController::class, 'create'])->middleware('permission:create-work_orders')->name('work_orders.create');
    Route::post('work_orders', [WorkOrderController::class, 'store'])->middleware('permission:create-work_orders')->name('work_orders.store');;
    Route::get('work_orders/{id}', [WorkOrderController::class, 'show'])->middleware('permission:show-work_orders')->name('work_orders.show');
    Route::post('work_orders/search', [WorkOrderController::class, 'searchWorkOrder'])->middleware('permission:show-work_orders')->name('work_orders.search');
    Route::post('work_orders/stopSearch', [WorkOrderController::class, 'stopSearch'])->middleware('permission:show-work_orders')->name('work_orders.stopSearch');
    Route::get('work_orders/{id}/edit', [WorkOrderController::class, 'edit'])->middleware('permission:edit-work_orders')->name('work_orders.edit');
    Route::put('work_orders/{id}', [WorkOrderController::class, 'update'])->middleware('permission:edit-work_orders')->name('work_orders.update');
    Route::delete('work_orders/{id}', [WorkOrderController::class, 'destroy'])->middleware('permission:delete-work_orders')->name('work_orders.destroy');
    // Conditions Controller
    Route::get('conditions', [ConditionController::class, 'index'])->middleware(['permission:show-conditions', 'checkLatestWorkOrder'])->name('conditions.index');
    Route::get('conditions/create', [ConditionController::class, 'create'])->middleware(['permission:create-conditions', 'checkLatestWorkOrder'])->name('conditions.create');
    Route::post('conditions', [ConditionController::class, 'store'])->middleware(['permission:create-conditions', 'checkLatestWorkOrder'])->name('conditions.store');
    Route::get('conditions/{id}', [ConditionController::class, 'show'])->middleware(['permission:show-conditions', 'checkLatestWorkOrder'])->name('conditions.show');
    Route::get('conditions/{id}/edit', [ConditionController::class, 'edit'])->middleware(['permission:edit-conditions', 'checkLatestWorkOrder'])->name('conditions.edit');
    Route::put('conditions/{id}', [ConditionController::class, 'update'])->middleware(['permission:edit-conditions', 'checkLatestWorkOrder'])->name('conditions.update');
    Route::delete('conditions/{id}', [ConditionController::class, 'destroy'])->middleware(['permission:delete-conditions', 'checkLatestWorkOrder'])->name('conditions.destroy');

    // Users Controller
    Route::get('users', [UserController::class, 'index'])->middleware('permission:show-users')->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->middleware('permission:create-users')->name('users.create');
    Route::post('users', [UserController::class, 'store'])->middleware('permission:create-users')->name('users.store');
    Route::get('users/{id}', [UserController::class, 'show'])->middleware('permission:show-users')->name('users.show');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->middleware('permission:edit-users')->name('users.edit');
    Route::put('users/{id}', [UserController::class, 'update'])->middleware('permission:edit-users')->name('users.update');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->middleware('permission:delete-users')->name('users.destroy');

    // Roles Controller
    Route::get('roles', [RolController::class, 'index'])->middleware('permission:show-roles')->name('roles.index');
    Route::get('roles/create', [RolController::class, 'create'])->middleware('permission:create-roles')->name('roles.create');
    Route::post('roles', [RolController::class, 'store'])->middleware('permission:create-roles')->name('roles.store');
    Route::get('roles/{id}', [RolController::class, 'show'])->middleware('permission:show-roles')->name('roles.show');
    Route::get('roles/{id}/edit', [RolController::class, 'edit'])->middleware('permission:edit-roles')->name('roles.edit');
    Route::put('roles/{id}', [RolController::class, 'update'])->middleware('permission:edit-roles')->name('roles.update');
    Route::delete('roles/{id}', [RolController::class, 'destroy'])->middleware('permission:delete-roles')->name('roles.destroy');

    // TimeLog Controller
    Route::get('time_log', [TimeLogController::class, 'index'])->middleware(['permission:show-time_logs', 'checkLatestWorkOrder'])->name('time_log.index');
    Route::get('time_log/create', [TimeLogController::class, 'create'])->middleware(['permission:create-time_logs', 'checkLatestWorkOrder'])->name('time_log.create');
    Route::post('time_log', [TimeLogController::class, 'store'])->middleware(['permission:create-time_logs', 'checkLatestWorkOrder'])->name('time_log.store');
    Route::get('time_log/{id}', [TimeLogController::class, 'show'])->middleware(['permission:show-time_logs', 'checkLatestWorkOrder'])->name('time_log.show');
    Route::get('time_log/{id}/edit', [TimeLogController::class, 'edit'])->middleware(['permission:edit-time_logs', 'checkLatestWorkOrder'])->name('time_log.edit');
    Route::put('time_log/{id}', [TimeLogController::class, 'update'])->middleware(['permission:edit-time_logs', 'checkLatestWorkOrder'])->name('time_log.update');
    Route::delete('time_log/{id}', [TimeLogController::class, 'destroy'])->middleware(['permission:delete-time_logs', 'checkLatestWorkOrder'])->name('time_log.destroy');

    // Ship Controller
    Route::get('ships', [ShipController::class, 'index'])->middleware(['permission:show-ships', 'checkLatestWorkOrder'])->name('ships.index');
    Route::get('ships/create', [ShipController::class, 'create'])->middleware(['permission:create-ships', 'checkLatestWorkOrder'])->name('ships.create');
    Route::post('ships', [ShipController::class, 'store'])->middleware(['permission:create-ships', 'checkLatestWorkOrder'])->name('ships.store');
    Route::get('ships/{id}', [ShipController::class, 'show'])->middleware(['permission:show-ships', 'checkLatestWorkOrder'])->name('ships.show');
    Route::get('ships/{id}/edit', [ShipController::class, 'edit'])->middleware(['permission:edit-ships', 'checkLatestWorkOrder'])->name('ships.edit');
    Route::put('ships/{id}', [ShipController::class, 'update'])->middleware(['permission:edit-ships', 'checkLatestWorkOrder'])->name('ships.update');
    Route::delete('ships/{id}', [ShipController::class, 'destroy'])->middleware(['permission:delete-ships', 'checkLatestWorkOrder'])->name('ships.destroy');
});
