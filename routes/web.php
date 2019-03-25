<?php

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

//Esto se ha comentado para mostrar el panel administrador
// Route::get('/', function () {
//     return view('welcome');
// });

//la raiz lo cambiamos por admin
Route::get('/', function(){
    return view('admin.dashboard');
});

route::Resource('/materia', 'controladorMateria');

Route::get('/ejemplo', function(){
    return view('ejemplo');
});