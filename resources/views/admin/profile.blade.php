@extends('layouts.admin_dashboard')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
            <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">الرئيسية</li>
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

           
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                alt="Admin" class="rounded-circle" width="150">
                                
                            <div class="mt-3">
                                <h4> {{$user->first_name}}  {{$user->last_name}}</h4>
                                <p class="text-secondary mb-3"></p>
                               <a href="edit.html" class="btn btn-secondary text-white">تغيير كلمة المرور <i
                                  class="bi bi-pencil-square"></i></a> 
                                <a href="edit.html" class="btn btn-warning text-white">تعديل بياناتي <i
                                        class="bi bi-pencil-square"></i></a>
                          
                                            
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
        
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">الاسم الكامل</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$user->first_name}}  {{$user->last_name}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">البريد الالكتروني</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$user->email}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">رقم الموبايل</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$user->mobile}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                               
                            </div>
                            <div class="col-sm-9 text-secondary">
                                
                            </div>
                        </div>
        
                      
                    </div>
                </div>
        
            </div>
        </div>

        @endsection