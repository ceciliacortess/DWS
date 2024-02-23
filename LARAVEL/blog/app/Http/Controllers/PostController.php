<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;


use App\Models\Post;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        // Crear un nuevo post con los datos del formulario
        $post = new Post();
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->user_id = Auth::id(); // Asignar el ID del usuario autenticado
        $post->save();

        // Redirigir al listado principal de posts
        return redirect()->route('posts.index');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post, 'id' => $id]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($postId = null)
    {
        // Esta función no se utiliza en este caso, redireccionamos a otra ruta
        return redirect()->route('inicio');
    }

    public function editGeneric()
    {
        // Esta función no se utiliza en este caso, redireccionamos a otra ruta
        return redirect()->route('inicio');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Esta función no se utiliza en este caso, ya que no hay un formulario de edición de posts
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Verificar si el usuario autenticado es el autor del post
        if ($post->user_id != Auth::id()) {
            abort(403, 'No tienes permiso para eliminar este post.');
        }

        $post->delete();

        return redirect()->route('posts.index');
    }

    /**
     * Crea un nuevo post de prueba.
     */


    public function nuevoPrueba()
    {
        $titulo = "Título " . rand();
        $contenido = "Contenido " . rand();


        // Obtener el ID del usuario autenticado
        $usuario_id = auth()->id();


        // Verificar si hay un usuario autenticado
        if ($usuario_id) {
            // Crear el nuevo post con el ID del usuario
            $post = new Post();
            $post->titulo = $titulo;
            $post->contenido = $contenido;
            $post->user_id = $usuario_id;
            $post->save();
        } else {

            return redirect()->route('login')->with('error', 'Debes iniciar sesión para crear un post.');
        }


        return redirect()->route('posts.index');
    }


    /**
     * Edita un post de prueba existente.
     */
    public function editarPrueba($id)
    {
        $post = Post::findOrFail($id);
        if ($post->user_id != Auth::id()) {
            abort(403, 'No tienes permiso para editar este post.');
        }

        $titulo = "Título " . rand();
        $contenido = "Contenido " . rand();
        $post = Post::findOrFail($id);
        $post->titulo = $titulo;
        $post->contenido = $contenido;
        $post->save();
        return redirect()->route('posts.index');
    }
}
