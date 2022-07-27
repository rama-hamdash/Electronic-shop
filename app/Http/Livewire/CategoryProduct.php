<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Darryldecode\Cart\Facades\Cartfacade as cart;
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
        $this->alert('success', 'item added');
        $this->alert('success', 'item added');
        $product = Product::find($id);
        Cart::session(Auth::user()->id)->add([
            'id' => $id,
            'price' => $price,
            'quantity' => $qty,
            'name' => $product->name,
        ])->associate(Product::class);
    }
}
