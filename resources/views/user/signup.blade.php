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
                <h1>Signup</h1>
                <h4>Create a new account!</h4>
              </div>
            </div>
            <div class="col-md-6">
             
            </div>
            <div class="col-md-6">
              <div class="right-content">
                <div class="container">
                  <form method="POST" action="{{ route('signup.store') }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <fieldset>
                          <input name="first_name" type="text" class="form-control" id="name" placeholder="Your first name..." required="">
                        </fieldset>
                      </div>

                      <div class="col-md-6">
                        <fieldset>
                          <input name="last_name" type="text" class="form-control" id="name" placeholder="Your last name..." required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6">
                        <fieldset>
                          <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                        </fieldset>
                      </div>

                      <div class="col-md-6">
                        <fieldset>
                          <input name="password" type="password" class="form-control" id="password" placeholder="Your password..." required="">
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <fieldset>
                          <input name="mobile" type="text" class="form-control" id="mobile" placeholder="mobile..." required="">
                        </fieldset>
                      </div>
                     
                      <div class="col-md-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="button">Signup</button>
                        </fieldset>
                      </div>
                      <div class="col-md-12">
                        <div class="share">
                          <h6>By creating a new account, you can complete your shopping and confirm orders</h6>
                        </div>
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