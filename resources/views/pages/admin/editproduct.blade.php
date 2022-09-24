@extends('layouts.mainadmin')

@section('content')
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col">
            <h3 id="product-heading">Edit Produk</h3>
        </div>
    </div>

    <form action="/editProduct" method="post" enctype="multipart/form-data">
        @csrf
        @foreach ($product as $index => $item)
        <input type="hidden" name="id" value="{{ $item->id }}">
        <div class="mb-3">
            <label class="form-label" id="text-field">Foto Produk</label>
            <input class="form-control" type="file" name="gambar">
        </div>

        <div class="mb-3">
            <label class="form-label" id="text-field">Nama Produk</label>
            <input type="text" class="form-control" name="nama_produk" value="{{ $item->nama_produk }}">
        </div>

        <div class="mb-3">
            <label class="form-label" id="text-field">Harga Produk</label>
            <input type="text" class="form-control" name="harga" value="{{ $item->harga }}">
        </div>

        <div class="mb-3">
            <label class="form-label" id="text-field">Deskripsi Produk</label>
            <textarea class="form-control" rows="3" name="deskripsi">{{ $item->deskripsi }}</textarea>
        </div>
        @endforeach

        <div class="text-end pt-3 pb-5">
            <button type="submit" class="btn btn-info text-white" id="btn-form">Simpan</button> <span class="ps-3"><a
                    href="/Product" class="btn btn-danger" id="btn-form">Batalkan</a></span>
        </div>
    </form>
</div>
@endsection