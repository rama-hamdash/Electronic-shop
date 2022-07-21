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
        $this->categories = Category::inRandomOrder()->whereHas('models', operator: '>', count: 0)->limit(3)->get();
        $this->products = Product::whereRelation('model','category_id', $this->categories[0]->id)->inRandomOrder()->limit(8)->get();
    }
    public function render()
    {
        return view('livewire.category-product');
    }
}
