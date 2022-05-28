@extends('layouts.landingpage')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('/landingpage/images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My Package
                    </h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop,
                        or visit from local experts</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">

            <div class="row justify-content-start mb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Package</span>
                    <h2 class="mb-4"><strong>My Package</strong> Destination</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($datas as $item)
                            <div class="item col-xs-4 col-sm-4 col-md-4">
                                <div class="destination">
                                    <a href="{{ route('my_package_detail', ['id'=>$item['id'], 'url'=>$item['travel_url']]) }}" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url({{$item['travel_image']}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div>
                                            <div>
                                                <h3><a href="{{ route('my_package_detail', ['id'=>$item['id'], 'url'=>$item['travel_url']]) }}">{{ $item->travel_paket }}</a></h3>
                                            </div>
                                        </div>
                                        <p class="days">
                                            <span class="price">@currency($item->travel_price)</span>
                                            <span class="float-right"><i class="icon-user-o"></i> {{ $item->participant_count }} Participant</span>
                                        </p>
                                        <p class="days">
                                            <span>{{ date_format($item->created_at,'d M Y') }}</span>
                                                    @if($item->status == 0)
                                                    <span class="badge bg-secondary text-white float-right">Pending Payment</span>
                                                    @endif
                                                    @if($item->status == 1)
                                                        <span class="badge bg-warning text-white float-right">Waiting Confirmation</span>
                                                    @endif
                                                    @if($item->status == 2)
                                                        <span class="badge bg-success text-white float-right">Package Active</span>
                                                    @endif
                                                    @if($item->status == 3)
                                                        <span class="badge bg-light text-white float-right">Package Non Active</span>
                                                    @endif
                                                    @if($item->status == 4)
                                                        <span class="badge bg-danger text-white float-right">Package Rejected</span>
                                                    @endif
                                        </p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="icon-map-o"></i> {{ $item->travel_city }}</span>
                                            <span class="ml-auto"><a href="{{ route('my_package_detail', ['id'=>$item['id'], 'url'=>$item['travel_url']]) }}">Discover</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
