@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});   background-size: cover;
  background-repeat: no-repeat;
  background-position: center;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Bella Vista</h1>
                        <p class="mb-4 mb-md-5">Temukan kehangatan, kenyamanan, dan kelezatan yang tak terlupakan di setiap
                            sudut kami.
                            Nikmati secangkir kopi istimewa, hidangan lezat, dan atmosfer yang menenangkan—semua untuk Anda.
                        </p>
                        <p><a href="{{ route('products.menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                            <a href="{{ route('products.menu') }}"
                                class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
                        <p class="mb-4 mb-md-5">Selamat menikmati waktu Anda, dan semoga hari Anda semakin indah di Bella
                            Vista! 🌿☕💫
                        </p>
                        <p><a href="{{ route('products.menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                            <a href="{{ route('products.menu') }}"
                                class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
                        <p class="mb-4 mb-md-5">Selamat menikmati waktu Anda, dan semoga hari Anda semakin indah di Bella
                            Vista! ☕
                        </p>
                        <p><a href="{{ route('products.menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                            <a href="{{ route('products.menu') }}"
                                class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="container">
        @if (Session::has('date'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('date') }}</p>
        @endif
    </div>
    <div class="container">
        @if (Session::has('booking'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('booking') }}</p>
        @endif
    </div>
    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex align-items-xl-end">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text" style="color:white">
                                <h3>0812-1072-3399</h3>
                                <p>Hubungi Admin BellaVista</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text" style="color:white">
                                <h3>Jl. Raya Pengasinan, RT.01/RW.06, Pengasinan</h3>
                                <p> Sawangan, Kota Depok, Jawa Barat 16518, Indonesia</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text" style="color:white">
                                <h3>Open Monday-Friday</h3>
                                <p>8:00am - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="book p-4">
                    <h3>Book a Table</h3>
                    <form action="{{ route('booking.tables') }}" method="POST" class="appointment-form">
                        @csrf
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                            @if ($errors->has('firstname'))
                                <p class="alert alert-success">{{ $errors->first('firstname') }}</p>
                            @endif
                            <div class="form-group ml-md-4">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            @if ($errors->has('lastname'))
                                <p class="alert alert-success">{{ $errors->first('lastname') }}</p>
                            @endif
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" name="date" class="form-control appointment_date"
                                        placeholder="Date">
                                </div>
                                @if ($errors->has('date'))
                                    <p class="alert alert-success">{{ $errors->first('date') }}</p>
                                @endif
                            </div>
                            <div class="form-group ml-md-4">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-ios-clock"></span></div>
                                    <input type="text" name="time" class="form-control appointment_time">
                                </div>
                            </div>
                            @if ($errors->has('time'))
                                <p class="alert alert-success">{{ $errors->first('time') }}</p>
                            @endif

                            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"
                                class="form-control appointment_time">


                            <div class="form-group ml-md-4">
                                <input type="number" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            @if ($errors->has('phone'))
                                <p class="alert alert-success">{{ $errors->first('phone') }}</p>
                            @endif
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea id="" name="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            @if ($errors->has('message'))
                                <p class="alert alert-success">{{ $errors->first('message') }}</p>
                            @endif
                            <div class="form-group ml-md-4">
                                <input type="submit" name="submit" value="Book" class="btn btn-white py-3 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url({{ asset('assets/images/about.jpg') }});"></div>
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
                        ketenangan dan kebahagiaan.</p>
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
                            <span class="flaticon-coffee-bean"></span>
                        </div>
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

    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 pr-md-5">
                    <div class="heading-section text-md-right ftco-animate">
                        <span class="subheading">Discover</span>
                        <h2 class="mb-4" >Our Menu</h2>
                        <p class="mb-4">Temukan pengalaman kopi terbaik di Bella Vista. Nikmati pilihan kopi premium,
                            hidangan lezat, dan suasana yang nyaman—semua dirancang untuk menghadirkan kepuasan di setiap
                            kunjungan Anda.</p>
                        <p><a href="{{ route('products.menu') }}"
                                class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-1.jpg') }});"></a>
                            </div>Dawizz
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-2.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-3.jpg') }});"></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu-entry mt-lg-4">
                                <a href="#" class="img"
                                    style="background-image: url({{ asset('assets/images/menu-4.jpg') }});"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url({{ asset('assets/images/bg_2.jpg') }});" data-stellar-background-ratio="0.5">
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

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Discover</span>
                    <h2 class="mb-4">Best selling special menu</h2>
                    <p>Dari Aroma Kopi yang Memikat hingga Hidangan yang Mengenyangkan Menu Favorit Kami Selalu Jadi Pilihan
                        Utama...</p>
                </div>
            </div>
            <div class="row">

                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="menu-entry">
                            <a href="#" class="img"
                                style="background-image: url({{ asset('assets/images/' . $product->image . '') }});"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="{{ route('product.single', $product->id) }}">{{ $product->name }}</a></h3>
                                <p>{{ $product->description }}</p>
                                <p class="price"><span>{{ $product->price }}</span></p>
                                <p><a href="{{ route('product.single', $product->id) }}"
                                        class="btn btn-primary btn-outline-primary">Show</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-1.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-2.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-3.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center"
                        style="background-image: url({{ asset('assets/images/gallery-4.jpg') }});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img" id="ftco-testimony"
        style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Testimony</span>
                    <h2 class="mb-4">Customers Says</h2>
                    <p>Berikut adalah beberapa testimoni dari pelanggan yang telah merasakan pengalaman istimewa di kafe
                        kami:</p>
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
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
