<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Proveedor;
use Flux\Flux;
use Livewire\Attributes\On;
class Proveedores extends Component
{
    public $proveedores, $proveedorId;

    public function mount()
    {
        $this->proveedores = Proveedor::all();
    }
    public function render()
    {
        return view('livewire.proveedores');
    }

    #[On("reloadProveedores")]
    public function reloadProveedores()
    {
        $this->proveedores = Proveedor::all();
    }

    public function edit($id) 
    {
        $this->dispatch("editProveedor", $id);
    }

    public function delete($id)
    {
        $this->proveedorId = $id;
        Flux::modal("delete-proveedor")->show();
    }

    public function destroy()
    {
        Proveedor::find($this->proveedorId)->delete();
        $this->reloadProveedores();
        Flux::modal("delete-proveedor")->close();

    }
}
