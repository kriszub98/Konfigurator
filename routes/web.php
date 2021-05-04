<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/logowanie', 'user.login');        
Route::view('/rejestracja', 'user.register');    
Route::view('/uzytkownicy', 'user.index')->name('user.index');     
Route::view('/produkty', 'user.products')->name('user.products');
Route::view('/tabelaproduktu', 'user.prodtable')->name('user.prodtable');  
Route::view('/dodawanieproduktu', 'user.addprod')->name('user.addprod');    