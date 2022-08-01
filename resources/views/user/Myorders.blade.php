@extends('layouts.user')
@section('content')
    <main class="main-content container mt-4 position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="section-heading my-1 text-center">
                        {{-- <div class="line-dec"></div> --}}
                        <h4>Hello, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h4>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card my-4">
                        <div class="table-responsive">

                            <table class="table ">
                                <tr>
                                    <th scope="col">NUMBER</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">TOTAL</th>
                                    <th scope="col">SHOW</th>
                                </tr>
                                @foreach ($orders as $order)
                                    <tr style="background-color: #ccc">
                                        <th scope="row">{{ $order->id }}</th>
                                        <td>{{ $order->status}}</td>
                                        <td>{{ $order->total }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @foreach ($order->products as $p)
                                    <tr class="container">
                                            <td>
                                                <img class="img-fluid " src="{{ asset('storage/' . $p->image_url) }}" style="width:4rem">
                                            </td>
                                            <td>
                                                {{$p->name}}
                                            </td>
                                            <td>
                                                price: {{$p->pivot->unit_price}}
                                            </td>
                                            <td>
                                                Qty: {{$p->pivot->quantity}}
                                            </td>
                                        </tr>
                                        @endforeach
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
