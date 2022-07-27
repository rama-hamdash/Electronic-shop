@extends('layouts.user')
@section('content')
    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>LOGIN</h1>
                        <h4>Welcome back!</h4>
                    </div>
                </div>
                <div class="col-md-6">
                   
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="container"> @if (session('success'))
                    <div class="alert alert-info" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                            <form id="contact" action="{{route('authenticate')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                placeholder="Your email..." required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="password" type="password" class="form-control" id="password"
                                                placeholder="Your password..." required="">
                                        </fieldset>
                                    </div>


                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Login </button>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Page Ends Here -->
@endsection
