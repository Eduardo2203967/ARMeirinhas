<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Middleware\Authenticate;

use App\Http\Controllers\DuvidaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\PageController;



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

Route::get('/', function() {
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('duvida', DuvidaController::class);

Route::get('/socios', [UserController::class, 'index'])->name('socios');

Route::get('/noticias', [PageController::class, 'noticias'])->name('noticias');


Route::get('/edit_profile', [UserController::class, 'edit'])->name('users.edit');
Route::put('/edit_profile/{user}', [UserController::class, 'update'])->name('users.update');

