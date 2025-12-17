<?php
// //**Continuamos con el proyecto blog. En este caso vamos a definir una plantilla y una serie de vistas que la
//     utilicen.
//     Comenzaremos definiendo una plantilla llamada plantilla.blade.php en la carpeta de vistas
// del proyecto ( ). Define una cabecera con una sección yield para el título, y
// otra para el contenido de la página, como la del ejemplo que hemos visto anteriormente.
// Define en un archivo aparte en la subcarpeta , llamado , una barra de
// navegación que nos permita acceder a estas direcciones de momento:
// Página de inicio
// Listado de posts
// Incluye la barra de navegación en la plantilla base que has definido antes
// A partir de la plantilla base, define otras dos vistas en una subcarpeta , llamadas
// y . Como título de cada página pon un
// breve texto de lo que son (por ejemplo, "Listado posts" y "Ficha post"), y como contenido de momento
// deja un encabezado que indique la página en la que estamos: "Listado de posts" o "Ficha del post
// XXXX", donde XXXX será el identificador del post que habremos pasado por la URL (y que deberás */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Plantilla</title>
</head>
<body>
    <header>
        @include('partials.nav');
    </header>


    
</body>
</html>