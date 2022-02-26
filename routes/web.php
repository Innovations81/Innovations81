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
Route::any('/', [App\Http\Controllers\Auth\AuthController::class, 'adminlogin'])->name('/');
Route::any('/forgot', [App\Http\Controllers\Auth\AuthController::class, 'forgot'])->name('admin.forgot');
Route::post('/sendlink', [App\Http\Controllers\Auth\AuthController::class, 'sendlink'])->name('admin.sendlink');
Route::post('/admin-logout', [App\Http\Controllers\Auth\AuthController::class, 'adminlogout'])->name('admin.logout');
Route::post('/verify_email', [UserController::class, 'checkemail'])->name('verify_email');
Route::post('/verify_username', [UserController::class, 'checkusername'])->name('verify_username');

Auth::routes();

//Routes Only Accessible to Admin
Route::group(['prefix' => 'admin', 'middleware' => 'CheckRole:admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    // Role Routes
    Route::get('role', [RoleController::class, 'index'])->name('admin.role');
    Route::get('get_form', [RoleController::class, 'create'])->name('getform');
    Route::post('add_role', [RoleController::class, 'store'])->name('add_role');
    Route::get('delete_role/{id}', [RoleController::class, 'destroy'])->name('delete_role');
    Route::post('update_role/{id}', [RoleController::class, 'update'])->name('update_role');
    Route::get('edit_role/{id}', [RoleController::class, 'edit'])->name('edit_role');

    //User Routes
    Route::get('/create_user', [UserController::class, 'index'])->name('admin.create_user');
    Route::post('/add_user', [UserController::class, 'store'])->name('add_user');

    Route::get('/get_city/{id}', [UserController::class, 'getCity'])->name('get_city');
});

// operation manager routes
Route::group(['prefix' => 'operations/manager', 'middleware' => 'CheckRole:operations_manager'], function () {
    Route::get('/dashboard', [App\Http\Controllers\OperationManager\DashboardController::class, 'index'])->name('om.dashboard');

    // Players Routes
    Route::get('players',[App\Http\Controllers\OperationManager\PlayersController::class, 'index'])->name('om.players');
    Route::get('player-details/{id}',[App\Http\Controllers\OperationManager\PlayersController::class, 'show'])->name('om.player-details');
    Route::post('store-player',[App\Http\Controllers\OperationManager\PlayersController::class, 'store'])->name('om.add-players');

    Route::get('tasks/players',[App\Http\Controllers\OperationManager\TasksController::class, 'index'])->name('om.players-tasks');
    Route::get('tasks/sales',[App\Http\Controllers\OperationManager\TasksController::class, 'salesTask'])->name('om.sales-tasks');



    Route::get('reports/agents',[App\Http\Controllers\OperationManager\ReportsController::class, 'index'])->name('om.agents-reports');

    Route::get('reports/players',[App\Http\Controllers\OperationManager\ReportsController::class, 'playersReport'])->name('om.players-reports');


    Route::get('associates',[App\Http\Controllers\OperationManager\AssociatesController::class, 'index'])->name('om.associates');


    Route::get('agents',[App\Http\Controllers\OperationManager\AgentsController::class, 'index'])->name('om.agents');


    Route::get('transcations',[App\Http\Controllers\OperationManager\TranscationController::class, 'index'])->name('om.transcations');
    Route::get('/users-transactions',[App\Http\Controllers\OperationManager\TranscationController::class, 'userTranscations'])->name('om.userTranscations');

});

// associate related routes
Route::group(['prefix' => 'associate', 'middleware' => 'CheckRole:associate'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Associate\DashboardController::class, 'index'])->name('associate.dashboard');

    // Players Routes
    Route::get('tasks',[App\Http\Controllers\Associate\TasksController::class, 'index'])->name('associate.tasks');

    Route::get('players',[App\Http\Controllers\Associate\PlayersController::class, 'index'])->name('associate.players');
    Route::get('player-details/{id}',[App\Http\Controllers\Associate\PlayersController::class, 'show'])->name('associate.player-details');
    Route::post('store-player',[App\Http\Controllers\Associate\PlayersController::class, 'store'])->name('associate.add-players');

    Route::get('reports',[App\Http\Controllers\Associate\ReportsController::class, 'index'])->name('associate.reports');


    Route::get('transcations',[App\Http\Controllers\Associate\TranscationController::class, 'index'])->name('associate.transcations');

});

// associate related routes
// Route::group(['prefix' => 'agent', 'middleware' => 'CheckRole:agent'], function () {
//     Route::get('/dashboard', [App\Http\Controllers\Associate\DashboardController::class, 'index'])->name('dashboard');

//     // Players Routes
//     Route::get('players',[App\Http\Controllers\Associate\PlayersController::class, 'index'])->name('players');
//     Route::get('player-details/{id}',[App\Http\Controllers\Associate\PlayersController::class, 'show'])->name('player-details');
//     Route::post('store-player',[App\Http\Controllers\Associate\PlayersController::class, 'store'])->name('add-players');

//     Route::get('reports',[App\Http\Controllers\Associate\ReportsController::class, 'index'])->name('reports');


//     Route::get('transcations',[App\Http\Controllers\Associate\TranscationController::class, 'index'])->name('transcations');

// });
