@extends('layouts.base')

@section('title')
    Form Pembelian
@endsection

@section('content')
    <style>
        .background-image {
            background-image: url('../assets/form.png'); 
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            padding: 110px;
            padding-top: 50px;
            margin-top: 200px;
        }
    </style>
    <div class="background-image">
        <div class="container p-5" style="background-color: #FECECEED;border-radius: 30px;width: 70%;">
            <h3 class="text-center raleway-font ">FORM PEMESANAN:</h3>
            <hr style="opacity: 100%;">
            <form action="{{ route('store_order') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label raleway-font">Nama Produk*</label>
                    <input type="text" class="form-control" value="{{ $product->name }}" readonly>
                    <input type="hidden" class="d-none" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" class="d-none" name="product_id" value="{{ $product->id }}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="kategori" class="form-label raleway-font">Kategori Produk*</label>
                            <input type="text" class="form-control" value="{{ $product->category->name }}" readonly>
                            <input type="hidden" class="d-none" name="category_id" value="{{ $product->category->id }}">
                            <input type="hidden"  name="harga" id="harga" value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label for="quantity" class="form-label raleway-font">Jumlah*</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" onkeyup="get_total()">
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="price" class="form-label raleway-font">Total Harga*</label>
                    <input type="text" class="form-control" id="price" name="price" readonly>
                </div>
                <div class="mb-4">
                    <label for="address" class="form-label raleway-font">Alamat*</label>
                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                </div>
                <div class="mb-4">
                    <label for="send_method" class="form-label raleway-font">Metode Pengiriman*</label>
                    <input type="text" class="form-control" id="send_method" name="send_method">
                </div>
                {{-- make button --}}
                <div class="text-center">
                    <button class="btn btn-primary mt-4 bg-black px-5 jacques-font"
                        style="padding: 15px;border-radius: 30px;font-size: 16px;border-color: black;box-shadow:0 2px 4px rgba(0, 0, 0, 0.2); ">Check
                        Out</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/formpembelian.js') }}"></script>
@endsection
