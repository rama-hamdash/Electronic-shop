<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $model;
    public $product;
    public $sizes;

    public function mount($model, $product)
    {
        $this->model = $model;
        $this->product = $product;

        $this->getSizes();
    }
    
    public function getSizes()
    {
        $s = [];
        foreach ($this->model->products as $p) {
            $s[] = $p->size->name;
        }
        $this->sizes = array_unique($s);
    }

    public function selectProduct($id)
    {
        $this->product = $this->model->products->where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.product');
    }
}
