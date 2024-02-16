<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post eliminado correctamente.');
    }

    // Métodos para pruebas temporales
    public function nuevoPrueba()
    {
        $post = new Post();
        $post->titulo = 'Título ' . rand();
        $post->contenido = 'Contenido ' . rand();
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post creado correctamente.');
    }

    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        $post->titulo = 'Título ' . rand();
        $post->contenido = 'Contenido ' . rand();
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post editado correctamente.');
    }
}
?>
