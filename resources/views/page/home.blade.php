@extends('layouts.base')

@section('title')
    Home Page
@endsection

@section('content')
<div class="container">
    <h2 class="text-center mb-4 mt-5" style="font-family: 'Jacques Francois', sans-serif;">NEW</h2>
    <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('assets/content/1.png') }}" alt="Product 1" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Perfume Bloom Box</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/2.png') }}" alt="Product 2" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Pink & Purple Everlasting Hot Air Balloon</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/3.png') }}" alt="Product 3" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Rose Gold Bridal Bouquet</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/4.png') }}" alt="Product 4" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Keepsake Pink Unicorn</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="text-center mt-4 mb-3">
        <button class="btn btn-primary" style=" background-color: #FECECE;
        border-color: #FECECE;
        height: 50px;
        width: 200px;
        font-family: 'Jacques Francois', sans-serif;
        " >View All Products</button>
      </div>
    </div>
  </div>
  <div class="container">
    <h2 class="text-center mb-4 mt-5" style="font-family: 'Jacques Francois', sans-serif;">FRESH FLOWERS</h2>
    <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('assets/content/5.png') }}" alt="Product 1" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Easy Spring flower arrangements</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/6.png') }}" alt="Product 2" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Lilium Candidium, Madona Lily</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/7.png') }}" alt="Product 3" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Purple theme rose bouquet</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/8.png') }}" alt="Product 4" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Tulip Fresh Flower Bouquet</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="text-center mt-4 mb-3">
        <button class="btn btn-primary" style=" background-color: #FECECE;
        border-color: #FECECE;
        height: 50px;
        width: 200px;
        font-family: 'Jacques Francois', sans-serif;
        " >View All Products</button>
      </div>
    </div>
  </div>
  <div class="container">
    <h2 class="text-center mb-4 mt-5" style="font-family: 'Jacques Francois', sans-serif;">ARTIFICIAL FLOWER</h2>
    <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('assets/content/9.png') }}" alt="Product 1" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Peorchid Romantic</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/10.png') }}" alt="Product 2" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">European Style Eucalyptus Hydrangea</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/11.png') }}" alt="Product 3" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Hydrangea Macrophylla</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="col-md-3">
        <img src="{{ asset('assets/content/12.png') }}" alt="Product 4" class="img-fluid" style="font-family: 'Jacques Francois', sans-serif;">
        <p class="text-center">Tulip Artificial Flowers</p>
        <p class="text-center">Rp 1.250.000</p>
      </div>
      <div class="text-center mt-4 mb-3">
        <button class="btn btn-primary" style=" background-color: #FECECE;
        border-color: #FECECE;
        height: 50px;
        width: 200px;
        font-family: 'Jacques Francois', sans-serif;
        " >View All Products</button>
      </div>
    </div>
  </div>
  
@endsection