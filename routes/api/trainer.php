<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('trainer/login', [LoginController::class, 'trainerLogin'])->name('trainerLogin');
Route::group(['prefix' => 'trainer', 'middleware' => ['auth:trainer-api', 'scopes:trainer']], function () {
    // authenticated staff routes here 
    Route::get('dashboard', [LoginController::class, 'trainerDashboard']);
});
