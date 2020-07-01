@extends('layout/main')

@section('title', 'Sembako Project')

@section('content')

<div class="body-content">

    <!-- Navbar Khusus Landing Page -->
            
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a href="/" class="navbar-brand"><img src="{{ asset('/img/logo-big.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item btn tombol_masuk_biru" href="/login">Masuk</a>
                        <a class="nav-item btn tombol_daftar_putih" href="/daftar">Daftar</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- end Navbar -->

    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Sembako Terjangkau Untuk <br> Semua Masyarakat</h1>
            <p class="lead">Anda tidak perlu khawatir mencari kebutuhan pangan sembako murah, <br> semuanya bisa dicari melalui layanan kami</p>
        <a href="/dashboard" class="btn btn-primary tombol_sembako">Cari Sembako Sekarang<span class="iconify" data-inline="false" data-icon="bi:arrow-right-circle-fill"></span></a>
        </div>
    </div>

    <!-- end Jumbotron -->



    <!-- Container  -->
    <div class="container">
        <!-- Info Panel -->

        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="{{ asset('/img/frame1.png') }}" alt="frame1">
                        <h4>lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="col-lg">
                        <img src="{{ asset('/img/frame2.png') }}" alt="frame2">
                        <h4>lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="col-lg">
                        <img src="{{ asset('/img/frame3.png') }}" alt="frame3">
                        <h4>lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- end Info Panel -->

    </div>
    <!-- end Container -->

    <!-- Working Space -->
    <section>
        <div class="row workingspace">
            <div class="col-lg-6">
                <img src="{{ asset('/img/background.png') }}"  alt="workingspace" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h3>Tentang Kami</h3>
                <center>
                    <img src="{{ asset('/img/stars.png') }}" alt="stars">
                </center>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            </div>
        </div>
    </section>
            
    <!-- end Working Space -->
    @include('layout/footer')
</div>     

@endsection




