<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{id}', function ($id) {
    return "Listado de posts, " . $id;
}) -> Where('id' . "[0-9]*");

//Ruta simple
Route::get('fecha', function () {
    return date("d/m/y h:i:s");
});

//Ruta con parametros
Route::get('saluda/{nombre?}', function ($nombre = "Messi"){
    return "Hola, " . $nombre;
}) ->Where('nombre', "[A-Za-z]+");

?>
