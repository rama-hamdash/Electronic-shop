<div>
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
                    <div class="d-flex flex-wrap owl-caro usel owl-them e">
                        {{-- go with foreach on featured products --}}
                        @foreach ($products as $p)
                            <a href="{{ route('product.interface', [$p->id]) }}">
                                <div class="featured-item mx-3" style="max-width: 242px">
                                    <div class="position-relative">
                                        <img src="{{ asset('storage/' . $p->image_url) }}" alt="Item 1">
                                        <div class="product-overlay">
                                            <ul class="mb-0 list-inline">
                                                <li class="list-inline-item m-0 p-0">
                                                    <a wire:click.prevent="addToWishList(1002)"
                                                        class="btn btn-sm btn-outline-dark">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item m-0 p-0 text-light">
                                                    <button wire:click.prevent="addToBasket({{$p->id}},1,{{$p->price}})" class="btn btn-sm btn-dark">
                                                        Add to cart
                                                    </button>
                                                </li>
                                                <li class="list-inline-item mr-0">
                                                    <a wire:click.prevent="$emit('showProductModalAction', '{{$p->id}}')"
                                                        class="btn btn-sm btn-outline-dark" data-target="#productView"
                                                        data-toggle="modal">
                                                        <i class="fas fa-expand"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="px-3 mb-2">
                                        <div class="d-flex justify-content-between align-items-center ">
                                            <h4>{{ $p->name }}</h4>
                                            @if ($p->is_available)
                                                <span class="badge badge-success">in stock</span>
                                            @else
                                                <span class="badge badge-secondary">out of stock</span>
                                            @endif
                                        </div>
                                        <h6>SYP {{ $p->price }}</h6>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        {{-- go with foreach on featured products --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
