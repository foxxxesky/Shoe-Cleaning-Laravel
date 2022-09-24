@extends('layouts.main')

@section('content')

<section>
    <div class="container pt-5 pb-5">
        @if (count($products) === 0)
        <p class="text-center pt-3 fw-bold text-danger">Belum Ada Produk!</p>
        <p class="text-center">Silahkan Hubungi <b>Admin Shoe Cleaning!</b></p>
        @else
        <div class="row justify-content-start">
            @foreach ($products as $index => $product)
            <div class="col-3">
                <img id="img-service" src="{{ asset('storage/' . $product->gambar) }}" alt="">
            </div>
            <div class="col-3">
                <h4 id='ServiceTitle'>{{ $product->nama_produk }}</h4>
                <h4 class="" id='ServicePrice'>Rp. {{ $product->harga }}</h4>
                <p class="" id='ServiceDesc'>{{ $product->deskripsi }}</p>
                <div>
                    <form action="/Order" method="get">
                        <!-- nama product -->
                        <input type="hidden" name="service" value="{{ $product->nama_produk }}">

                        <!-- harga product -->
                        <input type="hidden" name="harga" value="{{ $product->harga }}">

                        <!-- Jumlah -->
                        <div class="mb-3">
                            <label for="jumlah" id="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                        </div>

                        <!-- Button -->
                        <div>
                            <button id="buttonservice" type="submit" class="btn">Pesan
                                Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>


@endsection