@extends('layouts.user')
@section('content')
    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div id="filters" class="button-group">
                        <button class="btn btn-primary" data-filter="*">All Products</button>
                        <button class="btn btn-primary" data-filter=".new">Newest</button>
                        <button class="btn btn-primary" data-filter=".low">Low Price</button>
                        <button class="btn btn-primary" data-filter=".high">Hight Price</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <livewire:shop :model="$model" :product="$product" />
    </div>

    <div class="page-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li class="current-page"><a href="{{ asset('assets/#') }}">1</a></li>
                        <li><a href="{{ asset('assets/#') }}">2</a></li>
                        <li><a href="{{ asset('assets/#') }}">3</a></li>
                        <li><a href="{{ asset('assets/#') }}"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Featred Page Ends Here -->
@endsection
