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
                        <h1>Result products</h1>
                    </div>
                </div>
                {{-- <div class="col-md-8 col-sm-12">
                    <div id="filters" class="button-group">
                        <button class="btn btn-primary" data-filter="*">All Products</button>
                        <button class="btn btn-primary" data-filter=".new">Newest</button>
                        <button class="btn btn-primary" data-filter=".low">Low Price</button>
                        <button class="btn btn-primary" data-filter=".high">Hight Price</button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    {{-- {{ dd($products) }} --}}

    <div class="container mt-5 mb-5">
        <div class="featured container no-gutter">

            <div class="row posts">
                <div class="col-lg-3 order-2 order-lg-1">
                    <h5 class="text-uppercase mb-4">Categories</h5>
                    @foreach ($categories as $category)
                        <div class="py-2 px-4 bg-dark  mb-3">
                            <a href="{{route('shop.category',$category->id)}}" class="text-dark" style="cursor:pointer;">
                                <strong class="small text-uppercase font-weight-bold ">
                                    {{ $category->name }}
                                </strong>
                            </a>
                        </div>
                    @endforeach
                    </ul>
                </div>

                <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="row g-2">
                        @foreach ($products as $product)
                            <livewire:shop :product="$product" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Featred Page Ends Here -->
@endsection
