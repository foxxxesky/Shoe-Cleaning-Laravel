@extends('layouts.main')

@section('content')
@if (count($orders) === 0)
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="text-center mb-3">
                    <p id="ordersaya-desc">Anda Belum Melakukan Pemesanan</p>
                    <a class="btn" href="/Service" id="cuci-button">Cuci Sepatu</a>
                </div>
            </div>
        </div>
    </div>
</section>
@else
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<section>
    <div class="container pt-5 pb-5">
        <h4 id="ordersaya-title">Pesanan Saya</h4>
        <p id="ordersaya-desc" class="pt-3">Layanan ShoeCleaning sudah ditambahkan ke keranjang belanja anda</p>

        <div class="col pt-5 pb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="pb-3" id="table-head">Nama Produk</th>
                        <th scope="col" class="text-center pb-3" id="table-head">Tanggal Pemesanan</th>
                        <th scope="col" class="text-end pb-3" id="table-head">Status Pesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $index => $order)
                    <tr>
                        <td class="pt-3 pb-3 align-middle" id="table-item">
                            {{ $order->nama_produk }}
                            <br>
                            <div class="pt-2"></div>
                            <form action="/Invoice" method="get">
                                <input type="hidden" name="product" value="{{ $order->nama_produk }}">
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <button class="btn btn-warning" type="submit" id="detail-button">Detail</button>
                            </form>
                            @if (($order->status_cucian) == 'Selesai')
                            <div class="pt-2"></div>
                            <form action="/Ulasan" method="get">
                                <input type="hidden" name="product" value="{{ $order->nama_produk }}">
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <button class="btn" type="submit" id="ulasan-button">Berikan Ulasan</button>
                            </form>
                            @endif
                        </td>
                        <td class="text-center align-middle" id="table-item">
                            {{ date('d-M-Y', strtotime($order->created_at)) }}
                        </td>
                        <td class="text-end align-middle" id="table-item">{{ $order->status_cucian }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endif
@endsection