@extends('layouts.admin_dashboard')
@section('content')

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

          <div class="col-6">
              <div class="card p-3">
                  <div class="card-header">
                    إضافة موديل جديد
                  </div>
              <form method="POST" action="{{route('admin.models.store')}}"  enctype="multipart/form-data">
                @csrf
                 
                  <div class="input-group input-group-outline my-3">
                      <label class="form-label">الوصف</label>
                      <textarea name="description"  rows="5" class="form-control">
                      </textarea>
                    </div>
               
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">رقم الموديل</label>
                      <input type="number" name="model_num" class="form-control">
                    </div>

                   

                  <div class="input-group input-group-outline my-3">
                    <label class="">الصنف </label>
                    <select class="p-2" name="category_id">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                          
                      @endforeach
                    </select>
                  </div>
                    <button class="btn btn-primary" type="submit">إضافة</button>
                  
              </div>
              </div>
        </div>
        </div>
  
  
@endsection