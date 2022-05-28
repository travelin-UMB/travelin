@extends('layouts.landingpage')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('/landingpage/images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Package</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop,
                        or visit from local experts</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar ftco-animate">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find Package</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control" placeholder="Keyword search">
	                      <option value="">Select City</option>
	                      <option value="">Bali</option>
	                      <option value="">Bengkulu</option>
	                      <option value="">Lombok</option>
	                      <option value="">Yogyakarta</option>
	                      <option value="">Srilanka</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
        		</div>
          </div>
          <div class="col-lg-9">
          	<div class="row">
                @foreach ($data as $item)
                  <div class="col-md-4 ftco-animate">
                    <div class="destination">
                        <a href="{{ route('package_detail', ['url'=>$item['url_wst']]) }}" class="img img-2 d-flex justify-content-center align-items-center"
                            style="background-image: url({{$item['gambar']}});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div>
                                <div>
                                    
                                    <h3><a href="{{ route('package_detail', ['url'=>$item['url_wst']]) }}">{{$item['judul']}}</a></h3>
                                    <span class="price">{{$item['harga']}}</span>     
                                   
                                </div>

                            </div>
                            <p>{{$item['deskripsi']}}</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span class="ml-auto"><a href="{{ route('package_detail', ['url'=>$item['url_wst']]) }}">Discover</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                
        
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

@endsection
