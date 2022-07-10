@extends('layouts.admin_dashboard')
@section('content')

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

            <div class="col-6">
                <div class="card p-3">
                    <div class="card-header">
                        إضافة دفعة جديدة الى المخزن
                    </div>
                    <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">الكمية </label>
                            <input type="text" name="quantity" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">المبيع</label>
                            <textarea name="sold" rows="5" class="form-control">
                      </textarea>
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">السعر</label>
                            <input type="number" name="price" class="form-control">
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">المسترجع</label>
                            <input type="number" name="retreived" class="form-control">
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">سعر البيع</label>
                            <input type="number" name="sel_price" class="form-control">
                        </div>

                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">سعر الشراء</label>
                            <input type="number" name="purshase_price" class="form-control">
                        </div>


                        <div class="input-group input-group-outline my-3">
                            <input class="form-control" name="image_url" type="file" id="formFile">
                        </div>




                        <div class=" my-3">
                            <label class="">الموديل </label>
                            <select dir="ltr" class="p-2 form-select " name="model_id">
                                @foreach ($models as $model)
                                    <option value="{{ $model->id }}">{{ $model->model_num }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class=" my-3">
                            <label class="">الحجم </label>
                            <select dir="ltr" class="p-2 form-select " name="size_id">
                                @foreach ($sizes as $size)
                                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class=" my-3">
                            <label class="">اللون </label>
                            <select dir="ltr" class="p-2 form-select " name="color_id">
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary" type="submit">إضافة</button>

                </div>
            </div>
        </div>
    </div>


@endsection
