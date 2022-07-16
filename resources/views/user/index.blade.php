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
                            <a href="{{ asset('assets/#') }}">Shop Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-01.jpg') }}" alt="Item 1">
                                <h4>Proin vel ligula</h4>
                                <h6>$15.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-02.jpg') }}" alt="Item 2">
                                <h4>Erat odio rhoncus</h4>
                                <h6>$25.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-03.jpg') }}" alt="Item 3">
                                <h4>Integer vel turpis</h4>
                                <h6>$35.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-04.jpg') }}" alt="Item 4">
                                <h4>Sed purus quam</h4>
                                <h6>$45.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-05.jpg') }}" alt="Item 5">
                                <h4>Morbi aliquet</h4>
                                <h6>$55.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-06.jpg') }}" alt="Item 6">
                                <h4>Urna ac diam</h4>
                                <h6>$65.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-04.jpg') }}" alt="Item 7">
                                <h4>Proin eget imperdiet</h4>
                                <h6>$75.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-05.jpg') }}" alt="Item 8">
                                <h4>Nullam risus nisl</h4>
                                <h6>$85.00</h6>
                            </div>
                        </a>
                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <img src="{{ asset('assets/images/item-06.jpg') }}" alt="Item 9">
                                <h4>Cras tempus</h4>
                                <h6>$95.00</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featred Ends Here -->

    <!-- Subscribe Form Ends Here -->
@endsection
