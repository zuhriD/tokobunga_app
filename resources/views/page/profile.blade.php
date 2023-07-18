@extends('layouts.base')

@section('title')
    Profile Page
@endsection

@section('content')

<div class="container mb-5" style="margin-top: 230px">
    <h1 class="text-center" style="font-family: 'Malgun Gothic', sans-serif;font-weight: 700;">My Profile</h1>

    <div class="row">
        <div class="col-md-12 align-items-center">
            <form class=" ">
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
        </div>
    </div>
    
  </div>

@endsection