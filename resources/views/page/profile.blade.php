@extends('layouts.base')

@section('title')
    Profile Page
@endsection

@section('content')

<div class="container mb-5" style="margin-top: 230px">
    <h1 class="text-center" style="font-family: 'Malgun Gothic', sans-serif;font-weight: 700;">My Profile</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label" style="font-family: 'Arial Rounded MT Bold', sans-serif;font-weight: bold;">Username</label>
                    <input type="text" class="form-control p-2" id="username"  style="background-color: #EAEAEA;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="font-family: 'Arial Rounded MT Bold', sans-serif;font-weight: bold;">Email</label>
                    <input type="email" class="form-control p-2" id="email"  style="background-color: #EAEAEA;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);" readonly>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="font-family: 'Arial Rounded MT Bold', sans-serif;font-weight: bold;">Password</label>
                    <input type="password" class="form-control p-2" id="password"  style="background-color: #EAEAEA;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);" readonly>
                </div>
            </form>
        </div>
    </div>
    
    
</div>
<h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;color:#6D6C6C">@FLORAMOR</h3>

@endsection