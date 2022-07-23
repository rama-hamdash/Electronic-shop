@extends('layouts.user')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
          <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">سلة التسوق</li>
        </ol>
       
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
        
        <ul class="navbar-nav me-auto ms-0 justify-content-end">
          
          <li class="nav-item d-xl-none pe-3 d-flex align-items-center p-2">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

          <li class="nav-item dropdown ps-2 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-globe-asia"></i>
            </a>
            <ul class="dropdown-menu  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
            
              <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                   
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">English</span> 
                        </h6>
                      
                      </div>
                    </div>
                  </a>
                </li>
              
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                   
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Arabic</span> 
                        </h6>
                      
                      </div>
                    </div>
                  </a>
                </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row justify-content-center">
      
      <div class="col-12">
        <div class="card my-4">
          <section class="h-100">
              <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-10">
            
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h3 class="fw-normal mb-0 text-black">محتوى السلة</h3>
                     
                     
                    </div>
      
                    <div class="d-flex justify-content-between align-items-center mb-4">
                     
                    
      
                      <div>
                        <h4><a href="{{route('user.cart.clear_cart')}}" class="btn btn-light text-danger"><i class="fas fa-trash-alt"></i></a></h4>
                       </div>
              
              
                    </div>
                    @foreach ($cart as $item)
                               
                    <div class="card rounded-3 mb-4">
                      <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                         
                         
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            
            
                              <div class="input-group input-group-outline my-3"> 
                                <form method="GET" action="{{route('user.cart.update_cart')}}">

                                  <input id="form1" min="0" name="quantity" value="{{$item->quantity}}" type="number"
                                    class="form-control form-control-sm" />
                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                    </div>   
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h5 class="mb-0">{{($item->price*$item->quantity)}}ل.س</h5>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <button type="submit" class="text-success btn  mt-3"><i class="fas fa-sync"></i></button>
                          </div>
                        </form>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="{{route('user.cart.delete_item',[$item->id])}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
             
                    @endforeach
            
                  <div>
                      <div class="card-body">
                        
                       
                            <a href="{{route('shop.interface')}}" class="btn btn-dark text-white btn-block btn-md">قائمة المنتجات</a>
                         
               
                      </div>
                    </div>
            
                  </div>
                </div>
              </div>
            </section>
        
        </div>
      </div>
    </div>
  
 
@endsection