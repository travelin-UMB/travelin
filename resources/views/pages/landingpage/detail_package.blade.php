@extends('layouts.landingpage')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('/landingpage/images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Detail Package
                    </h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop,
                        or visit from local experts</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">

            <div class="row justify-content-start mb-1">
                <div class="col-md-7 heading-section ftco-animate">
                    <h2 class="mb-4"><strong>{{$data['judul']}}</strong></h2>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-6 ftco-animate img about-image"
                    style="height: 400px; background-image: url({{$data['gambar']}});">
                </div>
                <div class="col-md-6 ftco-animate">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-3">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill"
                                    href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo"
                                    aria-selected="true">Detail</a>

                                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill"
                                    href="#v-pills-mission" role="tab" aria-controls="v-pills-mission"
                                    aria-selected="false">Place Destination</a>

                                <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal"
                                    role="tab" aria-controls="v-pills-goal" aria-selected="false">Itenary</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel"
                                    aria-labelledby="v-pills-whatwedo-tab">
                                    <div class="ml-3">
                                       <h3><strong>{{$data['harga']}}</strong></h3>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel"
                                    aria-labelledby="v-pills-mission-tab">
                                    <div>
                                        <ul>
                                            <li>{{$data['deskripsi']}}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-goal" role="tabpanel"
                                    aria-labelledby="v-pills-goal-tab">
                                    <div>
                                        <ul>
                                        {{$data['itenary']}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row block-9 mb-5">

          <div class="col-md-8 pr-md-5 mb-5">
            <h2 class="mb-4"><strong>Reservation Form</strong></h2>

            <form action="{{ route('reservation') }}" method="post">
            @csrf
                <input type="hidden" class="form-control" name="travel_paket" value="{{$data['judul']}}">
                <input type="hidden" class="form-control" name="travel_price" value="{{$data['harga_format']}}">
                <input type="hidden" class="form-control" name="travel_url" value="{{$paket_url}}">
                <input type="hidden" class="form-control" name="travel_image" value="{{ $data['gambar'] }}">
                <input type="hidden" class="form-control" name="travel_city" value="{{ ucfirst($city) }}">

              <div class="form-group">
                @if(!empty($user->name))
                    <input type="text" class="form-control" readonly placeholder="Your Name" name="name" value="{{ $user->name }}">
                @else
                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                @endif
              </div>
              <div class="form-group">
                @if(!empty($user->email))
                    <input type="email" class="form-control" readonly placeholder="Your Email" name="email" value="{{ $user->email }}">                
                @else
                    <input type="email" class="form-control" placeholder="Your Email" name="email">
                @endif
              </div>
              <div class="form-group">
                @if(!empty($user->email))
                    <input type="phone" class="form-control" readonly placeholder="Your Phone" name="phone" value="{{ $user->phone }}">
                @else
                    <input type="phone" class="form-control" placeholder="Your Phone" name="phone">
                @endif
              </div>
              <div class="form-group">
                <input type="number" class="form-control" required placeholder="Number of Participants" name="participant_count">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" required placeholder="Date Travel" name="travel_date">
                </div>
              <div class="form-group">
                <textarea id="" cols="30" rows="7" required class="form-control" placeholder="Note" name="note"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Submit Ticket" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>

        </div>

        <section>
        @endsection
