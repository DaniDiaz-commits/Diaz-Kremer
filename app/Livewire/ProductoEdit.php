<?php

namespace App\Livewire;

use App\Models\Familia;
use App\Models\Producto;
use App\Models\Proveedor;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class ProductoEdit extends Component
{
    public $codigo, $nombre, $descripcion, $precio, $stock, $rating, $id_familia, $id_proveedor, $img_url, $productoId;
    public $familias = [];
    public $proveedores = [];
    
    public function render()
    {
        return view('livewire.producto-edit');
    }

    public function mount()
    {
        $this->familias = Familia::all();
        $this->proveedores = Proveedor::all();
    }

    #[On("editProducto")]
    public function editProducto($id) 
    {
        $producto = Producto::find($id);
        $this->productoId = $id;
        $this->codigo = $producto->codigo;
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->precio = $producto->precio;
        $this->stock = $producto->stock;
        $this->rating = $producto->rating;
        $this->id_familia = $producto->id_familia;
        $this->id_proveedor = $producto->id_proveedor;
        $this->img_url = $producto->img_url;
        Flux::modal('edit-producto')->show();
    }
    public function update() 
    {
        $this->validate([
            "codigo" => "required|regex:/^#\d{6}$/",
            "nombre" => "required|string|max:50",
            "descripcion" => "required|string|max:500",
            "precio" => "required|numeric|min:0",
            "stock" => "required|integer|min:0",
            "rating" => "required|numeric|between:1,5",
            "id_familia" => "required|integer",
            "id_proveedor" => "required|integer",
        ]);
        
        $producto = Producto::find($this->productoId);

        $producto->codigo = $this->codigo;
        $producto->nombre = $this->nombre;
        $producto->descripcion = $this->descripcion;
        $producto->precio = $this->precio;
        $producto->stock = $this->stock;
        $producto->rating = $this->rating;
        $producto->id_familia = $this->id_familia;
        $producto->id_proveedor = $this->id_proveedor;
        $producto->img_url = $this->img_url ?? '';

        $producto->save();

        Flux::modal('edit-producto')->close();
        $this->dispatch('reloadProductos');
    }
}
