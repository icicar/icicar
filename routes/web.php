<?php

use App\Http\Controllers\VehiculosController;
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
    return view('index');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Route::view('/contacto', 'contact.contact');
Route::view('/detalles-vehiculo', 'car-details.car-details');
Route::view('/listado-vehiculos', 'car-listing.car-listing');
Route::view('/politica-privacidad', 'policies.privacy-policy');
Route::view('/politica-cookies', 'policies.cookies-policy');
Route::view('/aviso-legal', 'policies.legal-advidsory');
Route::view('/quienes-somos', 'about-us.about-us');

Route::get('get-marcas-vehiculos', [VehiculosController::class,'getMarcasVehiculos']);
Route::get('get-modelos-vehiculos', [VehiculosController::class,'getModelosVehiculos']);
