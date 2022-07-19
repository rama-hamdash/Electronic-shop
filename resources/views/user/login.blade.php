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
                        <div class="container">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                placeholder="Your email..." required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="password" type="text" class="form-control" id="password"
                                                placeholder="Your password..." required="">
                                        </fieldset>
                                    </div>


                                    <div class="col-md-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Login </button>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        {{-- <div class="share">
                                            <h6>You can also keep in touch on: <span><a href="{{ asset('assets/#') }}"><i
                                                            class="fa fa-facebook"></i></a><a
                                                        href="{{ asset('assets/#') }}"><i
                                                            class="fa fa-linkedin"></i></a><a
                                                        href="{{ asset('assets/#') }}"><i
                                                            class="fa fa-twitter"></i></a></span></h6>
                                        </div> --}}
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
