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

Route::resource('users', App\Http\Controllers\UserController::class);
Route::post('/users/changePassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('users.changePassword');


Route::resource('components', App\Http\Controllers\ComponentController::class);
Route::get('/components/showOfType/{type}', [App\Http\Controllers\ComponentController::class, 'showOfType'])->name('components.showOfType');
Route::get('/components/createOfType/{type}', [App\Http\Controllers\ComponentController::class, 'createOfType'])->name('components.createOfType');
Route::post('/components/storeOfType/{type}', [App\Http\Controllers\ComponentController::class, 'storeOfType'])->name('components.storeOfType');
Route::view('/products/adminPanel', 'user.adminPanel')->name('products.adminPanel');

Route::get('/sets/addComponent/{type}/{component}', [App\Http\Controllers\ConfiguratorController::class, 'addComponent'])->name('sets.addComponent');
Route::get('/configurator', [App\Http\Controllers\ConfiguratorController::class, 'configurator'])->name('sets.configurator');

Route::resource('sets', App\Http\Controllers\ConfiguratorController::class);