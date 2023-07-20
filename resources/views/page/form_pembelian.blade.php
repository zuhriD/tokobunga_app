@extends('layouts.base')

@section('title')
    Form Pembelian
@endsection

@section('content')
<style>
    .background-image {
    background-image: url('assets/form.png');
    background-size: cover;
    background-position: center;
    min-height: 100vh;
    display: flex;
    padding: 110px;
    padding-top: 50px;
    margin-top: 200px;
}

</style>
<div class="background-image" >
    <div class="container p-5" style="background-color: #FECECEED;border-radius: 30px;width: 70%;">
        <h3 class="text-center raleway-font ">FORM PEMESANAN:</h3>
        <hr style="opacity: 100%;">
        <form action="" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label raleway-font">Nama Produk*</label>
                <input type="text" class="form-control" id="identifier" name="identifier">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="kategori" class="form-label raleway-font">Kategori Produk*</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="nama" class="form-label raleway-font">Jumlah*</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
            </div>   
            <div class="mb-4">
                <label for="name" class="form-label raleway-font">Total Harga*</label>
                <input type="text" class="form-control" id="identifier" name="identifier">
            </div>
            <div class="mb-4">
                <label for="name" class="form-label raleway-font">Alamat*</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>         
            {{-- make button --}}
            <div class="text-center">
                <button class="btn btn-primary mt-4 bg-black px-5 jacques-font"
                    style="padding: 15px;border-radius: 30px;font-size: 16px;border-color: black;box-shadow:0 2px 4px rgba(0, 0, 0, 0.2); ">Check Out</button>
            </div>
        </form>
    </div>
</div>

@endsection