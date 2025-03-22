<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function __invoke() 
    {
        $proveedores = Proveedor::all();
        return view('proveedores', compact('proveedores'));
    }
}
