<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Familia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
public function index()
{
    $totalProductos = Producto::count();
    $valorPorFamilia = Producto::selectRaw('id_familia, SUM(precio) as total')
    ->groupBy('id_familia')
    ->with('familia')
    ->get()
    ->map(function ($item) {
        return [
            'familia' => $item->familia->nombre ?? 'Sin familia',
            'total' => $item->total,
        ];
    });
    $valorInventario = Producto::sum('precio');

    $productosStockBajo = Producto::where('stock', '<', 10)->count();
    $productosRecientes = Producto::latest()->take(5)->get();

    // Conteo de productos por familia
    $productosPorFamilia = Producto::selectRaw('id_familia, COUNT(*) as total')
        ->groupBy('id_familia')
        ->with('familia') // Asegúrate de tener la relación definida en el modelo Producto
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
        'productosStockBajo',
        'productosRecientes',
        'productosPorFamilia'
    ));
}
}
