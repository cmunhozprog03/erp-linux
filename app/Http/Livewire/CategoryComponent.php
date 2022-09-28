<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public function render()
    {      

        $categories = Category::paginate(1);
        return view('livewire.category-component', compact('categories'));
    }
}
