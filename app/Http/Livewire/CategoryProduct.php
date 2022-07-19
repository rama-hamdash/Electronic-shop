<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CategoryProduct extends Component
{

    public $categories;
    public $products;

    public function selectCategory($id)
    {
        $this->products = Product::whereRelation('model','category_id', $id)->inRandomOrder()->limit(8)->get();
    }

    public function mount()
    {
        $this->categories = Category::inRandomOrder()->limit(8)->get();
        $this->products = Product::whereRelation('model','category_id', $this->categories[0]->id)->inRandomOrder()->limit(8)->get();
    }
    public function render()
    {
        return view('livewire.category-product');
    }
}
