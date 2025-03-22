<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProductos = Producto::count();
        $totalVentas = Producto::sum('precio'); // Ejemplo, suma de precios
        $productosStockBajo = Producto::where('stock', '<', 10)->count();
        $productosRecientes = Producto::latest()->take(5)->get();

        return view('dashboard', compact('totalProductos', 'totalVentas', 'productosStockBajo', 'productosRecientes'));
    }
}