<?php

namespace App\Livewire;

use App\Models\Familia;
use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;

class Familias extends Component
{
    public $sortColumn = 'id'; 
    public $sortDirection = 'asc';
    public $familias, $familiaId;

    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
        $this->reloadFamilias();
    }
    public function mount() 
    {
        $this->familias = Familia::all();
    }
    public function render()
    {
        return view('livewire.familias');
    }

    #[On("reloadFamilias")]
    public function reloadFamilias()
    {
        $this->familias = Familia::orderBy($this->sortColumn, $this->sortDirection)->get();
    }

    public function edit($id) {
        $this->dispatch("editFamilia", $id);
    }
    public function delete ($id) 
    {
        $this->familiaId = $id;
        Flux::modal('delete-familia')->show();
        $this->dispatch("deleteFamilia", $id);
    }
    public function destroy() 
    {
        Familia::find($this->familiaId)->delete();
        $this->reloadFamilias();
        Flux::modal('delete-familia')->close();
    }
}

