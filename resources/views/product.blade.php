@extends('layout/main')


@section('title', 'Beras Putih Fortune 5Kg')


@section('content')

<div class="body-content position-relative">

    @include('layout/header')
    
    <div class="container">

        <ul class="breadcrumb">
            <li><a href="/dashboard">Halaman Utama</a></li>
            <li>Beras Putih Fortune</li>
        </ul>

        <!-- Content Area -->
        <section>
            <div class="row product-content">
                <div class="col-lg-5">
                    <img src="{{ asset('/img/beras.png') }}"  alt="content" class="img-fluid">
                </div>

                <div class="col-lg-6">
                    <h2 class="page-title">Beras Putih Fortune 5Kg</h2>
                        <div class="product-rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
                            <span class="ti-star"></span>
                            <span class="ti-star"></span>
                        </div>

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
                                <a target="_blank" href="/marketplace">
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


        <!-- Product Detail Area -->

        <section>
        <div class="row product-data">
            <div class="col-lg-5">
                <img src="{{ asset('/img/warung.jpg') }}"  alt="warungbutina" class="img-fluid">
                <a href="/marketplace" class="btn btn-primary btn-check" name="btn-check" type="check">Kunjungi Toko</a>
            
            </div>
            <div class="col-lg-6">

                    <table class="product-data-table">
                    <h5>Informasi Produk</h5>
                    
                    <tbody>
                        <tr>
                            <th class="col label" scope="row">Nama Toko</th>
                            <td class="col data" data-th="Merchant Name">Toko Bu Tina</td>
                        </tr>
                        
                        <tr>
                            <th class="col label" scope="row">Berat (Kg)</th>
                            <td class="col data" data-th="Berat (Kg)">5.0</td>
                        </tr>
                        
                        <tr>
                            <th class="col label" scope="row">Isi Kemasan</th>
                            <td class="col data" data-th="Isi Kemasan">0</td>
                        </tr>
                        
                        <tr>
                            <th class="col label" scope="row">Merek</th>
                            <td class="col data" data-th="Merek">Fortune</td>
                        </tr>
                        <tr>
                            <th class="col label" scope="row">Satuan</th>
                            <td class="col data" data-th="Satuan">BAL</td>
                        </tr>
                    </tbody>
                    </table>
                    
            </div>
        </div>
    </section>

    <!-- End Product Detail Area -->

    <a href="/dashboard" class="act-btn">
		<span class="fa fa-cart-plus" alt="" title="Cek Keranjang Belanja Kamu!"></span>
	</a>

    </div>
    @include('layout/footer')

</div>
@endsection