<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModelRequest;
use App\Models\Category;
use App\Models\Modele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Modele::paginate(10);
        return view('admin.models.index', compact('models'));
    }

    public function model_category($category_id)
    {


        $category = Category::findorfail($category_id);
        $models = $category->models;
        return $models;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.models.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModelRequest $request)
    {
        $category = Category::findOrfail($request->category_id);

        $model = new Modele();
        $model->description = $request->description;
        $model->name = $request->name;
        $model->category_id = $request->category_id;
        $model->model_num = $request->model_num;
        $model->active = 1;
        $model->save();

        return redirect()->back()->with('success', 'تمت الإضافة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Modele::with('Category')->where('id', $id)->firstorfail();
        return view('admin.models.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Modele::findOrfail($id);
        $categories = Category::all();
        return view('admin.models.edit', compact('categories', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModelRequest $request, $id)
    {
        $model = Modele::whereId($id)->update($request->except(['_token', '_method']));

        return redirect()->back()->with('success', 'تم تحديث بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Modele::findorfail($id);
        $model->delete();
        return redirect()->route('admin.models.index')->with('success', 'تم الحذف بنجاح');
    }
}
