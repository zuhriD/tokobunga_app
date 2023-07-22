@extends('layouts.base')

@section('title')
    List Produk
@endsection

@section('content')
    <img src="{{ asset('assets/img/' . $category->banner) }}" alt="Banner Image" class="img-fluid mb-5" style="margin-top: 200px">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-6 text-center">
                        <a href="{{ route('show_product', $product) }}" class="text-decoration-none text-black">
                            <img src="{{ asset('assets/img/' . $product->image) }}" alt="Produk Image" class="img-fluid"
                                style="height: 300px;width: 300px;border-radius: 200px;">
                            <h3 class="quicksand-font mt-3">{{ $product->name }}</h3>
                            <p class="josefin-font "
                                style="font-size: 30px;font-weight: 300;text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4);">Rp
                                {{ $product->price }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <h3 class="text-center josefin-font" style="color:#6D6C6C;font-weight: 400;margin-top: 100px;">@FLORAMOR</h3>
@endsection
