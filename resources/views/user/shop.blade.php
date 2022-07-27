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

    <div class="featured container no-gutter">

        <div class="row posts">
            @foreach ($products as $product)
                <div id="1" class="item new col">
                    <a href="{{ route('product.interface', [$product->id]) }}">
                        <div class="featured-item" style="max-width: 242px">
                            <div class="position-relative">
                                <img src="{{ asset('storage/' . $product->image_url) }}" alt="Item 1">
                                <div class="product-overlay">
                                    <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0">
                                            <a wire:click.prevent="addToWishList(1002)" class="btn btn-sm btn-outline-dark">
                                                <i class="far fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item m-0 p-0 text-light">
                                            <a wire:click.prevent="addToCart(1002)" class="btn btn-sm btn-dark">
                                                Add to cart
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-0">
                                            <a wire:click.prevent="$emit('showProductModalAction', 'short-hoody')"
                                                class="btn btn-sm btn-outline-dark" data-target="#productView"
                                                data-toggle="modal">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="px-3 mb-2">
                                <h4>{{ $product->name }}</h4>
                                <h6>SYP {{ $product->price }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
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
