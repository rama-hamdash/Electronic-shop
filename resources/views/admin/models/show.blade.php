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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">المنتجات</li>
                    </ol>

                </nav>

            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row gutters-sm">

                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">رقم الموديل </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $model->model_num }}
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">الاسم </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $model->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">الوصف</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $model->description }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">الصنف</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $model->category->name }}
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">الكمية</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <form method="GET" action="">
                                        <input type="number" name="quantity">
                                        <input type="hidden" name="model_id" value="{{ $model->id }}">
                                        <button class="btn btn-success btn-sm p-3" type="submit">أضف للسلة</button>
                                    </form>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-sm-9 text-secondary">
                                    <a href="{{ route('admin.models.edit', [$model->id]) }}"
                                        class="btn btn-warning">تعديل</a>
                                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</a>
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
                                                action="{{ route('admin.models.destroy', [$model->id]) }}">
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
