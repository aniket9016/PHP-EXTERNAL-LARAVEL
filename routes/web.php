<?php

use App\Http\Controllers\Employeecontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [Employeecontroller::class, 'openregister']);
Route::post('/store', [Employeecontroller::class, 'store']);
Route::get('/display', [Employeecontroller::class, 'display']);
Route::get('/delete/{id}', [Employeecontroller::class, 'delete']);
Route::get('update/{id}', [Employeecontroller::class, 'updatedata']);
Route::post('update', [Employeecontroller::class, 'update']);
