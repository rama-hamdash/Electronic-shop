@extends('layouts.user')
@section('content')
<section class="py-5 container">
    <h2 class="h5 text-uppercase mb-4">Wish List</h2>
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <!-- CART TABLE-->
            <div class="table-responsive mb-4">
                <table class="table">
                    <thead class="bg-light">
                    <tr>
                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Product</strong></th>
                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Price</strong></th>
                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Move to cart</strong></th>
                        <th class="border-0" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse(Cart::instance('wishlist')->content() as $item)
                        <livewire:wish-list-item :item="$item->rowId" :key="$item->rowId" />
                    @empty
                        <tr>
                            <td class="pl-0 border-light" colspan="5">
                                <p class="text-center">
                                    No Items found in your wish list!
                                </p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection