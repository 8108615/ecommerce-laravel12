<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;

class ProductCreate extends Component
{
    public $product = [
        'sku' => '',
        'name' => '',
        'description' => '',
        'image_path' => '',
        'price' => '',
        'subcategory_id' => '',
    ];
    public function render()
    {
        return view('livewire.admin.products.product-create');
    }
}
