@extends('layouts.base')

@section('title')
    History Page
@endsection

@section('content')

<div class="container-fluid p-0" style="margin-top: 230px;">
    <h1 class="text-center mb-4" style="font-family: 'Malgun Gothic', sans-serif;font-weight: 700;">History Pembelian</h1>
    <div class="header-section d-flex align-items-center" style="background-color: #FFF6F6; padding: 20px;border: 1px solid #FECECE;">
        <img src="{{ asset('assets/icon/1.png') }}" alt="">
        <h1 class="text-center mb-0 jacques-font" style="margin-left: 10px;">LA FLOR AMOR</h1>
    </div>
    <div class="body-section" style="background-color: #FFF6F6; padding: 20px;border: 1px solid #FECECE;">
        <div class="container">
            <div class="row align-items-center mt-3">
                <div class="col-md-2">
                    <img src="{{ asset('assets/content/13.png') }}" alt="Product Image" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <div>
                        <h3 class="mb-3 jacques-font">Colorful Dusty Blue</h3>
                        <p style="font-family: 'Quicksand', sans-serif;font-weight: 400;">Kategori: Flowers Box</p>
                        <p style="font-family: 'Quicksand', sans-serif;font-weight: 400;">x1</p>
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <p class="text-end font-weight-bold" style="font-family: 'stfangsong-regular', sans-serif;">Rp 450.000</p>
                </div>
            </div>        
        </div>
        
    </div>
    
</div>
<div class="text-end mt-4 pr-4">
    <p style="font-family: 'Quicksand', sans-serif;font-weight: 400;margin-right:20px;font-size:24px;">Total Harga: <span style="color:#FECECE;font-weight: bold;">Rp 450.000</span></p>
</div>

<div class="text-end mt-4 pr-4">
    <button class="btn btn-primary mr-3 jacques-font" style="background-color: #FFFFFF; border-color: #FECECE; color: black;font-size: 20px;">Beli Lagi</button>
    <button class="btn btn-primary jacques-font" style="background-color: #FECECE; border-color: #FFFFFF; color: black;font-size: 20px;margin-right:20px;">Kunjungi Toko</button>
</div>
<h3 class="text-center" style="font-family: 'Josefin Sans', sans-serif;color:#6D6C6C">@FLORAMOR</h3>

@endsection