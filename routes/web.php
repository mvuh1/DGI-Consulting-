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

Route::view('/msg', 'emails.messages.created')->name('msg');

Route::view('/','layouts.index')->name('home');

Route::view('/contact','pages.contact')->name('contact');

Route::view('/Apropos/methode-pedagogique','pages.AproposDeNous.methode-pedagogique')->name('methode-pedagogique');
Route::view('/Apropos/equipe','pages.AproposDeNous.equipe')->name('equipe');
Route::view('/Apropos/dgi-info','pages.AproposDeNous.dgi_info')->name('dgi-info');

Route::view('/formations/formationDe/formateur-adulte','pages.formations.formationDe.formateur_adulte')->name('formateur-adulte');
Route::view('/formations/formationDe/formateur-formateur','pages.formations.formationDe.formateur_formateur')->name('formateur-formateur');
Route::view('/formations/formationDe/f-consultant','pages.formations.formationDe.f_consultant')->name('f-consultant');

Route::resource('formations', FormationController::class)->middleware('auth');
