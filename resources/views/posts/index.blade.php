<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de posts</h1>

    @forelse ($posts as $post)
    <article>
        <h3>{{ $post->titulo }}</h3>

        <a href="{{ route('posts.show', $post) }}">Ver</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Borrar</button>
        </form>
    </article>
    <hr>
    @empty
    <p>No hay posts</p>
    @endforelse

    {{ $posts->links() }}
</body>
</html>