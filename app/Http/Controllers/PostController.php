<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use App\Models\Post; // Asegúrate de importar el modelo Post si lo necesitas


class PostController extends Controller
{
    public function index()
    {
        //$post = Post::with('user')->latest()->get();//Carga los posts con el usuario
        $post = Post::latest()->get();
        return view('posts.index', compact('post'));//Envia los posts a la vista
    }
    
    public function store(Request $request)
    {
        // Validar el contenido
        $request->validate([
            'content' => 'required|string',
        ]);
        // Aquí podrías guardar el post en la base de datos
        Post::create([
            'content' => $request->input('content'),
            'user_id' => Auth::id(), // Asignar el ID del usuario autenticado
        ]);
        // Redireccionar o mostrar mensaje
        return redirect('/posts')->with('success', '¡Publicación guardada!');
    }
}