<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryProduct extends Component
{

    public $categories ;
    public function mount()
    {
        $this->categories= Category ::inRandomOrder()->limit(8)->get();
        // dd($this->products[0]->name);
    }
    public function render()
    {
        return view('livewire.category-product');
    }
}
