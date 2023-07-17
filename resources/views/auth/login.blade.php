@extends('auth.base')
@section('title')
    Login Page
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-box p-4">
           <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <!-- Image block -->
                <img src="{{ asset('assets/image-auth.png') }}" alt="Login" class="img-fluid" style="height: 500px;width: 350px">
              </div>
              <div class="col-md-5 mt-5 flex-column align-items-center justify-content-center">
                <h2 class="fw-bold text-black mb-4 text-center">Login </h2>
                <form>
                  <div class="mb-4">
                    <input type="text" class="form-control" id="username" placeholder="Username or Email Address*">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password *">
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember Me</label>
                    </div>
                    <a href="#" class="text-black">Lost Your Password?</a>
                  </div>
                  <div class="mb-3 d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <p class="mb-0" style="color: grey">Not a Member? <a href="#" class="text-black">Register</a></p>
                  </div>
                </form>
              </div>   
                                      
           </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection