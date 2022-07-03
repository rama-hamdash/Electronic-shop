@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
            <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">تعديل حالة طلب</li>
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
            
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row mt-3 justify-content-center">

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

            <div class="col-8">
                <div class="card p-3">
                    <div class="card-header">
                    تعديل حالة طلب
                    </div>
                <form method="POST" action="{{ route('admin.orders.assign_delivery_boy') }}">
                    @csrf
                    @method('PUT')
                  <div class="input-group input-group-outline my-3 ">
                            @foreach ($users as $user)
                            <select name="user_id">
                            <option value="{{ $user->id }}"> {{ $user->first_name }} {{ $user->last_name }}</option>     
                            </select>
                            @endforeach             
                           
                    </select>   

                    <input type="hidden" name="order_id" value="{{ $order->id}}">
                </div> 
                    
                  
                      <button class="btn btn-primary" type="submit">تخصيص</button>
                    
                </div>
                </div>
          </div>
          </div>
  
@endsection