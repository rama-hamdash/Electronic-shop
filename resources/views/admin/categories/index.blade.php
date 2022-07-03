@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
          <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">الأصناف</li>
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
    <div class="row justify-content-center">
      
      @if (session('success'))
      <div class="alert alert-success text-white" role="alert">
          {{ session('success') }}
      </div>
  @endif
      <div class="col-2 mb-5">
        <a href="{{route('admin.categories.create')}}" class="btn btn-primary">إضافة</a>
    </div>

      <div class="col-12">
        <div class="card my-4">
          
        <div class="table-responsive">

          <div class="mb-3 p-2 col-3"><div class="input-group input-group-outline mb-2 inline">
            <label class="form-label">اكتب للبحث</label>
            <input type="text" class="form-control">
          </div>
         </div>
     

            <table class="table ">
                <tr>
                  <th scope="col">الرقم</th>
                  <th scope="col">الاسم</th>
                  <th scope="col">عرض</th>
                  <th scope="col">تعديل</th>
  
                </tr>
              
             @foreach ($categories as $category)
             <tr>
              <th scope="row">{{$category->id}}</th>
              <td>{{$category->name}}</td>
              <td class="text-info"><a href="{{route('admin.categories.show',[$category->id])}}" ><i class="fas fa-eye"></i></a></td>
              <td class="text-warning"><a href="{{route('admin.categories.edit',[$category->id])}}" ><i class="fas fa-edit"></i></a></td>
            
            </tr>
             @endforeach
            
          </table>
        </div>
        </div>
      </div>
    </div>
  
    
 
@endsection