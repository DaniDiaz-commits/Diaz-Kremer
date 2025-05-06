<?php

namespace App\Livewire;

use App\Models\Familia;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Familias extends Component
{
    use WithPagination;

    public $sortColumn = 'id';
    public $sortDirection = 'asc';
    // public $search = '';
    public $familiaId;
    
    // public function mount() 
    // {
    //     $this->familias = Familia::all();
    // }

    public function sortBy($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
    }

    public function render()
    {
        $familias = Familia::orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(25);
        // $familias = Familia::where('nombre', 'like', '%' . $this->search . '%')
        //     ->orWhere('descripcion', 'like', '%' . $this->search . '%')
        //     ->orderBy($this->sortColumn, $this->sortDirection)
        //     ->paginate(25);
        return view('livewire.familias', compact('familias'));
    }

    public function edit($id) 
    { 
        $this->dispatch("editFamilia", $id); 
    }

    public function delete($id)
    {
        $this->familiaId = $id;
        Flux::modal('delete-familia')->show();
        $this->dispatch("deleteFamilia", $id);
    }

    public function destroy()
    {
        Familia::find($this->familiaId)?->delete();
        Flux::modal('delete-familia')->close();
    }

    #[On('reloadFamilias')]
    public function reloadFamilias()
    {
        $familias = Familia::orderBy($this->sortColumn, $this->sortDirection)->paginate(25);
        return view('livewire.familias', compact('familias'));
    }
}
