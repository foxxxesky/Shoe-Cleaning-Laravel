@extends('layouts.mainadmin')

@section('content')
<section>
    <div class="container pt-5 pb-5">
        <h4 class="pb-3" id="welcome">Pesanan Selesai</h4>
        <div class="row justify-content-around">
            <div class="col">
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" id="table-head">Tanggal Pesanan</th>
                            <th scope="col" id="table-head">Nama Pelanggan</th>
                            <th scope="col" id="table-head">Tanggal Pickup</th>
                            <th scope="col" id="table-head">Status Pesanan</th>
                            <th scope="col" id="table-head">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $order)
                        <tr>
                            <td class="pt-3 pb-3 align-middle" id="table-item">{{ $order->nama_produk }}</td>
                            <td class="align-middle" id="table-item">{{ $order->nama_pemesan }}</td>
                            <td class="align-middle" id="table-item">
                                {{ date('d-M-Y', strtotime($order->created_at)) }}
                            </td>
                            <td class="align-middle" id="table-item">{{ $order->status_cucian }}</td>
                            <td class="align-middle text-center">
                                <div class="row justify-content-start">
                                    <div class="col-4">
                                        <form action="/FinishDetail" method="get">
                                            <input type="hidden" name="id" value="{{ $order->id }}">
                                            <button type="submit" class="btn btn-warning">Detail</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection