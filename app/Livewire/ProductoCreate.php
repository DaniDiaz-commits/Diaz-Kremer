<?php

namespace App\Livewire;

use App\Models\Producto;
use Flux\Flux;
use Livewire\Component;

class ProductoCreate extends Component
{
    public $codigo, $nombre, $descripcion, $precio, $stock, $rating, $id_familia, $id_proveedor, $img_url;
    public function render()
    {
        return view('livewire.producto-create');
    }

    public function submit()
    {
        $this->validate([
            'codigo' => 'required|string|unique:productos,codigo',
            'nombre' => 'required|string|unique:productos,nombre',
            'descripcion' => 'required|string|max:250|unique:productos,descripcion',
            'precio' => 'required|numeric|min:0',
            // 'newPrecio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'rating' => 'required|integer|between:1,5',
            'id_familia' => 'required|exists:familias,id',
            'id_proveedor' => 'required|exists:proveedores,id',
            'img_url' => 'nullable|url',
        ]);

        Producto::create([
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'stock' => $this->stock,
            'rating' => $this->rating,
            'id_familia' => $this->id_familia,
            'id_proveedor' => $this->id_proveedor,
            'img_url' => $this->img_url,
        ]);

        $this->resetForm();

        Flux::modal('create-producto')->close();

        $this->dispatch('reloadProductos');
    }

    public function resetForm()
    {
        $this->codigo = "";
        $this->nombre = "";
        $this->descripcion = "";
        $this->precio = "";
        $this->stock = "";
        $this->rating = "";
        $this->id_familia = "";
        $this->id_proveedor = "";
        $this->img_url = "";
    }
}
