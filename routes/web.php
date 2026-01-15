<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
}) ->name('inicio');

//Ruta plantilla.blade.php
Route::get('/Plantilla', function () {
    return view('plantilla');
}) ->name('plantilla');

Route::get('/views/posts/listado.blade.php', function ($id = 4) {
    return "Listado de posts, " . $id;
}) -> Where('id', "[0-9]") ->name('posts_listado');

//Ruta simple
Route::get('fecha', function () {
    return date("d/m/y h:i:s");
});

//Ruta con parametros
Route::get('saluda/{nombre?}', function ($nombre = "Messi"){
    return "Hola, " . $nombre;
}) ->Where('nombre', "[A-Za-z]+");

Route::resource('posts', PostController::class)
    ->only(['index', 'show', 'create', 'edit']);

?>
