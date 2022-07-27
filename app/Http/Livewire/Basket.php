<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Cart as CartCart;
use Darryldecode\Cart\Facades\Cartfacade as cart;
use GuzzleHttp\Psr7\Request;
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
            $qty = $qty - 1;
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

    public function removeFromCart($rowId)
    {
        $this->emit('removeFromCart', $rowId);
    }

    public function clearAllCart()
    {
        Cart::clear();
        $this->alert('success', 'item removed');
    }
}
