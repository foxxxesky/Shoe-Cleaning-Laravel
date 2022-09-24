@extends('layouts.main')

@section('content')

<section section style="background-image: url('images/background.png');">
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-9">
                <h4 id="invoice-title" class="pb-3">ShoeCleaning <span id="span-invoice">Invoice</span></h4>
                <hr style="color: #504a4a; height: 2px;">
                <table>
                    <tbody>
                        <tr>
                            <td class="col-7 pt-2 pb-2" id="table-left">Nama Pembeli</td>
                            <td id="table-right">{{ $orders->nama_pemesan }}</td>
                        </tr>
                        <tr>
                            <td class="col-7 pt-2 pb-2" id="table-left">Nomor HP</td>
                            <td id="table-right">{{ $orders->no_hp }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Nama Produk</td>
                            <td id="table-right">{{ $orders->nama_produk }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Tanggal Pemesanan</td>
                            <td id="table-right">{{ date('d-M-Y', strtotime($orders->created_at)) }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Tanggal Pickup</td>
                            <td id="table-right">{{ date('d-M-Y H:i:s', strtotime($orders->tanggal_pickup)) }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Alamat Penjemputan</td>
                            <td id="table-right">{{ $orders->alamat_penjemputan }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Alamat Pengiriman</td>
                            <td id="table-right">{{ $orders->alamat_pengiriman }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Jumlah Sepatu</td>
                            <td id="table-right">{{ $orders->jumlah }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Harga Satuan</td>
                            <td id="table-right">{{$orders -> harga}}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Total Harga</td>
                            <td id="table-right">{{ $orders->harga }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Metode Pembayaran</td>
                            <td id="table-right">{{ $orders->pembayaran }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Ulasan</td>
                            <td id="table-right">{{ $orders->ulasan }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pt-3"></div>
                <hr style="color: #504a4a; height: 2px;">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-5"></div>
            <div class="col-4">
                <p class="text-center" id="kasir">Kasir</p>
                <div class="text-center">
                    <img src="images/ttd.png" id="ttd" alt="">
                </div>
                <p class="text-center" id="kasir">Felicia Ningrum</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-9">
                <p id="bottom-text-invoice">Invoice ini sah dan diproses oleh komputer dan diproses langsung oleh
                    admin<br>
                    Silahkan hubungi <span id="span-bottom-invoice">ShoeCleaning Help</span> apabila anda membutuhkan
                    bantuan.</p>
            </div>
        </div>
</section>

@endsection