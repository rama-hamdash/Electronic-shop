<div>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-6 border-end">
                <div class="d-flex flex-column justify-content-center">
                    <div class="main_image"> <img src="/storage/{{$product->image_url}}" id="main_product_image"
                            width="350"> </div>
                    <div class="thumbnail_images">
                        <ul id="thumbnail">
                            @foreach ($model->products as $p)
                            <li><img wire:click="selectProduct({{$p->id}})" src="/storage/{{$p->image_url}}" width="70">
                            </li>
                                
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 right-side">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>{{ $model->name }}</h3> <span class="heart"><i class='fa fa-heart'></i></span>
                    </div>
                    <div class="mt-2 pr-3 content">
                        <p>{{ $model->description }}</p>
                    </div>
                    <h3>SYP {{$product->price}}</h3>
                    <div class="ratings d-flex flex-row align-items-center">
                        <div class="d-flex flex-row">
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star-o'></i>
                        </div>
                        <span>441 reviews</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center ">
                        @if ($p->is_available)
                            <span class="badge badge-success">in stock</span>
                        @else
                            <span class="badge badge-secondary">out of stock</span>
                        @endif
                    </div>
                    <div class="mt-5"> <span class="fw-bold">Sizes</span>
                        <div class="sizes">
                            <ul >
                                @foreach ($sizes as $s)
                                <li class="{{$s == $product->size->name? 'font-weight-bold': ''}}">{{$s}}</li>
                                    
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="mt-2"> <span class="fw-bold">Color</span>
                        <div class="colors">
                            <ul id="marker">
                                <li id="marker-1"></li>
                                <li id="marker-2"></li>
                                <li id="marker-3"></li>
                                <li id="marker-4"></li>
                                <li id="marker-5"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="buttons d-flex flex-row mt-5 gap-3">
                        <button class="btn btn-dark">Add to Cart</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
