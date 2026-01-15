<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $post->titulo }}</h1>

<p>{{ $post->contenido }}</p>

<p>
    <small>Creado el {{ $post->created_at }}</small>
</p>

<a href="{{ route('posts.index') }}">Volver al listado</a>

</body>
</html>