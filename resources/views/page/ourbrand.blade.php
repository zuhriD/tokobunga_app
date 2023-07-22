@extends('layouts.base')

@section('title')
    Our Brand Page
@endsection

@section('content')
    <div class="container mb-5" style="margin-top: 230px;">
        <div class="row">
            <div class="col-md-7">
                <img src="{{ asset('assets/ourbrand/1.png') }}" alt="" class="img-fluid"><br>
                <img src="{{ asset('assets/ourbrand/2.png') }}" alt="" class="img-fluid mt-5 mb-5">
            </div>
            <div class="col-md-5 d-flex flex-column align-items-center justify-content-center">
                <h3 class="text-center passion-font"
                    style="font-weight: bold;font-size: 50px;text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);">PRODUK
                    <br>TERFAVORIT
                </h3>
                <p class="josefin-font" style="font-size: 30px;font-weight: 300;">Pilihan Bunga untuk Setiap Moment</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3 class="text-center montserrat-font" style="font-size: 36px;font-weight: 700;">Katalog Produk</h3>
        <hr style="opacity: 100%;">
        <div class="row mt-4 mb-5">
            @if ($category->isEmpty())
                <div class="text-center">
                    <h1 class="jacques-font" style="font-size: 20px;color: grey;">Belum ada produk</h1>
                </div>
            @else
                @foreach ($category as $item)
                <div class="col-md-6 mb-3">
                    <div class="product-box" style="cursor: pointer;">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <img src="{{ asset('assets/img/' .$item->image) }}" alt="Product Image" class="img-fluid">
                            </div>
                            <div class="col-md-6 ">
                                <h5 class="text-start myanmar-font" style="font-weight: bold;font-size: 30px;"><a
                                        href="{{ route('show_brand', $item->id) }}" class="text-decoration-none text-black">{{ $item->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
    <h3 class="text-center josefin-font" style="color:#6D6C6C;font-weight: 400;">@FLORAMOR</h3>
@endsection
