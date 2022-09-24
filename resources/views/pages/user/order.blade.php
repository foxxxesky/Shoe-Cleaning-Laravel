@extends('layouts.main')

@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <h4 id="order-title">Checkout</h4>
                <p class="pt-3 pb-5" id="order-desc">Maksimalkan penjemputan sepatu anda dengan cepat!</p>
                <form action="{{ route('checkouts') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $data->id }}">
                    <div class="form">
                        <!-- Nama Product -->
                        <div class="mb-4">
                            <label for="nama_produk" id="order-text" class="form-label pb-2">Nama Produk</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                                name="nama_produk" value="{{ Request::get('service') }}" readonly>
                            @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Jumlah -->
                        <div class="mb-4">
                            <label for="jumlah" id="order-text" class="form-label pb-2">Jumlah Sepatu</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror"
                                name="jumlah" value="{{ Request::get('jumlah') }}" readonly>
                            @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="mb-4">
                            <label for="harga" id="order-text" class="form-label pb-2">Harga</label>
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">Rp</span>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ $price }}" readonly>
                            </div>
                            @error('harga')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Pemesan -->
                        <div class="mb-4">
                            <label for="nama_pemesan" id="order-text" class="form-label pb-2">Nama Pemesan</label>
                            <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror"
                                name="nama_pemesan" value="{{ $data->first_name .' ' .$data->last_name }}">
                            @error('nama_pemesan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- No_HP -->
                        <div class="mb-4">
                            <label for="no_hp" id="order-text" class="form-label pb-2">No HP</label>
                            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                value="{{ $data->no_hp }}">
                            @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Tanggal Ambil -->
                        <div class="mb-4">
                            <label for="tanggal_pickup" id="order-text" class="form-label pb-2">Tanggal Pickup</label>
                            <input type="datetime-local"
                                class="form-control @error('tanggal_pickup') is-invalid @enderror" name="tanggal_pickup"
                                value="{{ old('tanggal_pickup') }}">
                            @error('tanggal_pickup')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Alamat Penjemputan -->
                        <div class="mb-4">
                            <label for="alamat_penjemputan" id="order-text" class="form-label pb-2">Alamat
                                Penjemputan</label>
                            <textarea class="form-control @error('alamat_penjemputan') is-invalid @enderror"
                                id="alamat_penjemputan" name="alamat_penjemputan"
                                rows="3">{{ old('alamat_penjemputan') }}</textarea>
                            @error('alamat_penjemputan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Alamat Antar -->
                        <div class="mb-4">
                            <label for="alamat_pengiriman" id="order-text" class="form-label pb-2">Alamat
                                Pengantaran</label>
                            <textarea class="form-control @error('alamat_pengiriman') is-invalid @enderror"
                                id="alamat_pengiriman" name="alamat_pengiriman"
                                rows="3">{{ old('alamat_pengiriman') }}</textarea>
                            @error('alamat_pengiriman')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Pembayaran -->
                        <div class="mb-4">
                            <label for="alamat_antar" id="order-text" class="form-label pb-2">Metode
                                Pembayaran</label><br>

                            <!-- LinkAja -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pembayaran" id="linkaja"
                                    value="LinkAja">
                                <label class="form-check-label" for="linkaja"><img src="images/linkaja.png"
                                        alt=""></label>
                            </div>

                            <!-- OVO -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pembayaran" id="ovo" value="OVO">
                                <label class="form-check-label" for="ovo"><img src="images/ovo.png" alt=""></label>
                            </div>

                            <!-- gopay -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pembayaran" id="gopay" value="Gopay">
                                <label class="form-check-label" for="gopay"><img src="images/gopay.png" alt=""></label>
                            </div>

                            <!-- cod -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pembayaran" id="cod" value="COD">
                                <label class="form-check-label" for="cod"><img src="images/cod.png" alt=""></label>
                            </div>
                        </div>

                        <!-- Catatan -->
                        <div class="mb-4">
                            <label for="catatan" id="order-text" class="form-label pb-2">Catatan</label>
                            <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan"
                                name="catatan" rows="3">{{ old('catatan') }}</textarea>
                        </div>

                        <!-- Button -->
                        <div class="mb-4">
                            <button id="submit-checkout" type="submit" name="submit-checkout" class="btn">Pesan
                                Sekarang</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection