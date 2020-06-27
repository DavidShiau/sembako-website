@extends('layout/header')
@extends('layout/footer')

@section('title', 'Sembako Project')

@section('container')

    <!-- Jumbotron -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Sembako Terjangkau Untuk <br> Semua Masyarakat</h1>
            <p class="lead">Anda tidak perlu khawatir mencari kebutuhan pangan sembako murah, <br> semuanya bisa dicari melalui layanan kami</p>
        <a href="/" class="btn btn-primary tombol_sembako">Cari Sembako Sekarang<span class="iconify" data-inline="false" data-icon="bi:arrow-right-circle-fill"></span></a>
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
            

        <!-- end Working Space -->
    

@endsection
