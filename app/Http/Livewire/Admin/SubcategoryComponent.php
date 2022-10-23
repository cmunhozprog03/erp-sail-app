<?php

namespace App\Http\Livewire\Admin;

use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;


class SubcategoryComponent extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function render()
    {
        $subcategories = Subcategory::with('category')
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->orderBy('name', 'ASC')
            ->paginate(4);
            
        return view('livewire.admin.subcategory-component', compact('subcategories'));
    }
}
