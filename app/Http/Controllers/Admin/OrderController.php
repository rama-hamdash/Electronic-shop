<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderStatusRequest;
use App\Models\Order;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      $orders= Order::with('user')->paginate(10);
      return view('admin.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $user = User::findOrfail($request->user_id);

        $order = new Order();


        $order->num=uniqid();
        $order->address=$request->address;
        $order->total=Cart::getTotal();
        $order->user_id= $user->id;
        $order->status=1;
        $order->long=0;
        $order->lat=0;
        $order->save();
        $cart=[];
        foreach( Cart::getcontent() as $item){

            $orderproducts[] = [
                'order_id' => $order->id ,
                'product_id' => $item->id,
                'quantity' => $item['qty']

            ];

        }

        //$order->products()->attach($cart);
        //Cart::clear();
        return redirect()->back()->with('success','Request added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order= Order::where('id',$id)->firstOrfail();
        return view('admin.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Order::findOrfail($id);
        return view('admin.orders.edit',compact('order'));
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
        $order = Order::findOrfail($id);

        $order->address = $request->address;
        $order->total = Cart::getTotal();
        $order->status = 1;

        $order->save();

        $cart = [];

        foreach(Cart::getcontent() as $id => $item){

            $cart [$id] = ['quantity' => $item->quantity];
        }

       

        $order->products()->sync($cart);

        Cart::clear();

        return redirect()->back()->with('success','تم تعديل بيانات الطلب بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function add_order_items_to_basket(Request $request){

        $order =Order::findOrfail($request->order_id);

        Cart::clear();

        foreach($order->products as $product){

            Cart::add([
                'id' => $product->id,
              //  'name' => $product->name,
                'price' => $product->price,
                'quantity' => $product->quantity,
            ]);
        }

        return redirect()->route('admin.orders.edit',[$order->id])->with('success','يمكنك التعديل على السلة ثم تأكيد التعديل');
        
    }
    public function edit_status($order_id){
        $order =Order::findOrfail($order_id);
        return view('admin.orders.edit_status',compact('order'));
    }

    public function update_status(OrderStatusRequest $request){

        $order =Order::findOrfail($request->order_id);

        $order->status = $request->status;

        $order->save();

        return redirect()->back()->with('success','تم تعديل حالة الطلب بنجاح');
    }
}
