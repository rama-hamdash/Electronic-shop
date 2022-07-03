<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Darryldecode\Cart\Facades\Cartfacade as cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  list_cart()
    {
        $cart= Cart::getcontent();
        return view('user.shop.basket',compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_to_cart(Request $request)
    {
        $request->validate([
            'quantity' => ['required','numeric','integer','min:1'],
            'clothe_id' => ['required','numeric']
        ]);

        $product = Product::findOrfail($request->product_id);

        Cart::add([
            'id' => $product->id,
            'price' => $product->price,
            'quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('success','تمت إضافة  بنجاح');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeCart($id)
    {
        Cart::remove($item_id);
     
        return redirect()->back()->with('success','تم الحذف  من السلة بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function clearAllCart($id)
    {
        Cart::clear();

        return redirect()->back()->with('success','تم إفراغ السلة بنجاح');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
