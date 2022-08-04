@extends('layouts.admin_dashboard')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
                        <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة
                                التحكم </a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">المخزن</li>
                    </ol>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">


                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">

                @if (session('success'))
                    <div class="alert alert-success text-white" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-5">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">إضافة</a>
                </div>

                <div class="col-12">
                    <div class="card my-4">

                        <div class="table-responsive">

                            <div class="mb-3 p-2 col-3">
                                <form>
                                    <div class="input-group input-group-outline mb-2 inline">
                                        <label class="form-label">اكتب للبحث</label>
                                        <input name="search" value="{{Request::get('search')}}" type="text" class="form-control">
                                    </div>
                                </form>
                            </div>


                            <table class="table ">
                                <tr>
                                    <th scope="col">الرقم</th>
                                    <th scope="col">الكمية</th>
                                    <th scope="col">البيع</th>
                                    <th scope="col">المسترجع</th>
                                    <th scope="col">سعر البيع</th>
                                    <th scope="col">سعر الشراء</th>
                                    <th scope="col">السعر</th>
                                    <th scope="col">الصورة </th>
                                    <th scope="col">عرض</th>
                                    <th scope="col">تعديل</th>

                                </tr>
                                @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->sold }}</td>
                                        <td>{{ $product->retreived }}</td>
                                        <td>{{ $product->sel_price }}</td>
                                        <td>{{ $product->purshase_price }}</td>
                                        <td>SYP {{ $product->price }}</td>
                                        <td><img src="{{ asset('storage/' . $product->image_url) }}" width="50px"
                                                height="50px"></td>
                                        <td><a class="text-info"
                                                href="{{ route('admin.products.show', [$product->id]) }}"><i
                                                    class="fas fa-eye"></i></a></td>
                                        <td> <a class="text-warning"
                                                href="{{ route('admin.products.edit', [$product->id]) }}"><i
                                                    class="fas fa-edit"></i></a></td>

                                    </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
