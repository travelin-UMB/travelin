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
                    <h2 class="mb-4"><strong>Featured </strong> Destination</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
                        @foreach ($data as $item)
                        <div class="item">
                            <div class="destination">
                                <a href="{{ route('our_package', ['url'=>$item['url']]) }}" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{$item['gambar']}});">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{ route('our_package', ['url'=>$item['url']]) }}">{{$item['judul']}}</a></h3>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                    <a href="{{ url('featured_destination') }}" class="btn btn-primary float-right">View All</a>
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
        <div class="container">
            <div class="row">
                @foreach ($data_wst as $item)
                <div class="col-md-3 ftco-animate">
                    <div class="destination">
                        <a href="" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url({{$item['gambar_wst']}});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div>
                                <div>
                                    <h3><a href="">{{$item['judul_wst']}}</a></h3>
                                    <span class="price">{{$item['price_wst']}}</span>
                                </div>

                            </div>
                            {{ $item['dest_wst'] }}
                            <hr>
                            <p class="bottom-area d-flex">
                                <span class="ml-auto"><a href="{{ route('package_detail', ['url'=>$item['url_wst']]) }}">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
        
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
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
            <div class="col-md-6 pr-md-5">
                <form action="{{ route('process_guestbook') }}" method="post">
                    @csrf
                    <div class="form-group">
                        @if(!empty($user->name))
                            <input type="text" class="form-control" name="name" placeholder="Your Name" value="{{ $user->name }}">
                        @else
                            <input type="text" class="form-control" required name="name" placeholder="Your Name">
                        @endif
                    </div>
                    <div class="form-group">
                        @if(!empty($user->email))
                            <input type="text" class="form-control" name="email" placeholder="Your Email" value="{{ $user->email }}">
                        @else
                            <input type="text" class="form-control" required name="email" placeholder="Your Email">
                        @endif
                    </div>
                    <div class="form-group">
                        @if(!empty($user->phone))
                            <input type="text" class="form-control" name="phone" placeholder="Your Phone" value="{{ $user->phone }}">
                        @else
                            <input type="text" class="form-control" required name="phone" placeholder="Your Phone">
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" required name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea id="" cols="30" rows="7" required name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-primary py-3 px-5">
                        Simpan
                    </button>
                </form>      
            </div>
            </div>
        </div>
    </section>
@endsection
