<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Models\Empleado;

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

//Manipular topdas las rutas 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleado', function () {
    return view('empleado.index');
});

//Cuando el user acceda a empleado/create el EmpleadoController accedera al metodo create
//Route::get('empleado/create',[EmpleadoController::class,'create']);

//Acceder a todas las rutas(metodos) del empleado controller y poder tener un mejor manejo de las mismas
Route::resource('empleado',EmpleadoController::class)->middleware('auth'); //<- autentificacion de usuario

//Auth::routes(['register'=>false,'reset'=>false]); // Eliminar partes del formulario login 

Route::post('/empleados-store',[EmpleadoController::class, 'ajax']);

Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});

