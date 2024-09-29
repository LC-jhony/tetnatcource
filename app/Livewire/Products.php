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

    /**
     * The function `getProducts` retrieves products based on a search query and paginates the results.
     *
     * @return The `getProducts` function is returning a paginated list of products based on the search
     *             criteria provided. If there is a search term specified, it filters the products by name using a
     *             `like` comparison. The paginated result is limited to 3 products per page.
     */
    public function getProducts()
    {
        $qry = Product::query();
        $qry = $qry->when($this->search, function ($query) {
            return $query->where('name', 'like', "%{$this->search}%");
        });

        return $qry->paginate(3);
    }
}
