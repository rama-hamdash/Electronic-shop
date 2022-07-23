<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\Cartfacade as cart;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Basket extends Component
{
    public function render()
    {
        return view('livewire.basket');
    }

    public function  list_cart()
    {
        $cart= Cart::getcontent();
        return view('livewire.basket',compact('cart'));
    }
    public function add_to_cart(Request $request)
    {
        $request->validate([
            'quantity' => ['required','numeric','integer','min:1'],
            'product_id' => ['required','numeric']
        ]);

        $product = Product::findOrfail($request->product_id);

        Cart::add([
            'id' => $product->id,
            'price' => $product->price,
            'quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('success','تمت إضافة  بنجاح');
    }

    public function updateCart(Request $request)
    {
        $request->validate([
            'quantity' => ['required','numeric','integer','min:1'],
            'product_id' => ['required','numeric']
        ]);

        $product = Product::findOrfail($request->product_id);

        Cart::update(
            $product->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        return redirect()->back()->with('success','تم تعديل السلة بنجاح');
    }

    public function removeCart($item_id)
    {
        Cart::remove($item_id);
     
        return redirect()->back()->with('success','تم الحذف  من السلة بنجاح');
    }

    public function clearAllCart($id)
    {
        Cart::clear();

        return redirect()->back()->with('success','تم إفراغ السلة بنجاح');
    }








}
