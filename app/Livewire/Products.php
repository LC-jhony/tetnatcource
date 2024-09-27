<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.products', [
            'products' => $this->getProducts(),
        ]);
    }

    public function getProducts()
    {
        $qry = Product::query();
        $qry = $qry->when($this->search, function ($query) {
            return $query->where('name', 'like', "%{$this->search}%");
        });

        return $qry->paginate(5);
    }
}
