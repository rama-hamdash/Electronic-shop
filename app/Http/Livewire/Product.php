<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use Darryldecode\Cart\Facades\Cartfacade as cart;
class Product extends Component
{
    use LivewireAlert;


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
    public function addToBasket($id, $qty, $price)
    {
        $this->alert('success', 'item added');
        $this->alert('success', 'item added');
        $product = Product::find($id);
        Cart::add([
            'id' => $id,
            'price' => $price,
            'quantity' => $qty,
            'name' => $product->name,
            'image_url' => $product->image_url,
        ]);
    }
}
