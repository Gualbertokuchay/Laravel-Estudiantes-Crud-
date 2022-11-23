<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
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
//ruta para las vistas de los create y imdde
/*Route::get('/alumno',[AlumnoController::class,'index'])->name('alumnos.index');

Route::get('/alumno/create',[AlumnoController::class,'create'])->name('alumnos.create');

Route::post('/alumno/create',[AlumnoController::class,'store'])->name('alumnos.store');


//clases para las rutas de alumno store.....
Route::get('/alumno/store',[AlumnoController::class, 'store']);


Route::get('/alumno/update',[AlumnoController::class, 'update']);


Route::get('/alumno/delete',[AlumnoController::class, 'delete']);


Route::get('/alumno/select',[AlumnoController::class, 'select']);


Route::get('/alumno/show',[AlumnoController::class, 'show']);

Route::get('/alumno/index',[AlumnoController::class, 'index']);

Route::get('/alumnos',[AlumnoController::class.'Alumnos']);
*/
Route::resource('alumnos', AlumnoController::class);
