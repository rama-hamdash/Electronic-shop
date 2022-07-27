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
                                        <a wire:click.prevent="addToBasket({{$p->id}},1,{{$p->price}})" class="btn btn-sm btn-dark">
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
                            <h4>{{ $p->name }}</h4>
                            <h6>SYP {{ $p->price }}</h6>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>
