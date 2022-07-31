 <div class="fixed-plugin">
     <a href="{{ route('user.wishlist') }}" style="bottom:6rem;"
         class="relative fixed-plugin-button text-dark position-fixed bg-light px-3 py-2 border border-dark">
         <span class="position-absolute text-light top-0 end-0 translate-middle badge badge-dark rounded-circle bg-dark"
             style="background-color: #1d2124!important">
         {{$wishlistCount}}

         </span>

         <i class="fa fa-heart-o py-2 ">
         </i>

     </a>
     <a href="{{ route('user.cart.get_content') }}"
         class="relative text-light fixed-plugin-button position-fixed px-3 py-2"
         style="background-color: #1d2124!important">
         <span class="position-absolute text-dark top-0 end-0 translate-middle badge rounded-circle bg-dark">
         {{$cartCount}}
         </span>

         <i class="fas fa-shopping-cart py-2">
         </i>

     </a>
 </div>
