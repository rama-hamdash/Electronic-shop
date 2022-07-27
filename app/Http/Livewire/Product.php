<?php

namespace App\Http\Livewire;

use App\Models\Product as modelProduct;
use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use Darryldecode\Cart\Facades\Cartfacade as cart;
use Illuminate\Support\Facades\Auth;

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
        $product = modelProduct::find($id);
        Cart::session(Auth::user()->id)->add([
            'id' => $id,
            'price' => $price,
            'quantity' => $qty,
            'name' => $product->name,
        ])->associate(modelProduct::class);
    }
}
