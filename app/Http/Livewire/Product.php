<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $model;
    public $product;

    public function mount($model)
    {
        $this->model = $model;
        $this->product = $this->model->products[0];
    }
    
    public function selectProduct($id)
    {
        $this->product = $this->model->products->where('id',$id)->first();
    }

    public function render()
    {
        return view('livewire.product');
    }
}
