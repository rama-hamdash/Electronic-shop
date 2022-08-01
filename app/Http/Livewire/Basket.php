<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Basket extends Component
{
    use LivewireAlert;

    public $cart = [];
    public $total = 0.0;

    protected $listeners = [
        'addToBasket' => 'add_to_cart',
    ];
    public function mount()
    {

        $this->cart = Cart::content();
        foreach ($this->cart as $i) {
            $this->total +=  $i->price * $i->quantity;
        }
    }
    public function render()
    {
        return view('livewire.basket');
    }


    public function decreaseQuantity($rowId)
    {
        $item_quantity = Cart::get($rowId)->qty;
        if ($item_quantity > 0) {
            $item_quantity = $item_quantity - 1;
            Cart::instance('default')->update($rowId, $item_quantity);
            $this->emit('updateCart');
        } else
            Cart::remove($rowId);
        $this->cart = Cart::content();
    }

    public function increaseQuantity($rowId)
    {
        $item_quantity = Cart::get($rowId)->qty;

        if ($item_quantity > 0) {
            $item_quantity = $item_quantity + 1;
            Cart::instance('default')->update($rowId, $item_quantity);
            $this->emit('updateCart');
        }
        $this->cart = Cart::content();
    }

    public function removeFromCart($id)
    {
        Cart::remove($id);
        $this->cart = Cart::content();

        $this->emit('updateCart');

        $this->alert('success', 'item removed');
    }

    public function clearAllCart()
    {
        Cart::destroy();
        $this->cart = Cart::content();
        $this->alert('success', 'item removed');
    }
}
