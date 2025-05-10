<?php

namespace App\Livewire\Products;

use Livewire\Component;
use App\Models\Product;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.products.product-index', compact('products'));
    }
}
