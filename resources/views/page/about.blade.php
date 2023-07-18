@extends('layouts.base')

@section('title')
    About Us Page
@endsection


@section('content')
<div class="container mb-5" style="margin-top: 230px;">
    <h2 class="jacques-font text-start" style="font-size: 36px;">LA FLOR AMOR</h2>
    <div class="row mt-5">
      <div class="col-md-4">
        <p class="josefin-font " style="font-size: 20px;font-weight: 300;">Selamat datang di Flor Amor, rumah bagi keindahan bunga yang tak terlupakan!</p>
      <p class="josefin-font " style="font-size: 20px;font-weight: 300;">Flor Amor adalah toko bunga yang didedikasikan untuk memberikan pengalaman berbelanja bunga yang istimewa dan mempesona. Kami mengerti bahwa setiap bunga memiliki kekuatan magis untuk menyampaikan perasaan, menciptakan kenangan indah, dan menghadirkan kebahagiaan dalam kehidupan sehari-hari.</p>
      <p class="josefin-font " style="font-size: 20px;font-weight: 300;">Dengan komitmen kami terhadap kualitas yang tinggi, kami menyajikan rangkaian bunga segar yang dipilih dengan cermat. Mulai dari mawar yang romantis, lily yang elegan, hingga bunga eksotis yang langka, koleksi bunga kami mencerminkan keindahan alam dalam segala warna, bentuk, dan aroma.</p>
      </div>
      <div class="col-md-8 d-flex justify-content-end">
        <img src="{{ asset('assets/about/about.png') }}" alt="Image" class="img-fluid" height="500" width="500">
      </div>
    </div>
    <h2 class="mt-5 text-center montserrat-font" style="font-weight: 700;color:#FECECE;">SERVICE</h2>
  </div>
  <hr style="color: #FECECE;opacity: 100%;">
  <div class="container text-center mt-4 mb-5">
    <h3 style="margin-bottom: 100px;font-weight: 300;" class="josefin-font">JAMINAN KAMI PADA ANDA</h3>
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('assets/about/1.png') }}" alt="Image" class="img-fluid">
        <p class="mt-4 josefin-font" style="font-size: 30px;font-weight: 300;">Kirim di Hari 
            <br>yang Sama</p>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('assets/about/2.png') }}" alt="Image" class="img-fluid">
        <p class="mt-4 josefin-font" style="font-size: 30px;font-weight: 300;">Pembayaran 
            <br>Aman</p>
      </div>
      <div class="col-md-4">
        <img src="{{ asset('assets/about/3.png') }}" alt="Image" class="img-fluid">
        <p class="mt-4 josefin-font" style="font-size: 30px;font-weight: 300;">Pilihan Bunga
            <br>Variatif</p>
      </div>
    </div>
    <h3 style="margin-top: 100px;font-weight: 700;" class="text-center montserrat-font">BUNGA LOKAL DAN IMPOR SEGAR YANG BERKUALITAS TINGGI</h3>
  </div>
  <hr style="margin-bottom: 100px;color: #FECECE;opacity: 100%;">
  <h3 class="text-center josefin-font" style="color: #6D6C6C;font-weight: 400;">@FLORAMOR</h3>
@endsection