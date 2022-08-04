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
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">الأطباق</li>
                    </ol>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">



                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">



                <div class="col-12">
                    <div class="card my-4">

                        <div class="table-responsive">

                            <div class="mb-3 p-2 col-3">
                                <div class="input-group input-group-outline mb-2 inline">
                                    <label class="form-label">اكتب للبحث</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="container">
                              @if (session('success'))
                                  <div class="alert alert-success text-white" role="alert">
                                      {{ session('success') }}
                                  </div>
                              @endif
                            </div>
                            <table class="table ">
                                <tr>
                                    <th scope="col">الرقم</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">السعر</th>
                                    <th scope="col">الحالة </th>

                                </tr>
                                @foreach ($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $order->id }}</th>
                                        <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                        <td>{{ $order->total }}</td>
                                        {{-- <td>{{ $order->status  }}</td> --}}
                                        <td>
                                            <div class="form-group w-50">
                                                <form action="{{ route('admin.orders.status', $order->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <select class="form-select" name="order_status"
                                                        style="outline-style: none;" onchange="this.form.submit()">
                                                        @foreach ($order_status_array as $key => $value)
                                                            <option value="{{ $key }}"
                                                                @if ($order->status == $value) selected @endif>
                                                                {{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
