<?php

namespace App\Livewire;

use App\Models\Producto;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class ProductoEdit extends Component
{
    public $codigo, $nombre, $descripcion, $precio, $stock, $rating, $id_familia, $id_proveedor, $img_url, $productoId;

    public function render()
    {
        return view('livewire.producto-edit');
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
            "codigo" => "required",
            "nombre" => "required",
            "descripcion" => "required",
            "precio" => "required",
            "stock" => "required",
            "rating" => "required",
            "id_familia" => "required",
            "id_proveedor" => "required",
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
    }
}
