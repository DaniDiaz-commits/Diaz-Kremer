<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'contenido' => 'required|string|max:500',
            'id_producto' => 'required|exists:productos,id',
        ]);

        // Verificar autenticación
        if (!Auth::check()) {
            return redirect()->back()->withErrors(['Debes iniciar sesión para comentar.']);
        }

        // Crear comentario
        Comentario::create([
            'contenido' => $request->input('contenido'),
            'id_producto' => $request->input('id_producto'),
            'id_user' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Comentario añadido correctamente.');
    }

    public function destroy($id)
    {
        // Encuentra el comentario que corresponde al ID
        $comentario = Comentario::find($id);

        // Verifica si el comentario existe y si el usuario tiene permiso para eliminarlo
        if ($comentario && $comentario->id_user ===  Auth::id()) {
            // Eliminar el comentario
            $comentario->delete();

            // Redirigir de vuelta con un mensaje de éxito
            return redirect()->back()->with('success', 'Comentario eliminado con éxito.');
        }

        // Si no se encuentra el comentario o el usuario no tiene permiso
        return redirect()->back()->with('error', 'No tienes permiso para eliminar este comentario o el comentario no existe.');
    }
}
