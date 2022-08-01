@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 ">
          <li class="breadcrumb-item text-sm ps-2"><a class="opacity-5 text-dark" href="javascript:;">لوحة التحكم </a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">الأطباق</li>
        </ol>
       
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
        
       
         
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row justify-content-center">
      
      <div class="col-2 mb-5">
        <a href="{{route('admin.orders.create')}}" class="btn btn-primary" type="button">إضافة</a>
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
                  <th scope="col">السعر</th>
                  <th scope="col">الحالة </th>
                   <th scope="col">عرض</th>
                  <th scope="col">تعديل</th>
                </tr>
                @foreach($orders as $order)
                <tr>
                  <th scope="row">{{ $order->id }}</th>
                  <td>{{  $order->user->first_name }}  {{  $order->user->last_name }}</td>
                  <td>{{ $order->cost  }}</td>
                 
                   <td><a class="text-info" href="{{route('admin.orders.show',[$order->id])}}"><i class="fas fa-eye"></i></a></td>
                  <td><a class="text-warning" href="{{route('admin.orders.edit',[$order->id])}}"><i class="fas fa-edit"></i></a></td>
                  <td class="text-danger"><i class="fas fa-trash-alt"></i></td>
                </tr>
              @endforeach
              
          </table>
        </div>
        </div>
      </div>
    </div>
  
@endsection