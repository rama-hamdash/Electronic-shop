
   



    {{--  --}}

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
                      <div class="col"><h4><b>Shopping Cart</b></h4></div>
                      <div class="col align-self-center text-right text-muted"></div>
                  </div>
              </div>    
              @foreach($cart as $item)
              <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2">
                      <img class="img-fluid" src= "{{ asset('storage/' . $item->model->image_url) }}"></div>
                    <div class="col">
                        <div class="row text-muted">{{$item->name}}</div>
                        <div class="row"></div>
                    </div>
                    <div class="col">
                        <a wire:click.prevent="decreaseQuantity('{{ $item->id }}')">-</a>
                        <a class="border">{{$item->quantity}}</a>
                        <a wire:click.prevent="increaseQuantity('{{ $item->id }}')">+</a>
                    </div>
                    <div class="col">SYP {{$item->price*$item->quantity}} <span class="close"><a wire:click.prevent="removeFromCart({{$item->id}})" >&#10005;</a></span></div>
                </div>
            </div>
              @endforeach
            
              <div class="back-to-shop"><a href="{{ route('home') }}">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
          </div>
          <div class="col-md-4 summary">
              <div><h5><b>Summary</b></h5></div>
              <hr>
              <div class="row">
                  <div class="col" style="padding-left:0;">ITEMS </div>
                  <div class="col text-right">SYP {{$total}}</div>
              </div>
              <form>
                  <p>SHIPPING</p>
                  <select><option class="text-muted">SHIPPING000</option></select>
                 
              </form>
             
          </div>
      </div>
      
  </div>
</div>
