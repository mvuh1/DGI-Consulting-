<?php

use App\Http\Controllers\FormationController;
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

Route::get('/admin', function () {
    return view('welcome')->name('admin');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Route::get('/', function () {
    return view('layouts.index')->name('home');
});
 */
Route::view('/','layouts.index')->name('home');
Route::view('/contact','pages.contact')->name('contact');
Route::view('/equipe','pages.equipe')->name('equipe');
Route::view('/dgi-info','pages.dgi_info')->name('dgi-info');

Route::resource('formations', FormationController::class)->middleware('auth');
