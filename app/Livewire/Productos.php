<?php

namespace App\Livewire;

use App\Models\Producto;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

use Livewire\WithPagination;

class Productos extends Component
{
    use WithPagination;

    public $sortColumn = 'id'; 
    public $sortDirection = 'asc';
    public $productoId;

    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
        // $this->reloadProductos();
    }

    // public function mount() 
    // {
    //     $this->productos = Producto::all();
    //     // $productos = Producto::orderBy($this->sortColumn, $this->sortDirection)->get();
    //     // $this->productos = Producto::with(['familia', 'proveedor'])->get();
    // }
    public function render()
    {
        $productos = Producto::orderBy($this->sortColumn, $this->sortDirection)
        ->paginate(25);
        return view('livewire.productos', compact('productos'));
    }

    // #[On("reloadProductos")]
    // public function reloadProductos()
    // {
    //     $this->productos = Producto::orderBy($this->sortColumn, $this->sortDirection)->get();
    //     // $this->productos = Producto::all();
    //     // $this->productos = Producto::with(['familia', 'proveedor'])->get();
    // }
    public function edit ($id) { $this->dispatch("editProducto", $id); }

    public function delete ($id) 
    {
        $this->productoId = $id;
        Flux::modal('delete-producto')->show();
        $this->dispatch("deleteProduto", $id);
    }
    public function destroy() 
    {
        Producto::find($this->productoId)->delete();
        // $this->reloadProductos();
        Flux::modal('delete-producto')->close();
    }

    #[On('reloadProductos')]
    public function reloadProductos()
    {
        $productos = Producto::orderBy($this->sortColumn, $this->sortDirection)->paginate(25);
        return view('livewire.productos', compact('productos'));
    }
}
