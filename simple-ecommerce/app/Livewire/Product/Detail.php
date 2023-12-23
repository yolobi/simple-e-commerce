<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Detail extends Component
{
    public $product_id;
    public $product;

    public function mount()
    {
        $this->product = Product::query()->find($this->product_id);
    }

    public function render()
    {
        return view('livewire.product.detail');
    }
}
