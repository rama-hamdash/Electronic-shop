<div>
    <div>
        <section class="py-5">
            <div class="container p-0">
                <div class="row">
                    <!-- SHOP SIDEBAR-->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <h5 class="text-uppercase mb-4">Categories</h5>
                        @foreach ($categories as $category )
                            <div class="py-2 px-4 bg-dark  mb-3">
                                <a wire:click.prevent="selectCategory({{$category->id}})" style="cursor:pointer;">
                                    <strong class="small text-uppercase font-weight-bold ">
                                        {{$category->name}}
                                    </strong>
                                </a>
                            </div>
                        @endforeach
                        </ul>
                    </div>

                    <!-- SHOP LISTING-->
                    <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                        <div class="row g-2">
                            @foreach ($products as $product)
                                <div class="col">
                                    <a  href="{{ asset('assets/single-product.html') }}">
                                        <div class="featured-item" style="max-width: 22rem;">
                                            <div class="position-relative">
                                                <img src="{{ asset('storage/'.$product->image_url) }}" alt="Item 1">
                                                <div class="product-overlay">
                                                    <ul class="mb-0 list-inline">
                                                        <li class="list-inline-item m-0 p-0">
                                                            <a wire:click.prevent="addToWishList(1002)"
                                                                class="btn btn-sm btn-outline-dark">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item m-0 p-0 text-light">
                                                            <a wire:click.prevent="addToCart(1002)"
                                                                class="btn btn-sm btn-dark">
                                                                Add to cart
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item mr-0">
                                                            <a wire:click.prevent="$emit('showProductModalAction', 'short-hoody')"
                                                                class="btn btn-sm btn-outline-dark"
                                                                data-target="#productView" data-toggle="modal">
                                                                <i class="fas fa-expand"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="px-3 mb-2">
                                                <h4>{{$product->name}}</h4>
                                                <h6>SYP {{$product->price}}</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                {{-- @empty --}}
                                @endforeach
                            </div>
                            <!-- PAGINATION-->
                            {{-- {!! $products->appends(request()->all())->onEachSide(1)->links() !!} --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @section('script')
            <script>
                let product_blocks = document.querySelectorAll('#products-container-area');

                document.getElementById('three_items').onclick = function() {
                    Array.prototype.forEach.call(product_blocks, function(product_block) {
                        if (product_block.classList.contains('col-6')) {
                            product_block.classList.remove('col-6');
                            product_block.classList.add('col-4');
                        }
                    });
                }

                document.getElementById('two_items').onclick = function() {
                    Array.prototype.forEach.call(product_blocks, function(product_block) {
                        if (product_block.classList.contains('col-4')) {
                            product_block.classList.remove('col-4');
                            product_block.classList.add('col-6');
                        }
                    });
                }
            </script>
        @endsection

    </div>
