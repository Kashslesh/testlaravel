<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexioneController;

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
    return view('home');
})->name('Home');
Route::get('/about', function () {
    return view('about');
})->name('About');
Route::get('/contact', function () {
    return view('contact');
})->name('Contact');
Route::get('/connexion', function () {
    return view('connexion');
})->name('Connexion');
Route::post('/connexion/submit',[ConnexioneController::class, 'submit'])->name('connexion-form');
Route::get('/connexion/all',[ConnexioneController::class, 'allData'])->name('connexion-data');
Route::get('/connexion/all/{id}',[ConnexioneController::class,'showPassword'])->name('connexion-data-one');
 Route::get('/connexion/all/{id}/update',[ConnexioneController::class,'updateMot'])->name('connexion-update');
 Route::post('/connexion/all/{id}/update',[ConnexioneController::class,'updateMotSubmit'])->name('connexion-updat-submit');
 Route::get('/connexion/all/{id}/delete',[ConnexioneController::class,'deleteMdp'])->name('connexion-delete');
