<?php

use App\Http\Controllers\ProfileController;
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
// Route::get('/authentication', function () {
//     return view('auth');
// });
Route::get('/authenticationio', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register/user', [AuthController::class, 'registeruser'])->name('store');

Route::get('/', [AuthController::class, 'home'])->name('home');
Route::post('/logged', [AuthController::class, 'loginuser'])->name('store');
Route::post('/contact', [AuthController::class, 'contacts'])->name('home');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/invest', function () {
    return view('/investor/home');
});

Route::get('/creator', function () {
    return view('/innovator/home');
});

Route::get('/creator/new', function () {
    return view('/innovator/new');
});

Route::get('/creator/resources', function () {
    return view('/innovator/resource');
});

Route::get('/creator/account', function () {
    return view('/innovator/account');
});

Route::get('/creator/setting', function () {
    return view('/innovator/setting');
});

Route::get('/creator/support', function () {
    return view('/innovator/support');
});

Route::get('/auth/login', function () {
    return view('/investor/login');
});

Route::get('/auth/signup', function () {
    return view('/investor/home');
});
