<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

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
Route::any('/', [App\Http\Controllers\Auth\AuthController::class, 'adminlogin'])->name('admin.login');
Route::any('/forgot', [App\Http\Controllers\Auth\AuthController::class, 'forgot'])->name('admin.forgot');
Route::post('/sendlink', [App\Http\Controllers\Auth\AuthController::class, 'sendlink'])->name('admin.sendlink');
Route::post('/admin-logout', [App\Http\Controllers\Auth\AuthController::class, 'adminlogout'])->name('admin.logout');
Route::post('/verify_email', [UserController::class, 'checkemail'])->name('verify_email');
Route::post('/verify_username', [UserController::class, 'checkusername'])->name('verify_username');

Auth::routes();

//Routes Only Accessible to Admin
Route::group(['prefix' => 'admin', 'middleware' => 'CheckRole:admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('/admin.dahsboard');
    Route::post('/update-withdraw-status', [App\Http\Controllers\Admin\DashboardController::class, 'update_withdraw_status'])->name('update-withdraw-status');

    // Role Routes
    Route::get('role', [RoleController::class, 'index'])->name('role');
    Route::get('get_form', [RoleController::class, 'create'])->name('getform');
    Route::post('add_role', [RoleController::class, 'store'])->name('add_role');
    Route::get('delete_role/{id}', [RoleController::class, 'destroy'])->name('delete_role');
    Route::post('update_role/{id}', [RoleController::class, 'update'])->name('update_role');
    Route::get('edit_role/{id}', [RoleController::class, 'edit'])->name('edit_role');

    //User Routes
    Route::get('/create_user', [UserController::class, 'index'])->name('create_user');
    Route::post('/add_user', [UserController::class, 'store'])->name('add_user');

    Route::get('/get_city/{id}', [UserController::class, 'getCity'])->name('get_city');
});

// operation manager routes
Route::group(['prefix' => 'operations/manager', 'middleware' => 'CheckRole:operations_manager'], function () {
    Route::get('/dashboard', [App\Http\Controllers\OperationManager\DashboardController::class, 'index'])->name('dashboard');

    // Players Routes
    Route::get('players',[App\Http\Controllers\OperationManager\PlayersController::class, 'index'])->name('players');
    Route::get('player-details/{id}',[App\Http\Controllers\OperationManager\PlayersController::class, 'show'])->name('player-details');
    Route::post('store-player',[App\Http\Controllers\OperationManager\PlayersController::class, 'store'])->name('add-players');

    Route::get('tasks',[App\Http\Controllers\OperationManager\TasksController::class, 'index'])->name('tasks');


    Route::get('reports',[App\Http\Controllers\OperationManager\ReportsController::class, 'index'])->name('reports');


    Route::get('associates',[App\Http\Controllers\OperationManager\AssociatesController::class, 'index'])->name('associates');


    Route::get('agents',[App\Http\Controllers\OperationManager\AgentsController::class, 'index'])->name('agents');


    Route::get('transcations',[App\Http\Controllers\OperationManager\TranscationController::class, 'index'])->name('transcations');

});
