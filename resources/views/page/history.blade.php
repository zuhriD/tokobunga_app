@extends('layouts.base')

@section('title')
    History Page
@endsection

@section('content')

<div class="container">
    <h1 class="text-center">My Profile</h1>

    <form>
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

@endsection