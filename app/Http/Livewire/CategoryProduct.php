<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;

class CategoryProduct extends Component
{
    use LivewireAlert;

    public $categories;
    public $products;

    public function selectCategory($id)
    {
        $this->products = Product::whereRelation('model', 'category_id', $id)->inRandomOrder()->limit(8)->get();
    }

    public function mount()
    {
        $this->categories = Category::inRandomOrder()->whereHas('models', operator: '>', count: 0)->limit(3)->get();
        $this->products = Product::whereRelation('model', 'category_id', $this->categories[0]->id)->inRandomOrder()->limit(8)->get();
    }

    public function render()
    {
        return view('livewire.category-product');
    }


    
    public function addToBasket($id, $qty, $price)
    {
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
        }
    }
    
    public function addToWishList($id)
    {
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
