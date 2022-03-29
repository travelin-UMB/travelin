@extends('layouts.landingpage')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('landingpage/images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My Package</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop,
                        or visit from local experts</p>
                </div>
            </div>
        </div>
    </div>

<section class="ftco-section ftco-degree-bg">
      <div class="container">
        
      <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Package</span>
                    <h2 class="mb-4"><strong>My Package</strong> Destination</h2>
                </div>
            </div>

      <div class="row">
			  <div class="col-md-4 ftco-animate">
                    <div class="destination">
                        <a href="{{ route('package_detail', ['city'=>'Bali', 'name'=>Str::slug('Paket Wisata Jogja 1 hari'), 'id'=>'1']) }}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(landingpage/images/destination-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div>
                                <div>
                                    <h3><a href="{{ route('package_detail', ['city'=>'Bali', 'name'=>Str::slug('Paket Wisata Jogja 1 hari'), 'id'=>'1']) }}">Paket Wisata Jogja 1 hari</a></h3>
                                    <span class="price">Rp. 240.000</span>
                                </div>

                            </div>
                            <p>Malioboro, Candi Prambanan, Pantai Parangtritis, Alun alun kidul</p>
                            <p class="days"><span>18 January 2022</span>
                                <span class="badge rounded-pill bg-info text-white float-right mt-1">Active</span>
                            </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Yogyakarta</span>
                                <span class="ml-auto"><a href="{{ route('package_detail', ['city'=>'Bali', 'name'=>Str::slug('Paket Wisata Jogja 1 hari'), 'id'=>'1']) }}">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(landingpage/images/destination-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div>
                                <div>
                                    <h3><a href="#">Paket Bandung 2 hari</a></h3>
                                    <span class="price">Rp. 440.000</span>
                                </div>

                            </div>
                            <p>Dusun Bambu, Rancaupas, Gedung Sate</p>
                            <p class="days"><span>30 April 2022</span>
                                <span class="badge rounded-pill bg-info text-white float-right mt-1">Active</span>
                            </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Bandung</span>
                                <span class="ml-auto"><a href="#">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(landingpage/images/destination-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div>
                                <div>
                                    <h3><a href="#">Paket Bali 5 hari</a></h3>
                                    <span class="price">Rp. 800.000</span>
                                </div>

                            </div>
                            <p>Desa Ubud, Pantai Kuta, Nusa Penida</p>
                            <p class="days"><span>30 April 2022</span>
                            <span class="badge rounded-pill bg-info text-white float-right mt-1">Active</span>
                            </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Bali</span>
                                <span class="ml-auto"><a href="#">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url(landingpage/images/destination-1.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div>
                                <div>
                                    <h3><a href="#">Paket Lombok 7 hari</a></h3>
                                    <span class="price">Rp. 1.800.000</span>
                                </div>

                            </div>
                            <p>Gili Trawangan, Mandalika, Waerebo</p>
                            <p class="days"><span>24 April 2022</span>
                            <span class="badge rounded-pill bg-info text-white float-right mt-1">Active</span>
                            </p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Lombok</span>
                                <span class="ml-auto"><a href="#">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
          	</div>
          	
</div>
</section>

@endsection