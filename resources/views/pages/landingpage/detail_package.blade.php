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
                    <span class="badge rounded-pill bg-primary text-white mt-1">Bandung</span>
                    <h2 class="mb-4"><strong>Paket wisata Jogja 1 hari</strong></h2>
                </div>
            </div>

            <div class="row d-md-flex mb-5">
                <div class="col-md-6 ftco-animate img about-image"
                    style="background-image: url(/landingpage/images/bg_2.jpg);">
                </div>
                <div class="col-md-6 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-4">
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
                                    <div>
                                        <table class="table">
                                            <tbody>
                                                <tr style="border-top: hidden;">
                                                    <td>City</td>
                                                    <td>:</td>
                                                    <td>Yogyakarta</td>
                                                </tr>
                                                <tr style="border-top: hidden;">
                                                    <td>Price</td>
                                                    <td>:</td>
                                                    <td>Rp. 2.500.000</td>
                                                </tr>
                                                <tr style="border-top: hidden;">
                                                    <td>Date Event</td>
                                                    <td>:</td>
                                                    <td>10 January 2023</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel"
                                    aria-labelledby="v-pills-mission-tab">
                                    <div>
                                        <ol>
                                            <li>Desa Ubud</li>
                                            <li>Kebun Raya Bali</li>
                                            <li>Tegalalang Residence</li>
                                            <li>Pantai Pandawa</li>
                                            <li>Klingking Beach</li>
                                            <li>Nusa Penida</li>
                                        </ol>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-goal" role="tabpanel"
                                    aria-labelledby="v-pills-goal-tab">
                                    <div>
                                        <ul>
                                            <li>Penjemputan di Bandara, Stasiun atau Hotel oleh pemandu kami.</li>
                                            <li>Melanjutkan perjalanan paket wisata jogja 1 hari mengunjungi Tebing Breksi
                                                yang merupakan tebing karst dan mempunyai ukiran wayang.</li>
                                            <li>Lanjut naik ke kawasan Candi Ijo yang lokasinya tidak terlalu jauh dari
                                                Tebing Breksi untuk menikmati panorama alam yang sangat cantik dilihat dari
                                                puncak Candi Ijo.</li>
                                            <li>Selanjutnya mengunjungi Goa Pindul untuk Cave Tubing Goa Pindul yang akan
                                                menyusuri sungai bawah tanah di dalam Goa Pindul.</li>
                                            <li>Setelah itu, meluncur ke Pantai Sadranan dan Pantai Ngandong yang mempunyai
                                                hamparan pasir putih dan panorama sunset yang menarik.</li>
                                            <li>Perjalanan kembali ke Yogyakarta dan singgah di Bukit Bintang untuk makan
                                                malam maupun menikmati hamparan lampu perkotaan yang terlihat sangat cantik
                                                dan menawan.</li>
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

            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="phone" class="form-control" placeholder="Your Phone">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Number of Participants">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Note"></textarea>
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
