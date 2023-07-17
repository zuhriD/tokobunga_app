@extends('layouts.base')

@section('title')
    Home Page
@endsection

@section('content')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top: 200px">


    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/cr1.png') }}" alt="Image 1" class="carousel-image">
        </div>
        <div class="carousel-item ">
          <img src="{{ asset('assets/cr2.png') }}" alt="Image 2" class="carousel-image">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/cr3.png') }}" alt="Image 3" class="carousel-image">
        </div>
      </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
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
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <!-- Block for map -->
        <div id="map" style="height: 400px;"></div>
      </div>
      <div class="col-md-6 mb-3">
        <!-- Block for contact details -->
        <h3 class="text-center" style="font-family: 'Jacques Francois', sans-serif;">WHERE TO FIND US</h3>
        <hr style="border-top: 1px solid black;opacity: 100%;">
        <p class="manjari-font mb-1">LA FLOR AMOR SURABAYA</p>
        <p class="jacques-font mb-2">Jl. Ketintang, Surabaya, Indonesia</p>
        <p class="jacques-font " style="margin-top: 0;
    margin-bottom: 0;">flor.amor@gmail.com</p>
        <p class="jacques-font " style="margin-top: 0;
    margin-bottom: 0;">w: 08123456789</p>
        <p class="jacques-font " style="margin-top: 0;
    margin-bottom: 0;">w: 08123456789</p>
        <p class="jacques-font " style="margin-top: 0;
    margin-bottom: 0;">w: 08123456789</p>
        <p class="jacques-font " style="margin-top: 0;
    margin-bottom: 0;">w: 08123456789</p>
        <p class="manjari-font mt-4 mb-0">OPENING HOURS:</p>
        <p class="jacques-font " style="margin-top: 0;
        margin-bottom: 0;">Sun - Fri, 8am - 10pm</p>
        <p class="jacques-font " style="margin-top: 0;
        margin-bottom: 0;">Sat, 8am - 9pm</p>
      </div>
    </div>
  </div>
  
  
@endsection