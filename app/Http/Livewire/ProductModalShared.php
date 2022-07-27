<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Darryldecode\Cart\Facades\Cartfacade as cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ProductModalShared extends Component
{
    use LivewireAlert;

    public $productModalCount = false;
    public $productModal = [];
    public $model =[];
    public $quantity = 1;

    protected $listeners = ['showProductModalAction'];

    public function decreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function increaseQuantity()
    {
        if ($this->productModal->quantity > $this->quantity) {
            $this->quantity++;
        } else {
            $this->alert('warning', 'This is maximum quantity you can add!');
        }
    }

    public function addToCart()
    {
        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->productModal->id;
        });
        if ($duplicates->isNotEmpty()) {
            $this->alert('error', 'Product already exist!');
        } else {
            Cart::instance('default')->add($this->productModal->id, $this->productModal->name, $this->quantity, $this->productModal->price)->associate(Product::class);
            $this->quantity = 1;
            $this->emit('updateCart');
            $this->alert('success', 'Product added in your cart successfully.');
        }
    }

    public function addToWishList()
    {
        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) {
            return $cartItem->id === $this->productModal->id;
        });
        if ($duplicates->isNotEmpty()) {
            $this->alert('error', 'Product already exist!');
        } else {
            Cart::instance('wishlist')->add($this->productModal->id, $this->productModal->name, 1, $this->productModal->price)->associate(Product::class);
            $this->emit('updateCart');
            $this->alert('success', 'Product added in your wishlist cart successfully.');
        }
    }

    public function showProductModalAction($id)
    {
        $this->productModalCount = true;
        $this->productModal = Product::find($id);
        $this->model = $this->productModal->model;
        // dd($this->productModal);
    }

    public function render()
    {
        return view('livewire.product-modal-shared');
    }
}
