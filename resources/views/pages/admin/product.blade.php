@extends('layouts.mainadmin')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('delete') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('edit') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div>
    <div class="container">
        <div class="row justify-content-between pt-5 pb-5" id="product-bg">
            <div class="col-6">
                <h3 id="product-heading">Semua Produk Dari Shoe Cleaning</h3>
            </div>
            <div class="col-6">
                <div class="text-end">
                    <a class="btn btn-info text-white" href="/addProduct">Buat Produk Baru</a>
                </div>
            </div>
        </div>

        @if (count($products) === 0)
        <div class="text-center pt-5 pb-5">
            <p><b class="text-danger">Belum ada</b> produk silahkan tambah produk!</p>
        </div>
        @else
        <div class="row justify-content-start">
            @foreach ($products as $index => $product)
            <div class="col-3 pt-5 pb-5">
                <img id="img-service" src="{{ asset('storage/' . $product->gambar) }}" alt="" width='292px'
                    weight='383px'>
            </div>
            <div class="col-3 pt-5 pb-5">
                <h4 id='ServiceTitle'>{{ $product->nama_produk }}</h4>
                <h4 id='ServicePrice' class="pb-2">Rp. {{ $product->harga }}</h4>
                <p id='ServiceDesc' class="pb-3">{{ $product->deskripsi }}</p>
                <div class="row">
                    <div class="col-4">
                        <form action="/editProduct" method="GET">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <button id="buttonservice" type="submit" class="btn btn-warning">Edit</button>
                        </form>
                    </div>
                    <div class="col-4">
                        <form action="/Product" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <button id="buttonservice" type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection