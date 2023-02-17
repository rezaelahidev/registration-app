<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\App;
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

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {

    Route::get('/login', [LoginController::class, 'showUserLoginForm'])->name('auth.login');
    Route::get('/register', [RegisterController::class, 'showUserRegisterationForm'])->name('auth.register');
});

Route::get('/greeting/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    // ...
});
