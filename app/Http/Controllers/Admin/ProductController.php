<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductRequestRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Modele;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products= Product::paginate(10);
        return view('admin.clothes.index',compact('clothes'));
    }


    public function product_category($category_id)
    {
       
        
      $category= Category::findorfail($category_id);
       $Products=$category->products;
        return $Products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =Category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( ProductRequest $request)
    {
        $model= Modele::findOrfail($request->model_id);
        $size= Size::findOrfail($request->size_id);
        $color = Color::findOrfail($request->color_id);
        


        $image_url=$request->file('image')->store('public/clothe_images');
        $image_url=substr($image_url,strlen('public/'));


        $product=new Product();
        $product->quantity=$request->quantity;
        $product->sold=$request->sold;
        $product->retreived=$request->retreived;
        $product->sel_price=$request->sel_price;
        $product->purshase_price=$request->purshase_price;
        $product->model_id=$request->model_id;
        $product->size_id=$request->size_id;
        $product->color_id=$request->color_id;
        $product->image_url=$image_url;
        $product->price=$request->price;
        $product->save();

        return redirect()->back()->with('success','تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Products = Product::with('Category')->where('id',$id)->firstorfail();
        return view('admin.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $Products= Product::findOrfail($id);
        $categories=Category::all();
        return view('admin.products.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrfail($id);

        $image_url=$request->image_url;

        if($image_url){
            $image_url=$request->file('image')->store('public/product_images');
            $image_url=substr($image_url,strlen('public/'));
         
        }
        else{
            $image_url=$product->image_url;
        }
      
        $product->quantity=$request->quantity;
        $product->sold=$request->sold;
        $product->retreived=$request->retreived;
        $product->sel_price=$request->sel_price;
        $product->purshase_price=$request->purshase_price;
        $product->model_id=$request->model_id;
        $product->size_id=$request->size_id;
        $product->color_id=$request->color_id;
        $product->image_url=$image_url;
        $product->price=$request->price;
        $product->save();

      
        return redirect()->back()->with('success','تم تحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::findorfail($id);
        Storage::delete('public/'.$product->image);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success','تم الحذف بنجاح');
    }
}