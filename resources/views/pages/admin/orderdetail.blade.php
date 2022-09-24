@extends('layouts.mainadmin')

@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-9">
                <h4 id="invoice-title" class="pb-3">Order Detail</h4>
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
                            <td id="table-left" class="col-7 pt-2 pb-2">Total Harga</td>
                            <td id="table-right">{{ $orders->harga }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Metode Pembayaran</td>
                            <td id="table-right">{{ $orders->pembayaran }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-2 pb-2">Catatan</td>
                            <td id="table-right">{{ $orders->catatan }}</td>
                        </tr>
                        <tr>
                            <td id="table-left" class="col-7 pt-3 pb-3">Status Cucian</td>
                            <td id="table-right">
                                <form action="{{ route('updateOrder',$orders->id) }}" method="post">
                                    @csrf
                                    <select class="form-select" id="table-right" name="status_cucian">
                                        <option selected>{{ $orders->status_cucian }}</option>
                                        <option value="Akan Dijemput">Akan Dijemput</option>
                                        <option value="Diambil">Diambil</option>
                                        <option value="Dalam Proses Pembersihan">Dalam Proses Pembersihan</option>
                                        <option value="Selesai">Selesai</option>
                                    </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="pt-3"></div>
                <hr style="color: #504a4a; height: 2px;">
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-1">
                <a href="/HomeAdmin" class="btn btn-warning">Back</a>
            </div>
            <div class="col-3">
                <button class="btn" id="update-button">Update</button>
                </form>
            </div>
        </div>
</section>
@endsection