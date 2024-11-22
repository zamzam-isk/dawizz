@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_8.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Contact Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4" style="color:white">Contact Information</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span></span> Jl. Raya Pengasinan, RT.01/RW.06, Pengasinan, Kec. Sawangan, Kota Depok, Jawa
                                Barat 16518</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Phone:</span> <a href="tel://1234567920">0821-1056-8914</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">inforumahgemilang1@gmail.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Website:</span> <a href="#">dawizzbellavista.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">

                    <form action="{{ route('contact.messages') }}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" name="your_name">
                                </div>
                                @if ($errors->has('your_name'))
                                    <p class="alert alert-success">{{ $errors->first('your_name') }}</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" name="email">
                                </div>
                                @if ($errors->has('email'))
                                    <p class="alert alert-success">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                        @if ($errors->has('subject'))
                            <p class="alert alert-success">{{ $errors->first('subject') }}</p>
                        @endif
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"
                                name="message"></textarea>
                        </div>
                        @if ($errors->has('message'))
                            <p class="alert alert-success">{{ $errors->first('message') }}</p>
                        @endif
                        <div class="form-group">
                            <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
