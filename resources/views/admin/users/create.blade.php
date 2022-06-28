@extends('layouts.admin_dashboard')
@section('content')


    <div class="container-fluid py-4">
        <div class="row mt-8 justify-content-center">


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
                        إضافة مستخدم جديد
                    </div>
                    <form method="POST" action="{{ route('admin.users.store') }}">
                        @csrf
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">الاسم </label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">الكنية</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">البريد الاكتروني</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">كلمة المرور</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">الموبايل</label>
                            <input type="text" name="mobile" class="form-control">
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">الصلاحية</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="gridRadios1"
                                            value="customer" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            زبون
                                        </label>
                                    </div>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="role" id="gridRadios1"
                                            value="admin" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            مسؤول مطعم
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button class="btn btn-primary" type="submit">إضافة</button>

                </div>
            </div>
        </div>
    </div>
@endsection
