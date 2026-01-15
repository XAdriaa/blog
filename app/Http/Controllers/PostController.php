<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $posts = Post::orderBy('titulo', 'ASC')->paginate(5);
    return view('posts.index', compact('posts'));
}


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $post = Post::findOrFail($id);
    return view('posts.show', compact('post'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('inicio');
    }

    public function edit($id)
    {
        return redirect()->route('inicio');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    Post::findOrFail($id)->delete();
    $posts = Post::orderBy('titulo', 'ASC')->paginate(5);
    return view('posts.index', compact('posts'));
}

public function nuevoPrueba()
{
    Post::create([
        'titulo' => 'Título ' . rand(1, 1000),
        'contenido' => 'Contenido ' . rand(1, 1000),
    ]);

    return redirect()->route('posts.index');
}

public function editarPrueba($id)
{
    $post = Post::findOrFail($id);

    $post->update([
        'titulo' => 'Título ' . rand(1, 1000),
        'contenido' => 'Contenido ' . rand(1, 1000),
    ]);

    return redirect()->route('posts.index');
}

}
