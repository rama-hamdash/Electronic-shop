<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class WishListItem extends Component
{
    public $item;

    public function moveToCart($rowId)
    {
        $this->emit('moveToCart', $rowId);
    }

    public function removeFromWishList($rowId)
    {
        $this->emit('removeFromWishList', $rowId);
    }


    public function render()
    {
        return view('livewire.wish-list-item', [
            'wishlistItem' => Cart::instance('wishlist')->get($this->item)
        ]);
    }
}
