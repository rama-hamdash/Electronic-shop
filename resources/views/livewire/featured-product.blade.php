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
                    <div class="owl-carousel owl-theme">
                        {{-- go with foreach on featured products --}}

                        <a href="{{ asset('assets/single-product.html') }}">
                            <div class="featured-item">
                                <div class="position-relative">
                                    <img src="{{ asset('assets/images/item-01.jpg') }}" alt="Item 1">
                                    <div class="product-overlay">
                                        <ul class="mb-0 list-inline">
                                            <li class="list-inline-item m-0 p-0">
                                                <a wire:click.prevent="addToWishList(1002)"
                                                    class="btn btn-sm btn-outline-dark">
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
                                    <h4>Proin vel ligula</h4>
                                    <h6>$15.00</h6>
                                </div>
                            </div>
                        </a>

                        {{-- go with foreach on featured products --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
