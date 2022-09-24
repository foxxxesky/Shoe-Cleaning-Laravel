@extends('layouts.main')

@section('content')
<!-- Jumbotron -->
<section id="home">
    <div id="jumbotron">
        <!-- Alert Login Admin -->
        @if(session()->has('loginAdmin'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('loginAdmin') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="container pt-5 pb-5">
            <div class="row justify-content-around">
                <div class="col-7">
                    <div class="pt-5">
                        <h4 id="text-jumbotron">Shoe Cleaning Siap Membersihkan Sepatu Anda!</h4>
                        <p id="desc-jumbotron">Percayakan sepatu kesukaan anda kepada kami!</p>
                    </div>
                    <a id="button-jumbotron" class="btn btn-light" href="/Service">Bersihkan Sekarang!</a>
                </div>
                <div class="col-5">
                    <img id="img-jumbotron" src="images/char.png" alt="">
                </div>
            </div>
        </div>
        <div class="pb-5"></div>
        <div class="pb-3"></div>
    </div>
</section>
<!-- Jumbotron -->

<!-- Layanan Kami -->
<section id="service">
    <h4 class="text-center pt-5" id="text-layanankami">Layanan Kami</h4>
    <div class="text-center">
        <img src="images/line.png" alt="">
    </div>
    <p class="text-center pt-2 pb-2" id="desc-layanan">Kami telah mencuci lebih dari 1000 pasang sepatu, dan akan
        terus bertambah... <br>
        Berikut jasa yang kami tawarkan</p>
    <div class="container pb-5">
        <div class="row justify-content-around">
            @if (count($products) === 0)
            <p class="text-center pt-3 fw-bold text-danger">Belum Ada Produk!</p>
            <p class="text-center">Silahkan Hubungi <b>Admin Shoe Cleaning!</b></p>
            @else
            @foreach ($products as $index => $product)
            <div class="col-3">
                <img id="img-layanan" src="{{ asset('storage/' . $product->gambar) }}" alt="" width='292px'
                    weight='383px'>
                <h5 class="text-center pt-3" id="item-layanan">{{ $product->nama_produk }}</h5>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- Layanan Kami -->

<!-- Bagaimana Kami Bekerja -->
<section>
    <div class="container pb-5">
        <h4 class="text-center pt-5" id="text-carakerja">Bagaimana <span id="slip-titlecarakerja">Kami</span> Bekerja
        </h4>
        <div class="text-center">
            <img src="images/line.png" alt="">
        </div>
        <p class="text-center pt-2 pb-2" id="desc-carakerja">Simpan uang dan waktu, dengan gratis jemput di rumah atau
            kantor anda
        </p>
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/order.png" alt="">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja">Order - </span>Choose
                    our<br>service then order</p>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/pickup.png" alt="">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja">We Pickup - </span>The
                    driver<br>picks up your shoes</p>
            </div>
            <div class="col-4">
                <div class="text-center">
                    <img id="img-carakerja" src="images/deliver.png" alt="">
                </div>
                <p class="text-center pt-3" id="item-carakerja"><span id="slip-color-carakerja">We Deliver - </span>Your
                    shoes are<br>finished, ready to wear
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Bagaimana Kami Bekerja -->

<!-- Testimoni -->
<section id="testi">
    <h4 class="text-center pt-5" id="text-testimoni">Testimoni</h4>
    <div class="text-center">
        <img src="images/line.png" alt="">
    </div>
    <div class="container pt-3 pb-5">
        <div class="row justify-content-around">
            <div class="col-4">
                <img id="img-testimoni" src="images/testimoni.png" alt="">
            </div>
            <div class="col-6 pt-5">
                <h4 id="text-title-testimoni">Pelanggan Kami Mengatakan</h4>
                <p id="desc-testimoni">“Website pembersih sepatu membantu saya dalam aktivitas sehari-hari, bahkan saya
                    dapat melakukan
                    aktivitas dengan sangat cepat, terima kasih pembersih sepatu”</p>
                <h4 class="pt-2" id="person">Felicia</h4>
                <p id="location">Bojongsoang, Bandung</p>
            </div>
        </div>
    </div>
</section>
<!-- Testimoni -->

<!-- Tentang Kami -->
<section id="about">
    <div class="container pt-5 pb-5">
        <h4 class="text-center" id="text-tentang">Tentang Kami</h4>
        <div class="text-center pb-3">
            <img src="images/line.png" alt="">
        </div>
        <p class="text-center" id="desc-tentang">Berawal dari mata kuliah Web Application Development, Manajemen Rantai
            Pasok dan masalah yang ada. ShoeCleaning bertujuan untuk membantu mempermudah aktivitas orang-orang setiap
            harinya. shoecleaning didirikan oleh 6 mahasiswa jenius syarif, hadi, ryan, mubeth, harun dan icha yang
            mempunyai
            motivasi tinggi untuk membuat perubahan disekitarnya, berharap inovasi yang dibuat dapat membantu orang
            banyak. sehingga kedepannya dapat memotivasi mahasiswa lainnya untuk menciptakan inovasi yang lebih baik
            lagi.</p>

        <p class="text-center pt-2" id="kisahkami">Baca Kisah Kami</p>
    </div>
</section>
<!-- Tentang Kami -->

<!-- Our Team -->
<section>
    <div class="container pt-5 pb-5">
        <h4 class="text-center" id="text-team">Tim Kami</h4>
        <div class="text-center pb-5">
            <img src="images/line.png" alt="">
        </div>
        <!-- Row 1 -->
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/ryan.png" alt="">
                </div>
                <h4 id="name" class="text-center">Ryandi Yorsinda Anggoro</h4>
                <p id="role" class="text-center">UI/UX Designer</p>
            </div>
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/syarif.png" alt="">
                </div>
                <h4 id="name" class="text-center">Syariif Abdurrahman Bathik</h4>
                <p id="role" class="text-center">Project Manager</p>
            </div>
            <div class="col-4">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/mubeth.png" alt="">
                </div>
                <h4 id="name" class="text-center">Mubeth Praditya</h4>
                <p id="role" class="text-center">Web Developer</p>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row justify-content-around pt-5">
            <div class="col-5">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/hadi.png" alt="">
                </div>
                <h4 id="name" class="text-center">Hadi Noerddien Jayanto</h4>
                <p id="role" class="text-center">Data Engineer</p>
            </div>
            <div class="col-5">
                <div class="text-center pb-3">
                    <img id="img-team" src="images/harun.png" alt="">
                </div>
                <h4 id="name" class="text-center">Hasrinaldi Hasniman Harun</h4>
                <p id="role" class="text-center">System Analyst</p>
            </div>
        </div>
    </div>
</section>
<!-- Our Team -->
@endsection