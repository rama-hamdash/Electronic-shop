<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Darryldecode\Cart\Facades\Cartfacade as Cart;


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
        $this->alert('success', 'item added');
        $this->alert('success', 'item added');
        $product = Product::find($id);
        Cart::add([
            'id' => $id,
            'price' => $price,
            'quantity' => $qty,
            'name' => $product->name,
            'image_url' => $product->image_url,
        ]);
    }
}
