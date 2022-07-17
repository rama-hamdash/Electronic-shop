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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">عرض منتج</li>
                    </ol>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">


                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row gutters-sm">

                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="row justify-content-center">


                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">الكمية </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $product->quantity }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">البيع </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $product->sold }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">المسترجع </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $product->retreived }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">سعر البيع </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $product->sel_price }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">سعر المسترجع </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $product->purshase_price }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">الصورة </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <img class="img-thumbnail rounded float-left" width="200" src="{{ asset('storage/' . $product->image_url) }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">السعر</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $product->price }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-9 text-secondary">
                                        <a href="{{ route('admin.products.edit', [$product->id]) }}"
                                            class="btn btn-warning">تعديل</a>
                                        <a class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">حذف</a>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">تحذير</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                هل تريد تأكيد عملية الحذف
                                            </div>
                                            <div class="modal-footer">
                                                <button type="botton" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">إغلاق</button>

                                                <form method="POST"
                                                    action="{{ route('admin.products.destroy', [$product->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">تأكيد</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal-->

                            </div>
                        </div>

                    </div>
                </div>
            @endsection
