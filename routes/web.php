<?php

use Illuminate\Support\Facades\Route;
//Main
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\DashboardController;
use App\Http\Controllers\Main\UserController;
use App\Http\Controllers\Main\ContactController;
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
| Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::post('/account/{id}', [HomeController::class, 'updateAccount'])->name('updateAccount');
Route::post('/password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');
Route::post('/delete-account/{id}', [HomeController::class, 'deleteAccount'])->name('deleteAccount');

/*
|--------------------------------------------------------------------------
| ContactUs Routes
|--------------------------------------------------------------------------
*/
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'contactUs']);

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/
Route::resource('profile', ProfileController::class);

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/
Route::resource('users', UserController::class);
Route::post('search-users', [UserController::class, 'searchItems']);
