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
                <div class="col-lg-3">
                    <img src="{{ asset('/img/warung.jpg') }}"  alt="content" class="img-fluid">
                    <button class="btn btn-primary btn-follow" name="btn-follow" type="submit">Ikuti</button>
                </div>

                <div class="col-lg-8">
                    <h2 class="page-title">Toko Bu Tina</h2>
                    <div class="marketplace-rating">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ti-star"></span>
                    </div>
                

                        <div class="marketplace-info-more">
                            <div class="marketplace-value">
                                <i class="ti-location-pin"></i>
                                <span class="info-title">Lokasi</span>
                                <span class="info-value">
                                SKT, Surakarta
                                </span>
                            </div>

                            <div class="marketplace-value">
                                <i class="ti-mobile"></i>
                                <span class="info-title">Telp.</span>
                                <span class="info-value">
                                    081772328445
                                </span>
                            </div>

                            <div class="marketplace-value">
                                <i class="ti-time"></i>
                                <span class="info-title">Bergabung</span>
                                <span class="info-value">
                                    11 Bulan Lalu
                                </span>
                            </div>

                            <div class="marketplace-value">
                                <i class="ti-user"></i>
                                <span class="info-title">Pengikut</span>
                                <span class="info-value">
                                    286
                                </span>
                            </div>
                        </div>

                        <div class="marketplace-info-description">
                            <span class="info-title">Deskripsi Toko</span>
                            <p>Kami buka setiap hari, dari jam 07.00 - 16.00 WIB.</p>
                        </div>

                    
                </div>
            </div>
        </section>
                
        <!-- End Content Area -->

        <!-- Main Product Area -->

        <div class="product-area">
            <h4>Produk Toko</h4>

            <div class="row product-card">
                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
            
            <div class="row product-card">
                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card-item">
                        <img src="/img/beras.png" alt="Beras" style="width:100%">
                        <div class="card-info">
                            <span class="card-title">Beras Putih Fortune</span>
                            <p class="price">Rp65.000</p>
                            <a href="/product"  style="width:100%">
                                <span class="btn btn-primary btn-add">
                                    <i class="fa fa-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            
            </div>

            <a href="/dashboard" class="act-btn">
                <span class="fa fa-cart-plus" alt="" title="Cek Keranjang Belanja Kamu!"></span>
            </a>

        </div>

        <!-- end Main Product Area -->

    </div>

    

    @include('layout/footer')

</div>
@endsection