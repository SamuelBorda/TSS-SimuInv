<?php

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Billing;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ExampleLaravel\UserManagement;
use App\Http\Livewire\ExampleLaravel\UserProfile;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Profile;
use App\Http\Livewire\RTL;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Tables;
use App\Http\Livewire\VirtualReality;
use GuzzleHttp\Middleware;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\{Ejercicio1Controller,Ejercicio2Controller,Ejercicio3Controller,Ejercicio4Controller,Ejercicio5Controller };

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
Route::get('/dashboard', [DashboardController::class, 'index']);



Route::get('/ejercicio1', [Ejercicio1Controller::class, 'index'])->name('ejercicio1');
Route::get('/ejercicio2', [Ejercicio2Controller::class, 'index'])->name('ejercicio2');
Route::get('/ejercicio3', [Ejercicio3Controller::class, 'index'])->name('ejercicio3');
Route::get('/ejercicio4', [Ejercicio4Controller::class, 'index'])->name('ejercicio4');
Route::get('/ejercicio5', [Ejercicio5Controller::class, 'index'])->name('ejercicio5');




Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('forgot-password', ForgotPassword::class)->middleware('guest')->name('password.forgot');
Route::get('reset-password/{id}', ResetPassword::class)->middleware('signed')->name('reset-password');




Route::get('user-profile', UserProfile::class)->name('user-profile');
Route::get('user-management', UserManagement::class)->name('user-management');

Route::get('billing', Billing::class)->name('billing');
Route::get('profile', Profile::class)->name('profile');
Route::get('tables', Tables::class)->name('tables');
Route::get('notifications', Notifications::class)->name("notifications");
Route::get('virtual-reality', VirtualReality::class)->name('virtual-reality');
Route::get('static-sign-in', StaticSignIn::class)->name('static-sign-in');
Route::get('static-sign-up', StaticSignUp::class)->name('static-sign-up');
Route::get('rtl', RTL::class)->name('rtl');
