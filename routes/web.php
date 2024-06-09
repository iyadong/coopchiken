<?php

use App\Http\Controllers\AuthControl;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\DataSensorController;
use Illuminate\Http\Request;
use App\Http\Controllers\SensorDataController;


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
    return view('welcome');
});

Route::get('/login', [AuthControl::class, 'index'])->name('login');
Route::post('/auth/login',[AuthControl::class, 'login']);
Route::post('/auth/logout',[AuthControl::class, 'logout']);






Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/config_heater', [DashboardController::class, 'configHeater']);
    Route::get('/config_lamp', [DashboardController::class, 'configLamp']);
    Route::get('/manage_device', [DashboardController::class, 'manageDevice']);
    Route::get('/manage_user', [DashboardController::class, 'manageUser']);
    Route::get('/subscribe-mqtt', [SensorController::class, 'subscribe']);


    Route::post('/mqtt-callback', [DataSensorController::class, 'mqttCallback']);

    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});










Route::post('/sensor/data', [SensorDataController::class, 'store']);
