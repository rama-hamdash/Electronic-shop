<div>
    <div class="col-8">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-white" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif


        @if (session('success'))
            <div class="alert alert-success text-white" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>


    <div>
        <div class="d-flex justify-content-end align-items-center mx-4 mb-4">
            <div>
                <h4><button wire:click="clearAllCart" class="btn btn-dark bg-light text-dark "><i
                            class="fas fa-trash-alt"></i></button></h4>
            </div>
        </div>


        <div class="card">

            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Shopping Cart</b></h4>
                            </div>
                            <div class="col align-self-center text-right text-muted"></div>
                        </div>
                    </div>





                    @foreach ($cart as $item)
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2">
                                    <img class="img-fluid" src="{{ asset('storage/' . $item->model->image_url) }}">
                                </div>
                                <div class="col">
                                    <div class="row text-muted">{{ $item->name }}</div>
                                    <div class="row"></div>
                                </div>
                                <div class="col">
                                    <a wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">-</a>
                                    <a class="border">{{ $item->qty }}</a>
                                    <a wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">+</a>
                                </div>
                                <div class="col">SYP {{ $item->model->price * $item->qty }} <span class="close"><a
                                            wire:click="removeFromCart('{{ $item->rowId }}')">&#10005;</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="back-to-shop"><a href="{{ route('home') }}">&leftarrow;</a><span class="text-muted">Back
                            to
                            shop</span></div>
                </div>
                <div class="col-md-4 summary">
                    <div>
                        <h5><b>Summary</b></h5>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col" style="padding-left:0;">ITEMS </div>
                        <div class="col text-right">SYP {{ $total }}</div>
                    </div>
                    <form method="POST" action="{{ route('admin.orders.store') }}">
                        @csrf>
                        <p>SHIPPING</p>
                        <select>
                            <option class="text-muted">SHIPPING000</option>
                        </select>

                        <div class="input-group input-group-outline my-3">
                            <label class="text-muted">ADDRESS</label>
                            <input type="texterea" name="address" class="text-muted">
                        </div>

                        <button type="submit" class="btn btn-dark">CHECK OUT</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
