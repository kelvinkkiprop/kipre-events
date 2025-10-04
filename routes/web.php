<?php

use Illuminate\Support\Facades\Route;
//Main
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\DashboardController;
use App\Http\Controllers\Main\UserController;
use App\Http\Controllers\Main\ContactController;
use App\Http\Controllers\Main\EventBookingController;
use App\Http\Controllers\Main\EventRegistrationController;
//Settings
use App\Http\Controllers\Settings\ProfileController;

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
    // return view('welcome');
    return view('index');
});


/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| HomeController
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::post('/account/{id}', [HomeController::class, 'updateAccount'])->name('updateAccount');
Route::post('/password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');
Route::post('/delete-account/{id}', [HomeController::class, 'deleteAccount'])->name('deleteAccount');

/*
|--------------------------------------------------------------------------
| ContactController
|--------------------------------------------------------------------------
*/
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'contactUs']);

/*
|--------------------------------------------------------------------------
| DashboardController
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| ProfileController
|--------------------------------------------------------------------------
*/
Route::resource('profile', ProfileController::class);


/*
|--------------------------------------------------------------------------
| EventBookingController
|--------------------------------------------------------------------------
*/
Route::resource('event-booking', EventBookingController::class);
Route::post('search-event-booking', [EventBookingController::class, 'searchItems']);

/*
|--------------------------------------------------------------------------
| UserController
|--------------------------------------------------------------------------
*/
Route::resource('users', UserController::class);
Route::post('search-users', [UserController::class, 'searchItems']);


/*
|--------------------------------------------------------------------------
| EventRegistrationController
|--------------------------------------------------------------------------
*/
Route::resource('event-registrations', EventRegistrationController::class);
Route::post('search-event-registrations', [EventRegistrationController::class, 'searchItems']);
