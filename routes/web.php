<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VoucherController;
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

// Route::get('/', function () {
//     if (session('user')) {
//         return view('index');
//     } else {
//         return redirect('/login');
//     }
// });
Route::controller(VoucherController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/generate', 'generate');
    Route::get('/view/{id}', 'singleView');
    Route::get('/delete/{id}', 'delete');
    Route::get('/logout', 'logout');
});


Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index');
    Route::POST('login', 'login');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('register', 'index');
    Route::post('register', 'register');
});