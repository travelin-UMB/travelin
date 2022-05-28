@extends('layouts.landingpage')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('/landingpage/images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h3 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }" style="color: white;">Package {{$data['judul']}}
                    </h3>
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
                                       <table class="table">
                                       <tbody>
                                            <tr>
                                                <td>City</td>
                                                <td>:</td>
                                                <td>{{ $detail['travel_city'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Date Tour</td>
                                                <td>:</td>
                                                <td>{{ $detail['travel_date'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Participant</td>
                                                <td>:</td>
                                                <td>{{ $detail['participant_count'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Price</td>
                                                <td>:</td>
                                                <td>@currency($detail['travel_price'] * $detail['participant_count'])</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>
                                                    @if($detail->status == 0)
                                                        <span class="badge bg-secondary text-white">Pending Payment</span>
                                                    @endif
                                                    @if($detail->status == 1)
                                                        <span class="badge bg-warning text-white">Waiting Confirmation</span>
                                                    @endif
                                                    @if($detail->status == 2)
                                                        <span class="badge bg-success text-white">Package Active</span>
                                                    @endif
                                                    @if($detail->status == 3)
                                                        <span class="badge bg-light text-white">Package Non Active</span>
                                                    @endif
                                                    @if($detail->status == 4)
                                                        <span class="badge bg-danger text-white">Package Rejected</span>
                                                    @endif
                                                </td>
                                            </tr>
                                    
                                        </tbody>
                                        </table>
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
            <h2 class="mb-4">
                <strong>
                @if($detail->status == 0 || $detail->status == 5)
                    Process Payment
                @else
                    Detail Data Payment
                @endif
                </strong>
            </h2>

            @if($detail->status == 0)
                <div class="alert alert-warning" role="alert">
                    Please make payment to :
                    <ul>
                        <li>Bank : BCA</li>
                        <li>Account Number : 5010458279</li>
                        <li>Account Holder  : Fajar Subeki</li>
                        <li>Nominal Transfer  : @currency($detail['travel_price'] * $detail['participant_count'])</li>
                    </ul>
                    <i style="color: red;">Make payment before 1 hour and upload  payment slip in form below for package transactions remain active!</i>
                </div>
            @endif

            @if($detail->status == 1)
                <div class="alert alert-warning" role="alert">
                    Thank you for make the payment, please wait for admin confirmation
                </div>
            @endif

            @if($detail->status == 4)
                <div class="alert alert-danger" role="alert">
                    Your payment is rejected, please make payment again with data correctly
                </div>
            @endif

            <form action="{{ route('process_payment') }}" method="post" enctype="multipart/form-data">
            @csrf
                <input type="hidden" class="form-control" name="id" value="{{$detail['id']}}">

              <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" id="disabledTextInput" readonly placeholder="Your Name" name="name" value="{{ $detail['user']->name }}">
              </div>
              <div class="form-group">
                <label>Your Email</label>
                <input type="email" class="form-control" readonly placeholder="Your Email" name="email" value="{{ $detail['user']->email }}">
              </div>
              <div class="form-group">
                <label>Your Phone</label>
                <input type="phone" class="form-control" readonly placeholder="Your Phone" name="phone" value="{{ $detail['user']->phone }}">
            </div>
            <div class="form-group">
                @if($detail->status == 0 || $detail->status == 4)
                    <textarea id="" cols="30" rows="7" class="form-control" required name="note">{{ $detail['note'] }}</textarea>
                @else
                    <textarea id="" cols="30" rows="7" class="form-control" readonly placeholder="{{ $detail['note'] }}" name="note"></textarea>
                @endif
              </div>
            <div class="form-group">
                <label>Payment Slip</label>
                @if(!empty($detail['payment_slip']))
                <div class="col-md-12">
                    <img src="{{ asset('storage/images/'. $detail->payment_slip) }}" style="width: 500px;" class="img img-flud"/>   
                    @if($detail->status == 4)
                        <hr>
                        <input type="file" accept="image/jpeg,image/jpg,image/png,application/pdf" class="form-control" required name="payment_attachment">
                    @endif
                </div>
                @else
                    <input type="file" accept="image/jpeg,image/jpg,image/png,application/pdf" class="form-control" required name="payment_attachment">
                @endif
            </div>
            
              @if($detail->status == 0 || $detail->status == 4)
              <div class="form-group">
                <input type="submit" value="Send Payment Attachment" class="btn btn-primary btn-md">
              </div>
              @endif
             
            </form>
          
          </div>
        </div>

        </div>

        <section>
        @endsection
