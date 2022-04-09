@extends('layouts.landingpage')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('landingpage/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <strong>Explore <br></strong> your amazing city</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop,
                        or visit from local experts</p>

                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-guarantee"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Best Price Guarantee</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-like"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Travellers Love Us</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-detective"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Best Travel Agent</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-support"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Our Dedicated Support</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-destination">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Featured</span>
                    <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
                        @foreach ($data as $item)
                        <div class="item">
                            <div class="destination">
                                <a href="{{ url('our_package') }}" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{$item['gambar']}});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{ url('our_package') }}">{{$item['judul']}}</a></h3>
                                    {{-- <span class="listing">15 Listing</span> --}}
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                        {{-- <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(landingpage/images/destination-2.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Yogyakarta</a></h3>
                                    <span class="listing">20 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(landingpage/images/destination-3.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Lombok</a></h3>
                                    <span class="listing">10 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(landingpage/images/destination-4.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Medan</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(landingpage/images/destination-5.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Banten</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="#" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url(landingpage/images/destination-6.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">Kalimantan</a></h3>
                                    <span class="listing">3 Listing</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Special Offers</span>
                    <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm col-md-6 col-lg ftco-animate">
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
                            <p class="days"><span>18 January 2022</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Yogyakarta</span>
                                <span class="ml-auto"><a href="{{ route('package_detail', ['city'=>'Bali', 'name'=>Str::slug('Paket Wisata Jogja 1 hari'), 'id'=>'1']) }}">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
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
                            <p class="days"><span>30 April 2022</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Bandung</span>
                                <span class="ml-auto"><a href="#">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
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
                            <p class="days"><span>30 April 2022</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Bali</span>
                                <span class="ml-auto"><a href="#">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm col-md-6 col-lg ftco-animate">
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
                            <p class="days"><span>24 April 2022</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> Lombok</span>
                                <span class="ml-auto"><a href="#">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="View All" class="btn btn-primary float-right">
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-1"></div>
                <div class="col-md-8 heading-section ftco-animate">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
                    <div class="row ftco-animate">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel">
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img mb-5"
                                            style="background-image: url(landingpage/images/person_1.jpg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text ml-md-4">
                                            <p class="mb-5">Far far away, behind the word mountains, far from the
                                                countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <p class="name">Dennis Green</p>
                                            <span class="position">Guest from italy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img mb-5"
                                            style="background-image: url(landingpage/images/person_2.jpg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text ml-md-4">
                                            <p class="mb-5">Far far away, behind the word mountains, far from the
                                                countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <p class="name">Dennis Green</p>
                                            <span class="position">Guest from London</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img mb-5"
                                            style="background-image: url(landingpage/images/person_3.jpg)">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                        </div>
                                        <div class="text ml-md-4">
                                            <p class="mb-5">Far far away, behind the word mountains, far from the
                                                countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <p class="name">Dennis Green</p>
                                            <span class="position">Guest from Philippines</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-1 pb-3">
                <div class="col-md-6 heading-section ftco-animate">
                    <span class="subheading">Submit your suggestion four improve our apps</span>
                    <h2 class="mb-4"><strong>Guest</strong> Book</h2>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-md-6 pr-md-5">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Phone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>      
            </div>
            </div>
        </div>
    </section>
@endsection
