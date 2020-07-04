
@extends('layout/main')


@section('title', 'Dashboard')


@section('content')

<div class="body-content">

    @include('layout/header')

    <div class="carousel" data-flickity='{ "autoPlay": true, "wrapAround": true }'>
		<div class="carousel-item">
			<div class="carousel-info">
				<h1>Warung Pak Iman</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				<a href="">Beli Sekarang</a>
			</div>
			<div class="carousel-image">
				<img src="" alt="" />
			</div>
		</div>
		<div class="carousel-item">
			<div class="carousel-info">
				<h1>Warung Bu Tina</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				<a href="">Beli Sekarang</a>
			</div>
			<div class="carousel-image">
				<img src="" alt="" />
			</div>
		</div>
		<div class="carousel-item">
			<div class="carousel-info">
				<h1>Warung Bu Siti</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				<a href="">Beli Sekarang</a>
			</div>
			<div class="carousel-image">
				<img src="" alt="" />
			</div>
		</div>
	</div>

    <div class="popular">
		<h2>Paling Banyak Dicari</h2>
		<div class="popular-carousel" data-flickity='{ "autoPlay": true, "prevNextButtons": false, "wrapAround": true }'>
			<div class="single-item">
				<div class="img" style="background-image: url('/img/beras.png');"></div>
				<div class="info">
					<h3>Beras Putih Fortune</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP65.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/tepung.jpg');"></div>
				<div class="info">
					<h3>Tepung Beras Rosebrand</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP12.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/minyak.jpg');"></div>
				<div class="info">
					<h3>Minyak Goreng SunCo</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP25.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/gula.jpg');"></div>
				<div class="info">
					<h3>Gula Pasir <br> Gulaku</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP10.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/margarine.jpg');"></div>
				<div class="info">
					<h3>Blue Band Margarin</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP28.000</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <div class="card-kategori">
        <h2>Kategori</h2>
        <div class="card-brand">
            <div class="single-card" style="background-image: url('/img/7.jpg');"></div>
            <div class="single-card" style="background-image: url('/img/8.jpg');"></div>
            <div class="single-card" style="background-image: url('/img/9.jpg');"></div>
            <div class="single-card" style="background-image: url('/img/8.jpg');"></div>
            <div class="single-card" style="background-image: url('/img/9.jpg');"></div>
            <div class="single-card" style="background-image: url('/img/7.jpg');"></div>
        </div>
    </div>


    <div class="deals">
		<div class="deals-inner">
			<div class="timer">
				<h1>Deals of the day</h1>
				<h3 class="values">0.00</h3>
			</div>
			<div class="deals-carousel" data-flickity='{ "autoPlay": true,"wrapAround": true, "pageDots": false }'>
				<div class="single-item">
					<div class="img" style="background-image: url('/img/margarine.jpg');"></div>
					<div class="info">
						<h3>Margarin Blue Band</h3>
						<p>This is a description for the item</p>

						<div class="item-flex">
							<div class="rating">
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
							</div>

							<div class="price">
								<h4>RP28.000</h4>
							</div>
						</div>
					</div>
				</div>

				<div class="single-item">
					<div class="img" style="background-image: url('/img/beras.png');"></div>
					<div class="info">
						<h3>Beras Putih Fortune</h3>
						<p>This is a description for the item</p>

						<div class="item-flex">
							<div class="rating">
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
							</div>

							<div class="price">
								<h4>RP65.000</h4>
							</div>
						</div>
					</div>
				</div>

				<div class="single-item">
					<div class="img" style="background-image: url('img/minyak.jpg');"></div>
					<div class="info">
						<h3>Minyak Goreng SunCo</h3>
						<p>This is a description for the item</p>

						<div class="item-flex">
							<div class="rating">
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
							</div>

							<div class="price">
								<h4>RP25.000</h4>
							</div>
						</div>
					</div>
				</div>

				<div class="single-item">
					<div class="img" style="background-image: url('img/gula.jpg');"></div>
					<div class="info">
						<h3>Gula Pasir <br> Gulaku </h3>
						<p>This is a description for the item</p>

						<div class="item-flex">
							<div class="rating">
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
								<span class="ti-star"></span>
							</div>

							<div class="price">
								<h4>RP10.000</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    

    <div class="popular">
		<h2>Harga Spesial</h2>
		<div class="popular-carousel" data-flickity='{ "autoPlay": true, "prevNextButtons": false, "wrapAround": true }'>
			<div class="single-item">
				<div class="img" style="background-image: url('/img/beras.png');"></div>
				<div class="info">
					<h3>Beras Putih Fortune</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP65.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/tepung.jpg');"></div>
				<div class="info">
					<h3>Tepung Beras Rosebrand</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP12.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/minyak.jpg');"></div>
				<div class="info">
					<h3>Minyak Goreng SunCo</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP25.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/gula.jpg');"></div>
				<div class="info">
					<h3>Gula Pasir <br> Gulaku</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP10.000</h4>
						</div>
					</div>
				</div>
			</div>

			<div class="single-item">
				<div class="img" style="background-image: url('/img/margarine.jpg');"></div>
				<div class="info">
					<h3>Blue Band Margarin</h3>
					<p>This is a description for the item</p>

					<div class="item-flex">
						<div class="rating">
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
							<span class="ti-star"></span>
						</div>

						<div class="price">
							<h4>RP28.000</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    @include('layout/footer')

</div>
@endsection

