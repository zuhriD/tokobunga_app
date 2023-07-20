@extends('auth.base')
@section('title')
    Register Page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('error'))
                    <div class="col-sm-12 mt-2">
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="login-box p-4">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <!-- Image block -->
                            <img src="{{ asset('assets/image-auth.png') }}" alt="Login" class="img-fluid"
                                style="height: 500px;width: 350px">
                        </div>
                        <div class="col-md-5 mt-5 flex-column align-items-center justify-content-center">
                            <h2 class="fw-bold text-black mb-4 text-center">Sign Up </h2>
                            <form action="{{ route('auths.register') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="Name">
                                    <input type="hidden" class="d-none" name="role_id" value="2">
                                </div>
                                <div class="mb-4">
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Password *">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" placeholder="Confirm Password *">
                                </div>
                                <div class="mb-3 d-flex justify-content-between align-items-center">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                    <p class="mb-0" style="color: grey">Already a member? <a href="{{ route('login') }}"
                                            class="text-black">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
