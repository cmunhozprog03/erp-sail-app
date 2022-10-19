<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;



class CategoryComponent extends Component
{
    use WithPagination;

    
    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }


    public function render()
    {
        $categories = Category::where('name', 'LIKE', '%' . $this->search . '%')
            ->orderBy('name', 'ASC')
            ->paginate(4);
        return view('livewire.admin.category-component', compact('categories'));
    }
}
