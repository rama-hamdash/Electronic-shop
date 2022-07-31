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
        $this->cart = Cart::getcontent();
        foreach ($this->cart as $i) {
            $this->total +=  $i->price * $i->quantity;
        }
    }
    public function render()
    {
        return view('livewire.basket');
    }


    public function decreaseQuantity($id)
    {
        if ($qty = Cart::get($id)->quantity > 1) {
            // $this->quantity = $this->quantity - 1;
            $qty = $qty - 2;
            Cart::update($id, ['quantity' => $qty]);
            $this->cart = Cart::getcontent();
            $this->emit('updateCart');
        }
        
    }

    public function increaseQuantity($id)
    {
        if ($qty = Cart::get($id)->quantity > 0) {

            Cart::update($id, [
                'quantity' => $qty
            ]);
            $this->cart = Cart::getcontent();
            $this->emit('updateCart');
        }
    }

    public function removeFromCart($id)
    {
        Cart::remove($id);
        $this->cart = Cart::getcontent();

        $this->emit('removeFromCart', $id);
        
        $this->alert('success', 'item removed');
    }

    public function clearAllCart()
    {
        Cart::clear();
        $this->cart = Cart::getcontent();
        $this->alert('success', 'item removed');
    }
}
