<?php

use App\Http\Controllers\VehiculosController;
use App\Http\Livewire\IndexFormComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [VehiculosController::class, 'index']);



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Route::view('/contacto', 'contact.contact');
Route::view('/detalles-vehiculo', 'car-details.car-details');
Route::view('/listado-vehiculos', 'car-listing.car-listing')->name('listado_vehiculos');
Route::view('/politica-privacidad', 'policies.privacy-policy');
Route::view('/politica-cookies', 'policies.cookies-policy');
Route::view('/aviso-legal', 'policies.legal-advidsory');
Route::view('/quienes-somos', 'about-us.about-us');

Route::get('get-marcas-vehiculos', [VehiculosController::class,'getMarcasVehiculos']);
Route::get('get-modelos-vehiculos/{idmarca}', [VehiculosController::class,'getModelosVehiculos']);
Route::get('get-carburantes-vehiculos', [VehiculosController::class,'getCarburantesVehiculos']);
Route::get('get-tipos-oferta', [VehiculosController::class,'getTiposOferta']);
Route::get('get-tipos-persona', [VehiculosController::class,'getTiposPersona']);
Route::get('get-tratamientos-persona', [VehiculosController::class,'getTratamientosPersona']);
Route::get('get-paises', [VehiculosController::class,'getPaises']);
Route::get('get-provincias', [VehiculosController::class,'getProvincias']);
Route::get('get-municipios', [VehiculosController::class,'getMunicipios']);
Route::get('get-vehiculos', [VehiculosController::class,'getVehiculos']);

// Route::get('change-event', ChangeEvent::class);
// Route::get('/marcas', [IndexFormComponent::class]);
