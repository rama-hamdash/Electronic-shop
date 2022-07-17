<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class FeaturedProduct extends Component
{
    public $products ;
    public function mount()
    {
        $this->products= Product::with(['color','size'])->inRandomOrder()->limit(8)->get();
        // dd($this->products[0]->name);
    }
    public function render()
    {
        return view('livewire.featured-product');
    }
}
