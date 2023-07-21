@extends('layouts.base')

@section('title')
    History Page
@endsection

@section('content')
    <div class="container-fluid p-0" style="margin-top: 230px;">
        <h1 class="text-center mb-4" style="font-family: 'Malgun Gothic', sans-serif;font-weight: 700;">History Pembelian</h1>
        <div class="header-section d-flex align-items-center"
            style="background-color: #FFF6F6; padding: 20px;border: 1px solid #FECECE;">
            <img src="{{ asset('assets/icon/1.png') }}" alt="">
            <h1 class="text-center mb-0 jacques-font" style="margin-left: 10px;">LA FLOR AMOR</h1>
        </div>
        <div class="body-section" style="background-color: #FFF6F6; padding: 20px;border: 1px solid #FECECE;">
            <div class="container">
                @if ($history->isEmpty())
                    <div class="text-center">
                        <h1 class="jacques-font" style="font-size: 20px;color: grey;">Belum ada pembelian</h1>
                    </div>
                @else
                @foreach ($history as $order)
                <div class="row align-items-center mt-3">
                    <div class="col-md-2">
                        <img src="/assets/img/{{ $order->product->image }}" alt="Product Image" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <div>
                            <h3 class="mb-3 jacques-font">{{ $order->product->name }}</h3>
                            <p style="font-family: 'Quicksand', sans-serif;font-weight: 400;">Kategori:
                                {{ $order->category->name }}</p>
                            <p style="font-family: 'Quicksand', sans-serif;font-weight: 400;">x{{ $order->quantity }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <p class="text-end font-weight-bold" style="font-family: 'stfangsong-regular', sans-serif;">Rp
                            {{ $order->price }}</p>
                    </div>
                </div>
            @endforeach
                @endif
                
            </div>

        </div>

    </div>
    <div class="text-end mt-4 pr-4">
        <p style="font-family: 'Quicksand', sans-serif;font-weight: 400;margin-right:20px;font-size:24px;">Total Harga:
            @if ($total == 0)
                Rp 0
            @else
                Rp {{ number_format($total, 0, ',', '.') }}
            @endif
        </p>
    </div>

    <div class="text-end mt-4 pr-4">
        <a href='{{ route('ourbrand') }}' class="btn btn-primary mr-3 jacques-font"
            style="background-color: #FFFFFF; border-color: #FECECE; color: black;font-size: 20px;">Beli Lagi</a>
        <a href='{{ route('homeUser') }}' class="btn btn-primary jacques-font"
            style="background-color: #FECECE; border-color: #FFFFFF; color: black;font-size: 20px;margin-right:20px;">Kunjungi
            Toko</a>
    </div>
    <h3 class="text-center josefin-font" style="color:#6D6C6C;font-weight: 400;">@FLORAMOR</h3>
@endsection
