@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
          <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">تعديل طبق</li>
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
      <div class="row mt-5 justify-content-center">

        <div class="col-8">
          @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <div class="alert alert-danger text-white" role="alert">
                      {{ $error }}
                  </div>

              @endforeach
          @endif


          @if (session('success'))
              <div class="alert alert-success text-white" role="alert">
                  {{ session('success') }}
              </div>
          @endif
      </div>


          <div class="col-8">
              <div class="card p-3">
                  <div class="card-header">
                    تعديل بيانات موديل 
                  </div>
              <form method="POST" action="{{route('admin.models.update',[$model->id])}}"    enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 
                  <div class="input-group input-group-outline my-3">
                      <label class="form-label">الوصف</label>
                      <textarea   rows="5" name="description" class="form-control">
                        {{ $clothe->description }}
                      </textarea>
                    </div>
               
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">رقم الموديل</label>
                      <input type="number" name="model_num" class="form-control"   value="{{ $model->model_num }}">
                    </div>
                  

                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-2 pt-0">الحالة</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="active" id="gridRadios1" value="1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            مفعل
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="active" id="gridRadios2" value="0">
                          <label class="form-check-label" for="gridRadios2">
                           غير مفعل
                          </label>
                        </div>
                       
                      </div>
                    </div>
                  </fieldset>
                   
                      <div class="input-group input-group-outline my-3">
                        <label class="">الصنف </label>
                        <select class="p-2" name="category_id">
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                              
                          @endforeach
                        </select>
                      </div>
                         
                        </div>
                      </div>
                   
                    <button class="btn btn-warning" type="submit">تعديل</button>
                  
              </div>
              </div>
        </div>
        </div>
  
  
@endsection