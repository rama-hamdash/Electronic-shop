<div>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4><button wire:click="clearAllCart" class="btn btn-light text-danger"><i
                        class="fas fa-trash-alt"></i></button></h4>
        </div>
    </div>
    @foreach ($cart as $item)
        <div class="card rounded-3 mb-4">
            <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <div class="input-group input-group-outline my-3">
                           {{ $item->quantity }}
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h5 class="mb-0">{{ $item->price * $item->quantity }}ل.س</h5>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <button type="submit" class="text-success btn  mt-3"></button>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="{{ route('user.cart.delete_item', [$item->id]) }}" class="text-danger"><i
                                class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    {{--  --}}

    <div class="card">
      <div class="row">
          <div class="col-md-8 cart">
              <div class="title">
                  <div class="row">
                      <div class="col"><h4><b>Shopping Cart</b></h4></div>
                      <div class="col align-self-center text-right text-muted">3 items</div>
                  </div>
              </div>    
              <div class="row border-top border-bottom">
                  <div class="row main align-items-center">
                      <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                      <div class="col">
                          <div class="row text-muted">Shirt</div>
                          <div class="row">Cotton T-shirt</div>
                      </div>
                      <div class="col">
                          <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                      </div>
                      <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                  </div>
              </div>
              <div class="row">
                  <div class="row main align-items-center">
                      <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/ba3tvGm.jpg"></div>
                      <div class="col">
                          <div class="row text-muted">Shirt</div>
                          <div class="row">Cotton T-shirt</div>
                      </div>
                      <div class="col">
                          <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                      </div>
                      <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                  </div>
              </div>
              <div class="row border-top border-bottom">
                  <div class="row main align-items-center">
                      <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/pHQ3xT3.jpg"></div>
                      <div class="col">
                          <div class="row text-muted">Shirt</div>
                          <div class="row">Cotton T-shirt</div>
                      </div>
                      <div class="col">
                          <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                      </div>
                      <div class="col">&euro; 44.00 <span class="close">&#10005;</span></div>
                  </div>
              </div>
              <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
          </div>
          <div class="col-md-4 summary">
              <div><h5><b>Summary</b></h5></div>
              <hr>
              <div class="row">
                  <div class="col" style="padding-left:0;">ITEMS 3</div>
                  <div class="col text-right">&euro; 132.00</div>
              </div>
              <form>
                  <p>SHIPPING</p>
                  <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                  <p>GIVE CODE</p>
                  <input id="code" placeholder="Enter your code">
              </form>
              <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                  <div class="col">TOTAL PRICE</div>
                  <div class="col text-right">&euro; 137.00</div>
              </div>
              <button class="btn">CHECKOUT</button>
          </div>
      </div>
      
  </div>
</div>
