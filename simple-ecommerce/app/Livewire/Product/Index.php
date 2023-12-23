<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $categories;
    public $selectedCategory = 0;
    public $search;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        $products = Product::query()
            ->when($this->selectedCategory != 0, function ($query) {
                $query->where('category_id', $this->selectedCategory);
            })
            ->get();
        return view('livewire.product.index', compact('products'));
    }
}
