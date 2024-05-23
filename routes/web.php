<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::post('/', [AppointmentController::class,'save'])->name('save.appointment');

Route::get('/doctor/login', function (){
    return view('Doctor.Auth.login');
})->name('doctor.login');

Route::get('/doctor/registration', function (){
    return view('Doctor.Auth.signup');
})->name('doctor.registration');

Route::get('/doctor/dashboard', function (){
    return view('Doctor.dashboard');
});

Route::post('/doctor/registration', [AuthController::class,'savedoc'])->name('doctor.registration.save');
Route::post('/doctor/login/save', [AuthController::class,'DocLogin'])->name('doctor.login.save');