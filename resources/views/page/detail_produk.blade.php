@extends('layouts.base')

@section('title')
    Detail Produk
@endsection

@section('content')
    <div class="container p-5 mb-5"
        style="margin-top: 250px;background-color: #FECECE;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);width: 80%;">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/img/' . $product->image) }}" alt="" class="img-fluid" height="300"
                    width="300">
            </div>
            <div class="col-md-8">
                <h3 class="jacques-font" style="font-weight: 400;font-size: 40px;">{{ $product->name }}</h3>
                <p class="manjari-font" style="font-weight: 400;">Rp {{ $product->price }}</p>
                <div class="container p-3" style="background-color: white;border-radius: 10px;">
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
                <div class="text-center">
                    <form action="{{ route('create_order', $product) }}" method="get">
                        <button class="btn btn-primary mt-4 bg-black px-5 jacques-font"
                            style="padding: 15px;border-radius: 30px;font-size: 16px;border-color: black;box-shadow:0 2px 4px rgba(0, 0, 0, 0.2); ">Beli
                            Sekarang</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <h3 class="text-center josefin-font" style="color:#6D6C6C;font-weight: 400;margin-top: 100px;">@FLORAMOR</h3>
@endsection
