<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/' , [WelcomeController::class, 'index'])->name('welcome');


Route::get('/servizi/{service}' , [PublicController::class, 'show'])->name('servizi.show');

Route::get('/servizi' , [PublicController::class, 'index'])->name('servizi.index');


Route::get('/chi-sono' , function(){return view('chisono');})->name('chisono');

Route::get('/contact', [ContactController::class, 'index'])->name('contatti.index');

Route::post('/contact', [ContactController::class, 'store'])->name('contatti.store');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/