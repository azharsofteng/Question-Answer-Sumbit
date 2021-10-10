<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Authentication
Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'authCheck'])->name('auth.check');

Route::get('/', [UserController::class, 'index'])->name('home');


Route::get('get-upazila/{id}',function($id){
    return App\Models\Upazila::where('district_id',$id)->get();
});
Route::get('get-union/{id}',function($id){
    return App\Models\Union::where('upazilla_id',$id)->get();
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/table', [DashboardController::class, 'table'])->name('table');
    Route::get('/form', [DashboardController::class, 'form'])->name('form');

    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
});