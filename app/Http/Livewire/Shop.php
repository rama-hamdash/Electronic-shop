<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Darryldecode\Cart\Facades\Cartfacade as cart;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Shop extends Component
{
    use LivewireAlert;

    public $product;


    public function mount($product,)
    {
        $this->product = $product;
    }

    public function addToBasket($id, $qty, $price)
    {
        $product = Product::find($id);
        Cart::session(Auth::user()->id)->add([
            'id' => $id,
            'price' => $price,
            'quantity' => $qty,
            'name' => $product->name,
        ])->associate(Product::class);
        $this->alert('success', 'item added');
    }
    public function render()
    {
        return view('livewire.shop');
    }
}
