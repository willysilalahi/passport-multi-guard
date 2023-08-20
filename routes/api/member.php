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

Route::post('member/login', [LoginController::class, 'memberLogin'])->name('memberLogin');
Route::group(['prefix' => 'member', 'middleware' => ['auth:member-api', 'scopes:member']], function () {
    Route::get('dashboard', [LoginController::class, 'memberDashboard']);
});
