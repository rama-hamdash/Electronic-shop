@extends('layouts.admin_dashboard')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
        
       
         
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row justify-content-center">
      
     

      <div class="col-12">
        <div class="card my-4">
          
        <div class="table-responsive">

          <div class="mb-3 p-2 col-3"><div class="input-group input-group-outline mb-2 inline">
           
          </div>
         </div>
         
            <table class="table ">
                <tr>   
                   <th scope="col">NUMBER</th>
                   <th scope="col">NAME</th>
                   <th scope="col">PRICE</th>
                   <th scope="col">SHOW</th>
         
                
                </tr>
                @foreach($orders as $order)
                <tr>
                  <th scope="row">{{ $order->id }}</th>
                  <td>{{  $order->user->first_name }}  {{  $order->user->last_name }}</td>
                  <td>{{ $order->total  }}</td>
                   <td><a class="text-info" href="{{route('admin.orders.show',[$order->id])}}"><i class="fas fa-eye"></i></a></td>
                 
                  <td class="text-danger"><i class="fas fa-trash-alt"></i></td>
                </tr>
              @endforeach
              
          </table>
        </div>
        </div>
      </div>
    </div>
  
@endsection