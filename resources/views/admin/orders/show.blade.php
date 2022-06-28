@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
          <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page"> تفاصيل طلب</li>
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
            

                    @foreach($order->clothes as $item)

                    <div class="card rounded-3 mb-4">
                      <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                          
                          <div class="col-md-3 col-lg-3 col-xl-3">
                            <p class="lead fw-normal mb-2">{{$item->name}}</p>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            
            
                              <div class="input-group input-group-outline my-3"> 
                                <form method="GET" action="{{route('admin.cart.update_cart')}}">
                                  <input id="form1" min="0" name="quantity" value="{{$item->pivot->quantity}}" type="number"
                                    class="form-control form-control-sm" disabled />
                                    </div>   
                          </div>  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h5 class="mb-0">{{($item->price*$item->quantity)}}ل.س</h5>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
            @endforeach
                    <div class="card rounded-3 mb-4">
                      <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                          
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        
                              <div class="input-group input-group-outline my-3"> 
                               الإجمالي:  {{  $order->cost   }}
                                    </div>
                          </div>
                        </div>
                    <div >
                      <div class="card-body">
                        <a href="{{route('admin.orders.edit',[$order->id])}}" class="btn  btn-warning">تعديل </a>
                        <a href="{{route('admin.orders.edit_status',[$order->id])}}" class="btn  btn-success"> تعديل حالة الطلب</a>
                        <a href="{{route('admin.orders.assign_delivery_boy_form',[$order->id])}}" class="btn btn-dark">تخصيص سائق</a>
                        <a class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">حذف</a>

                      </div>
                    </div>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">تحذير</h5>
                                      <button type="button" class="btn-close"
                                          data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      هل تريد تأكيد عملية الحذف
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">إغلاق</button>
                                      <button type="button" class="btn btn-danger">تأكيد</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--end modal-->
            
                  </div>
                </div>
              </div>
            </section>


        
        </div>
      </div>
    </div>
  
  
@endsection