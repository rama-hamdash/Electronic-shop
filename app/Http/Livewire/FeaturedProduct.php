<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;



class FeaturedProduct extends Component
{
    use LivewireAlert;

    public $products;
    public function mount()
    {
        $this->products = Product::with(['color', 'size'])->inRandomOrder()->limit(8)->get();
        // dd($this->products[0]->name);
    }
    public function render()
    {
        return view('livewire.featured-product');
    }


 
    public function addToBasket($id, $qty, $price)
    {
        if (!Auth::check() == 'null') {
        
            $this->alert('error', 'you have to login first...');
        } else{   $product = Product::whereId($id)->firstOrFail();
            $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($product) {
                return $cartItem->id === $product->id;
            });
            if ($duplicates->isNotEmpty()) {
                $this->alert('error', 'Product already exist!');
            } else {
                Cart::instance('default')->add($product->id, $product->name, 1, $product->price)->associate(Product::class);
                $this->emit('updateCart');
                $this->alert('success', 'Product added in your cart successfully.');
            }

        }
    }

     
    public function addToWishList($id)
    {

        if (!Auth::check() == 'null') {
        
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
}