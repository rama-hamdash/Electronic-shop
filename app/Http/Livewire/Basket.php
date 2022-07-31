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
        $this->cart = Cart::session(Auth::user()->id)->getcontent();
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
        if ($qty = Cart::session(Auth::user()->id)->get($id)->quantity > 1) {
            // $this->quantity = $this->quantity - 1;
            $qty = $qty - 2;
            Cart::session(Auth::user()->id)->update($id, ['quantity' => $qty]);
            $this->cart = Cart::session(Auth::user()->id)->getcontent();
            $this->emit('updateCart');
        }
        
    }

    public function increaseQuantity($id)
    {
        if ($qty = Cart::session(Auth::user()->id)->get($id)->quantity > 0) {

            Cart::session(Auth::user()->id)->update($id, [
                'quantity' => $qty
            ]);
            $this->cart = Cart::session(Auth::user()->id)->getcontent();
            $this->emit('updateCart');
        }
    }

    public function removeFromCart($id)
    {
        Cart::session(Auth::user()->id)->remove($id);
        $this->cart = Cart::session(Auth::user()->id)->getcontent();

        $this->emit('removeFromCart', $id);
        
        $this->alert('success', 'item removed');
    }

    public function clearAllCart()
    {
        Cart::session(Auth::user()->id)->clear();
        $this->cart = Cart::session(Auth::user()->id)->getcontent();
        $this->alert('success', 'item removed');
    }
}
