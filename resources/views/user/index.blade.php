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
    <livewire:featured-product />
    <!-- Featred Ends Here -->
    <livewire:category-product />

    <!-- Subscribe Form Ends Here -->
@endsection
