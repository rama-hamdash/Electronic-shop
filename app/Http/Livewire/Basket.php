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
        
    }
    public function render()
    {
        return view('livewire.basket');
    }


    public function add_to_cart($id, $qty, $price)
    {
        $this->alert('success', 'item added');

        Cart::add([
            'id' => $id,
            'price' => $price,
            'quantity' => $qty,
        ]);
    }



    public function removeCart($item_id)
    {
        Cart::remove($item_id);
        $this->alert('success', 'item removed');
    }

    public function clearAllCart()
    {
        Cart::clear();
        $this->alert('success', 'item removed');
    }
}
