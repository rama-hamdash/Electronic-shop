@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
            <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">تعديل طلب</li>
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
        <div class="row gutters-sm justify-content-center">
         
          <div class="col-8">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger text-white" role="alert">
                    {{$error}}
                </div>

            @endforeach
            @endif
        
            @if(session('success'))
            <div class="alert alert-success text-white" role="alert">
                {{session('success')}}
              </div>
            @endif
          </div>

            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        
                        <div class="row">
                          <div class="col-4">
                           <form method="GET" action="{{ route('admin.orders.add_order_items_to_basket') }}">  
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                          <button type="submit" class="text-success btn  mt-3"><i class="fas fa-sync"></i>sync</button>
                           </form> 
                        </div>
                          <div class="col-12">
                            <div class="card p-3">
                            
                            <form method="POST" action="{{ route('admin.orders.update',[$order->id]) }}">
                             @csrf
                             @method('PUT')
                                
                             
                                  <div class="input-group input-group-outline my-3">
                                    <label class="form-label">عنوان</label>
                                    <input type="text" name="address" class="form-control" value="{{ $order->address }}">
                                  </div>
                         
                                  <button class="btn btn-warning" type="submit" >تعديل</button>
                            </div>
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
                                        هل تريد تأكيد عملية الطلب
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">إغلاق</button>
                                        <button type="button" class="btn btn-primary">تأكيد</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end modal-->
        
                    </div>
                </div>
        
            </div>
        </div>
  
@endsection