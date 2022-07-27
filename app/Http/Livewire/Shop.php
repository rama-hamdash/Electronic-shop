<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\Cartfacade as cart;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Shop extends Component
{
    use LivewireAlert;

    public $cart = [];
    public $total = 0.0;

    protected $listeners = [
        'addToBasket' => 'add_to_cart',
    ];
    public function mount()
    {
        $this->cart = Cart::session(Auth::user()->id)->getcontent();
        foreach ($this->cart as $i) {
            $this->total +=  $i->price * $i->quantity;
        }
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
