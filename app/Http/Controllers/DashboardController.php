<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Familia;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
public function index()
{
    $totalProductos = Producto::count();
    $valorInventario = Producto::sum(DB::raw('precio * stock'));
    $productosRecientes = Producto::latest()->take(5)->get();
    $proveedores = Proveedor::all();
    $topFamilias = Producto::selectRaw('id_familia, COUNT(*) as total')
        ->groupBy('id_familia')
        ->orderByDesc(DB::raw('COUNT(*)'))  // Ordenar por cantidad de productos
        ->limit(5)  // Limitar a las 5 primeras familias
        ->with('familia')
        ->get()
        ->map(function ($item) {
            return [
                'familia' => $item->familia->nombre ?? 'Sin familia',
                'total' => $item->total,
            ];
    });

    return view('AdminDashboard', compact(
        'totalProductos',
        'valorInventario',
        'topFamilias',
        'proveedores',
        'productosRecientes',
    ));
}
}
