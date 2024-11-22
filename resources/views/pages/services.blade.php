@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_6.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Services</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span><span>Services</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-services">
      <div class="container">
          <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="media d-block text-center block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-choices"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Easy to Order</h3>
              <p>Cukup pilih, pesan, dan rasakan kenikmatan yang langsung diantar ke meja Anda. Di Bella
                Vista, kami memastikan setiap pesanan Anda diproses dengan efisien, sehingga Anda bisa fokus
                menikmati suasana dan rasa yang kami tawarkan.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="media d-block text-center block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-delivery-truck"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Fastest Delivery</h3>
              <p>Di Bella Vista, kami berkomitmen untuk memberikan pengalaman yang cepat, nyaman, dan
                memuaskan.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="media d-block text-center block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-coffee-bean"></span></div>
            <div class="media-body">
              <h3 class="heading">Quality Coffee</h3>
              <p>Biji kopi terbaik yang diproses dengan cermat untuk menghasilkan rasa yang kaya dan
                konsisten. Setiap cangkir kopi disLemonade Juiceiapkan dengan perhatian penuh agar Anda
                dapat menikmati
                pengalaman kopi yang autentik dan penuh cita rasa.</p>
            </div>
          </div>    
        </div>
      </div>
      </div>
  </section>
  @endsection