<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
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

        if (!Auth::check() == 'null') {
        
            $this->alert('error', 'you have to login first...');
        } else{
        $product = Product::whereId($id)->firstOrFail();
        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });
        if ($duplicates->isNotEmpty()) {
            $this->alert('error', 'Product already exist!');
        } else {
            Cart::instance('default')->add($product->id, $product->name, 1, $product->price)->associate(Product::class);
            $this->emit('updateCart');
            $this->alert('success', 'Product added in your cart successfully.');
        }}
    }
    public function addToWishList($id)
    { if (!Auth::check() == 'null') {
        
        $this->alert('error', 'you have to login first...');
    } else{
        $product = Product::whereId($id)->firstOrFail();
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });
        if ($duplicates->isNotEmpty()) {
            $this->alert('error', 'Product already exist!');
        } else {
            Cart::instance('wishlist')->add($product->id, $product->name, 1, $product->price)->associate(Product::class);
            $this->emit('updateCart');
            $this->alert('success', 'Product added in your wishlist cart successfully.');
        }
    }
    }
    public function render()
    {
        return view('livewire.shop');
    }
}
