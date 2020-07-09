@extends('layout/main')


@section('title', 'Toko Bu Tina')


@section('content')

<div class="body-content">

    @include('layout/header')

    <div class="container">

        <ul class="breadcrumb">
            <li><a href="/dashboard">Halaman Utama</a></li>
            <li>Toko Bu Tina</li>
        </ul>

        <!-- Content Area -->
        <section>
            <div class="row marketplace-content">
                <div class="col-lg-5">
                    <img src="{{ asset('/img/warung.jpg') }}"  alt="content" class="img-fluid">
                </div>

                <div class="col-lg-6">
                    <h2 class="page-title">Toko Bu Tina</h2>
                

                        <div class="product-info-more">
                            <div class="product-value">
                                <span class="info-title">Lokasi</span>
                                <span class="info-value">
                                SKT, Surakarta
                                </span>
                            </div>

                            <div class="product-value">
                                <span class="info-title">Distributor</span>
                                <span class="info-value">
                                <a target="_blank" href="/dashboard">
                                Toko Bu Tina    </a>
                                </span>
                            </div>
                        </div>

                        <div class="product-info-description">
                            FORTUNE Beras Premium 5kg merupakan beras persembahan SANIA yang dihasilkan dari padi pilihan dengan olahan terbaik. Beras berkualitas tinggi bersih dan sangat enak. Beras ini tanpa menggunakan pemutih sehingga aman di konsumsi keluarga Anda setiap hari.
                        </div>

                        <div class="product-info-price">
                            Rp65.000
                        </div>

                        <button class="btn btn-primary btn-input-bag" name="btn-input-bag" type="submit">Masukkan Keranjang</button>
                        <button class="btn btn-primary btn-favourite" name="btn-favourite" type="favourite">
                            <i class="ti-heart"></i>
                        </button>
                    
                </div>
            </div>
        </section>
                
        <!-- End Content Area -->

    </div>

    @include('layout/footer')

</div>
@endsection