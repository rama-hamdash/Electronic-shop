<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Darryldecode\Cart\Facades\Cartfacade as Cart;
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
        $product = Product::find($id);
        Cart::session(Auth::user()->id)->add([
            'id' => $id,
            'price' => $price,
            'quantity' => $qty,
            'name' => $product->name,
        ])->associate(Product::class);
        $this->alert('success', 'item added');

    }
}
