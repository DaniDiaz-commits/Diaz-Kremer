<?php

namespace App\Livewire;

use App\Models\Proveedor;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;
class ProveedorEdit extends Component
{
    public $nombre, $descripcion, $email, $telefono, $direccion, $logo_url, $proveedorId;
    public function render()
    {
        return view('livewire.proveedor-edit');
    }

    #[On("editProveedor")]
    public function editProveedor($id) 
    {
        $proveedor = Proveedor::find($id);
        $this->proveedorId = $id;
        $this->nombre = $proveedor->nombre;
        $this->descripcion = $proveedor->descripcion;
        $this->email = $proveedor->email;
        $this->telefono = $proveedor->telefono;
        $this->direccion = $proveedor->direccion;
        $this->logo_url = $proveedor->logo_url;

        Flux::modal("edit-proveedor")->show();

        // $this->dispatch("reloadProveedores");
    }

    public function update() 
    {
        $this->validate([
            "nombre" => "required|string",
            "descripcion" => "nullable|string",
            "email" => "nullable|email",
            "telefono" => "nullable|regex:/^\d{9,15}$/",
            "direccion" => "nullable|string|max:250",
            "logo_url" => "nullable|string"
        ]);

        $proveedor = Proveedor::find($this->proveedorId);
        $proveedor->nombre = $this->nombre;
        $proveedor->descripcion = $this->descripcion;
        $proveedor->email = $this->email;
        $proveedor->telefono = $this->telefono;
        $proveedor->direccion = $this->direccion;
        $proveedor->logo_url = $this->logo_url;

        $proveedor->save();

        Flux::modal("edit-proveedor")->close();
        $this->dispatch("reloadProveedores");
    }
}
