@extends('layouts.base')

@section('title')
    Profile Page
@endsection

@section('content')
    <img src="{{ asset('assets/profile/banner.png') }}" alt="Banner Image" class="img-fluid" style="margin-top: 200px">
    <div class="container mb-5 mt-5">
        <h1 class="text-center" style="font-family: 'Malgun Gothic', sans-serif;font-weight: 700;">My Profile</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label"
                            style="font-family: 'Arial Rounded MT Bold', sans-serif;font-weight: bold;">Username</label>
                        <input type="text" class="form-control p-2" id="username" value="{{ $user->username }}"
                            style="background-color: #EAEAEA;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"
                            style="font-family: 'Arial Rounded MT Bold', sans-serif;font-weight: bold;">Email</label>
                        <input type="email" class="form-control p-2" id="email" value="{{ $user->email }}"
                            style="background-color: #EAEAEA;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            style="font-family: 'Arial Rounded MT Bold', sans-serif;font-weight: bold;">Password</label>
                        <input type="password" class="form-control p-2" id="password" value="{{ $user->password }}"
                            style="background-color: #EAEAEA;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h3 class="text-center josefin-font" style="color:#6D6C6C;font-weight: 400;">@FLORAMOR</h3>
@endsection
