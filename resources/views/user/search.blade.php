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
                <div class="col-md-8 col-sm-12 row justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sizes
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($sizes as $s)
                                <a class="dropdown-item" href="?size={{$s->id}}">{{$s->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="dropdown mx-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Colors
                        </button>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            @foreach ($colors as $s)
                                <a class="dropdown-item" href="?color={{$s->id}}">{{$s->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="featured container no-gutter">

            <div class="row posts">
                <div class="col-lg-3 order-2 order-lg-1">
                    <h5 class="text-uppercase mb-4">Categories</h5>
                    @foreach ($categories as $category)
                        <div class="py-2 px-4 bg-dark  mb-3">
                            <a href="{{ route('shop.category', $category->id) }}" class="text-dark" style="cursor:pointer;">
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
                        @forelse ($products as $product)
                            <livewire:shop :product="$product" />
                            @empty
                            <p>no items found</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Featred Page Ends Here -->
@endsection
