@extends('layouts.admin_dashboard')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                        <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم
                            </a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">تعديل محزون</li>
                    </ol>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">


                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-5 justify-content-center">

                <div class="col-8">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger text-white" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif


                    @if (session('success'))
                        <div class="alert alert-success text-white" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>


                <div class="col-8">
                    <div class="card p-3">
                        <div class="card-header">
                            تعديل بيانات منتج في المخزن
                        </div>
                        <form method="POST" action="{{ route('admin.products.update', [$product->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="my-3">
                                <label class="">الموديل </label>
                                <input class="form-control" value="{{ $product->model->name }}" disabled />
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">الكمية </label>
                                <input type="number" value="{{ $product->quantity }}" name="quantity" class="form-control">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">المبيع</label>
                                <input name="sold" value="{{ $product->sold }}" class="form-control" />
                            </div>

                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">السعر</label>
                                <input type="number" value="{{ $product->price }}" name="price" class="form-control">
                            </div>

                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">المسترجع</label>
                                <input type="number" value="{{ $product->retreived }}" name="retreived"
                                    class="form-control">
                            </div>

                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">سعر البيع</label>
                                <input type="number" value="{{ $product->sel_price }}" name="sel_price"
                                    class="form-control">
                            </div>

                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">سعر الشراء</label>
                                <input type="number" value="{{ $product->purshase_price }}" name="purshase_price"
                                    class="form-control">
                            </div>


                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" name="image_url" type="file" id="formFile">
                            </div>

                            {{-- <div class=" my-3">
                                <label class="">الصنف </label>
                                <select class="p-2 form-select" dir="ltr" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            selected="{{ $category->id == $product->category_id }}">
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class=" my-3">
                                <label class="">الحجم </label>{{$product->size->id}}
                                <select class="p-2 form-select" dir="ltr" name="size_id">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->id }}"  {{ $size->id == $product->size_id ? 'selected': '' }}>{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class=" my-3">{{$product->color->id}}
                                <label class="">اللون </label>
                                <select class="p-2 form-select" dir="ltr" name="color_id">
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}"  {{ $color->id == $product->color_id? 'selected': '' }}>{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-primary" type="submit">تعديل</button>

                    </div>
                </div>
            </div>
        </div>


    @endsection
