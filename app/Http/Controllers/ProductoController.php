<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::orderBy('rating', 'desc')->get();
        $familias = Familia::orderBy('id', 'asc')->get();
        // $productos = Producto::orderBy('id', 'asc')->paginate(5);
        return view('productos.index', compact('productos', 'familias'));
    }

    // public function create() {
    //     "Formulario de crear";
    // }

    public function show($id)
    {
        // compact($id)
        $producto = Producto::find($id);
        return view('productos.show', [
            'producto' => $producto
        ]);
    }

    public function buscar(Request $request)
    {
        $query = $request->input('query');
        // return $query;
        if (!$query) {
            $productos = Producto::orderBy('id', 'asc')->get();
            // $productos = Producto::orderBy('id', 'asc')->paginate(15);
        } else {
            $productos = Producto::where('nombre', 'LIKE', "%$query%")->orderBy('id', 'asc')->get();
        }
        $familias = Familia::orderBy('id', 'asc')->get();
        return view('productos.index', compact('productos', 'familias'));
    }

    public function orden(Request $request)
    {
        
        // $productos = Producto::where('familia_id', $request->nombre);
        if ($request->filled('nombre')) { // Usar filled() en lugar de has() para evitar valores vacíos
            $productos = Producto::where('familia_id', $request->nombre)->get();
        }

        // Ordenar
        if ($request->filled('alfabetico')) {
            switch ($request->alfabetico) { // Se usaba $request->orden en vez de $request->alfabetico
                case 'az':
                    $productos = Producto::orderBy('nombre', 'asc')->get();
                    break;
                case 'za':
                    $productos = Producto::orderBy('nombre', 'desc')->get();
                    break;
                case 'mas-vendidos':
                    $productos= Producto::orderBy('stock', 'desc')->get();
                    break;
                case 'mejor-valorados':
                    $productos= Producto::orderBy('rating', 'desc')->get();
                    break;
            }
        }

        // Filtrar por precio
        if ($request->filled('precio') && $request->precio !== 'All') { // Validar correctamente
            switch ($request->precio) { // Se usaba $request->orden en vez de $request->alfabetico
                case 0:
                    $productos = Producto::orderBy('precio', 'desc')->get();
                case 1:
                    $productos= Producto::whereBetween('precio', [0, 30])->orderBy('precio', 'desc')->get();
                    break;
                case 2:
                    $productos= Producto::whereBetween('precio', [30, 60])->orderBy('precio', 'desc')->get();
                    break;
                case 3:
                    $productos= Producto::whereBetween('precio', [70, 100])->orderBy('precio', 'desc')->get();
                    break;
                case 4:
                    $productos= Producto::where('precio', ">=", 100)->orderBy('precio', 'desc')->get();
                    break;
            }
        }

        // Filtrar por rating
        if ($request->filled('rating')) { $productos= Producto::where('rating', '=', (int)$request->rating)->get(); 
        }

        // $productos = $productos->paginate(12); // Ajusta la paginación según necesites
        // return $productos;
        // $productos = Producto::orderBy('rating', 'desc')->get();
        $familias = Familia::orderBy('id', 'asc')->get();
        return view('productos.index', compact('productos', 'familias'));
    }
}
