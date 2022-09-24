@extends('layouts.main')

@section('content')
<section>
    <div class="container pb-4 pt-5">
        <h3 class="fw-bold pb-2" id="ulasan-heading">Ulasan Produk</h3>
        <p id="ulasan-text">Berikan ulasan untuk produk yang sudah anda pesan</p>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-4">
                <h3 id="ulasan-subheading">{{ $data->nama_produk }}</h3>
                <p id="ulasan-text">{{ $desc }}</p>
            </div>
            <div class="col-8">
                <form action="/Ulasan" method="post">
                    @csrf
                    <input type="hidden" name='id' value="{{ $data->id }}">
                    <textarea class="w-100" name="ulasan" cols="50" rows="10"></textarea>
                    <div class="text-end pt-3">
                        <button class="btn text-white" id="ulasan-button" type="submit">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection