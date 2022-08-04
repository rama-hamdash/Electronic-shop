<?php

namespace App\Http\Livewire;

use App\Models\Product as modelProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;

use Illuminate\Support\Facades\Auth;

class Product extends Component
{
    use LivewireAlert;


    public $model;
    public $product;
    public $sizes;
    public $colors;

    public function mount($model, $product)
    {
        $this->model = $model;
        $this->product = $product;

        $this->getSizes();
        $this->getColors();
    }

    public function getSizes()
    {
        $s = [];
        foreach ($this->model->products as $p) {
            $s[] = $p->size->name;
        }
        $this->sizes = array_unique($s);
    }
    // TODO:: make colors 
    public function getColors()
    {
        $c = [];
        foreach ($this->model->products as $p) {
            $c[] = $p->color;
        }
        $this->colors = array_unique($c);
    }

    public function selectProduct($id)
    {
        $this->product = $this->model->products->where('id', $id)->first();
        $this->getColors();
    }

    public function render()
    {
        return view('livewire.product');
    }

    public function addToBasket($id, $qty, $price)
    {

        if (!Auth::check() == 'null') {

            $this->alert('error', 'you have to login first...');
        } else {
            $product = modelProduct::whereId($id)->firstOrFail();
            $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($product) {
                return $cartItem->id === $product->id;
            });
            if ($duplicates->isNotEmpty()) {
                $this->alert('error', 'Product already exist!');
            } else {
                Cart::instance('default')->add($product->id, $product->name, 1, $product->price)->associate(modelProduct::class);
                $this->emit('updateCart');
                $this->alert('success', 'Product added in your cart successfully.');
            }
        }
    }

    public function addToWishList($id)
    {
        if (!Auth::check() == 'null') {

            $this->alert('error', 'you have to login first...');
        } else {
            $product = modelProduct::whereId($id)->firstOrFail();
            $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($product) {
                return $cartItem->id === $product->id;
            });
            if ($duplicates->isNotEmpty()) {
                $this->alert('error', 'Product already exist!');
            } else {
                Cart::instance('wishlist')->add($product->id, $product->name, 1, $product->price)->associate(modelProduct::class);
                $this->emit('updateCart');
                $this->alert('success', 'Product added in your wishlist cart successfully.');
            }
        }
    }
}
