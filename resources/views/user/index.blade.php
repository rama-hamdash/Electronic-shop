@extends('layouts.user')
@section('content')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="caption">
                        <h2>Welcome Summer Season!!</h2>
                        <h4>new collection for 2022 summer
                        </h4>
                        <div class="main-button">
                            <a href="{{ route('shop.interface') }}">Shop Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading my-1 text-center">
                    {{-- <div class="line-dec"></div> --}}
                    <h1>Categories</h1>
                </div>
            </div>
            <div class="col-md-12 text-center">
                @foreach ($categories as $c)
                        <a href="{{route('shop.category',$c->id)}}">
                    <div class="chip">
                            {{ $c->name }}
                    </div>
                        </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured Starts Here -->
    <livewire:featured-product />
    <!-- Featred Ends Here -->
    <livewire:category-product />

    <!-- Subscribe Form Ends Here -->
@endsection
@section('styles')
    <style>
        .chip {
            display: inline-block;
            height: 32px;
            padding: 0 12px;
            margin-right: 1rem;
            margin-bottom: 1rem;
            font-size: 13px;
            font-weight: 500;
            line-height: 32px;
            color: rgba(0, 0, 0, 0.6);
            cursor: pointer;
            background-color: #eceff1;
            border-radius: 16px;
            -webkit-transition: all .3s linear;
            transition: all .3s linear;
    </style>
@endsection
