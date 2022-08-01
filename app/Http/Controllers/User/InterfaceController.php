<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Modele;
use App\Models\Order;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return  view('user.index', compact(['products', 'categories']));
    }

    public function shop()
    {
        $products = [];
        $m = Modele::all();
        foreach ($m as $i) {
            if (count($i->products) > 0)
                $products[] = $i->products[0];
        }

        // dd($products);
        return view('user.shop', compact('products'));
    }

    public function byCategory(Request $request, Category $cat)
    {

        $sizes = Size::all();
        $colors = Color::all();
        $products = [];
        $m = Modele::where('category_id', $cat->id)->get();
        foreach ($m as $i) {
            if (count($i->products) > 0)
                if ($s = $request->query('size')) {
                    $p = $i->products->where('size_id', $s)->first();
                    if ($p) $products[] = $p;
                } elseif ($c = $request->query('color')) {
                    $p = $i->products->where('color_id', $c)->first();
                    if ($p) $products[] = $p;
                } else
                    $products[] = $i->products[0];
        }
        $categories = Category::all();
        return view('user.search', compact(['products', 'categories', 'sizes', 'colors']));
    }


    public function product(Product $product)
    {
        $model = $product->model;

        return view('user.product', compact('model', 'product'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function single_product()
    {
        return view('user.single_product');
    }


    public function aboute()
    {
        return view('user.aboute');
    }

    public function myorders()
    {
        $orders = Auth::user()->orders;
        return view('user.myorders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
