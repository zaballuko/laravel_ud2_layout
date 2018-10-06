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

Route::get('/', function () {
    //return view('welcome');
    return view('home');
});

// 2.1
Route::get('contacto', function () {
	return "Aquí podrás contactar";
});

Route::get('/foro', function () {
	return "Aquí está el foro";
});

// 2.1 Parámetros
Route::get('/blog/{id}', function ($id) {
	return "Este es el artículo número ".$id;
});

Route::get('/blog/{id}/{nombre}', function ($id,$nombre) {
	return "Este es el artículo número ".$id." creado por ".$nombre;
})->where ('nombre','[a-zA-Z]+');

// 2.2
Route::get('/saludo', "Ud2Controller@inicio");

Route::get('/saludo/{nombre}', "Ud2Controller@inicionombre");

Route::get('/saludo/{nombre}/{color}', "Ud2Controller@iniciocolor");

//2.4
Route::get('contacto/contactForm_get', function () {
    return 'Formulario de Contacto sin datos (método GET)';
});

//2.5
Route::post('contacto/contactForm_post', function () {
    return 'Formulario de Contacto sin datos (método POST)';
});

Route::post('contacto/contactForm', function () {
	 $nombre=request()->get('Nombre');
	 $apellido=request()->get('Apellido');

	return ('Los datos del formulario son los siguientes:<br /><br />Nombre: '.$nombre.'<br /><br />Apellido: '.$apellido);
});

Route::post('contacto/contactFormVista', "Ud2Controller@contacto_req");

//2.5 Formulario y resultado misma vista
Route::get('multi', function () {
    return view('multi');
});
Route::post('multi', "Ud2Controller@contactomulti");

//2.6
Route::get('resumen', function () {
    return view('resumen');
});
