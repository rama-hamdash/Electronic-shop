@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
          <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">عرض طبق</li>
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
      <div class="row gutters-sm">
       
          <div class="col-md-8">
              <div class="card mb-3">
                  <div class="card-body">

                      <div class="row justify-content-center">
                 
                          <div class="col-sm-9 text-secondary">
                              <img src="{{asset('storage/'.$product->image)}}" class="rounded img-fluid" alt="...">
                          </div>
                      </div>
                      <hr>

                      <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">الكمية </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            {{$product->quantity}}
                          </div>
                      </div>

                      <hr>

                      <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">البيع </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            {{$product->sold}}
                          </div>
                      </div>

                      <hr>

                      <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">المسترجع </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            {{$product->retreived}}
                          </div>
                      </div>


                      <hr>

                      <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">سعر البيع </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            {{$product->sel_price}}
                          </div>
                      </div>

                      <hr>

                      <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">سعر المسترجع </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            {{$product->purshase_price}}
                          </div>
                      </div>

                      <hr>

                      <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">الصورة </h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            {{$product->image_url}}
                          </div>
                      </div>
                    
                      <hr>

                      <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">السعر</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                             {{$product->price}}
                          </div>
                      </div>

                      <hr>

                        <div class="row">
                          <div class="col-sm-3">
                              <h6 class="mb-0">الكمية</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                             <form method="GET" action="{{ route('admin.cart.add_to_cart') }}">
                               <input type="number" name="quantity">
                               <input type="hidden" name="product_id" value="{{ $product->id }}">
                               <button class="btn btn-success btn-sm p-3" type="submit">أضف للسلة</button>
                             </form>
                          </div>
                      </div>
                      <hr>
                     
                      <div class="row">

                
                          <div class="col-sm-9 text-secondary">
                              <a href="{{route('admin.products.edit',[$product->id])}}" class="btn btn-warning">تعديل</a>
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
                                      <button type="botton" class="btn btn-secondary"
                                          data-bs-dismiss="modal">إغلاق</button>

                                          <form method="POST" action="{{route('admin.products.destroy',[$product->id])}}">
                                            @csrf
                                            @method('DELETE')
                                      <button type="submit" class="btn btn-danger">تأكيد</button>
                                          </form>
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