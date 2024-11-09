<?php

use App\Http\Controllers\ReligionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReligionbaseController;
use App\Http\Controllers\DenominationController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\GroupController;

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

Route::resource('religions', ReligionController::class);


Route::resource('religionbases', ReligionbaseController::class);
Route::resource('denominations', DenominationController::class);
Route::resource('locations', LocationController::class);
Route::resource('organisations', OrganisationController::class);
Route::resource('groups', GroupController::class);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
