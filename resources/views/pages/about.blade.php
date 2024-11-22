@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">About Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('assets/images/about_1.jpg') }});"></div>
        <div class="one-half ftco-animate">
            <div class="overlap">
                <div class="heading-section ftco-animate ">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Our Story</h2>
                </div>
                <div>
                    <p>Di Coffe Dawizz Bellavista, kami percaya bahwa kopi adalah pengalaman yang sempurna ketika disajikan
                        dalam harmoni dengan keindahan alam. Terletak di lokasi yang dikelilingi pemandangan menakjubkan,
                        kami hadir untuk membawa Anda pada sebuah perjalanan rasa yang tak terlupakan, di mana setiap
                        tegukan kopi membawa kedamaian dan inspirasi.

                        Kami memilih dengan cermat biji kopi terbaik, yang diproses dan disajikan oleh barista berpengalaman
                        dengan penuh dedikasi. Setiap cangkir kopi yang kami sajikan adalah perpaduan rasa yang memikat,
                        selaras dengan suasana damai dan pemandangan menawan di Bellavista.

                        Di sini, setiap kunjungan adalah lebih dari sekadar menikmati secangkir kopi, ini adalah kesempatan
                        untuk melepaskan penat, meresapi keindahan sekeliling, dan menciptakan kenangan yang membawa
                        ketenangan dan kebahagiaan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Customers Says</h2>
                    <p>Berikut adalah beberapa testimoni dari pelanggan yang telah merasakan pengalaman istimewa di kafe kami:</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                @foreach ($reviews as $review)
                    <div class="col-md align-self-sm-end ftco-animate">
                        <div class="testimony">
                            <blockquote>
                                <p>&ldquo;{{ $review->review }}.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex mt-4">
                                {{-- <div class="image mr-3 align-self-center">
                        <img src="{{ asset('assets/images/person_1.jpg') }}" alt=""> 
                      </div> --}}
                                <div class="name align-self-center">{{ $review->name }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <section class="ftco-section">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-6 pr-md-5">
                  <div class="heading-section text-md-right ftco-animate">
                      <span class="subheading">Discover</span>
                      <h2 class="mb-4">Our Menu</h2>
                      <p class="mb-4">Temukan pengalaman kopi terbaik di Bella Vista. Nikmati pilihan kopi premium,
                          hidangan lezat, dan suasana yang nyaman—semua dirancang untuk menghadirkan kepuasan di setiap
                          kunjungan Anda.</p>
                      <p><a href="{{ route('products.menu') }}" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="menu-entry">
                              <a href="#" class="img" style="background-image: url({{ asset('assets/images/menu-1.jpg') }});"></a>
                          </div>Lemonade Juice
                      </div>
                      <div class="col-md-6">
                          <div class="menu-entry mt-lg-4">
                              <a href="#" class="img" style="background-image: url({{ asset('assets/images/menu-2.jpg') }});"></a>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="menu-entry">
                              <a href="#" class="img" style="background-image: url({{ asset('assets/images/menu-3.jpg') }});"></a>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="menu-entry mt-lg-4">
                              <a href="#" class="img" style="background-image: url({{ asset('assets/images/menu-4.jpg') }});"></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{ asset('assets/images/bg_2.jpg') }});"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="row">
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18 text-center">
                          <div class="text">
                              <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                              <strong class="number" data-number="10">0</strong>
                              <span>Coffee Branches</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18 text-center">
                          <div class="text">
                              <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                              <strong class="number" data-number="50">0</strong>
                              <span>Number of Awards</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18 text-center">
                          <div class="text">
                              <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                              <strong class="number" data-number="10567">0</strong>
                              <span>Happy Customer</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                      <div class="block-18 text-center">
                          <div class="text">
                              <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                              <strong class="number" data-number="25">0</strong>
                              <span>Staff</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
