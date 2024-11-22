@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('assets/images/bg_3.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Cart</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="container">
        @if (Session::has('delete'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('delete') }}</p>
        @endif
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list table-responsive">
                        <table class="table-dark responsive-table" style="width:1300px">
                            <thead style="background-color: #c49b63; height: 60px">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($cartProducts->count() > 0)
                                    @foreach ($cartProducts as $cartProduct)
                                        <tr class="text-center" style="height: 140px">
                                            <td class="product-remove"><a
                                                    href="{{ route('cart.product.delete', $cartProduct->pro_id) }}"><span
                                                        class="icon-close"></span></a></td>

                                            <td class="image-prod"><img width="100" height="80"
                                                    src="{{ asset('assets/images/' . $cartProduct->image . '') }}"></img>
                                            </td>

                                            <td class="product-name">
                                                <h3>{{ $cartProduct->name }}</h3>
                                                <p>{{ $cartProduct->description }}</p>
                                            </td>

                                            <td class="price">{{ $cartProduct->price }}</td>

                                            <td>
                                                <div class="input-group mb-3">
                                                    <input type="number" name="quantity"
                                                        class="quantity form-control input-number" value="1"
                                                        min="1" max="100">
                                                </div>
                                            </td>

                                            <td class="total">{{ $cartProduct->price }}</td>
                                        </tr><!-- END TR-->
                                    @endforeach
                                @else
                                    <p class="alert alert-success">Anda belum memiliki produk di keranjang
                                    </p>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3 style="color:white;">Total Keranjang
                        </h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>Rp {{ $totalPrice }}.000</span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span>Rp 0</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>TOTAL</span>
                        </p>
                        <span>Rp {{ $totalPrice }}.000</span>
                    </div>
                    @if ($cartProducts->count() > 0)
                    <form method="POST" action="{{ route('prepare.checkout') }}">
                        @csrf
                        <input name="price" type="hidden" value="{{ $totalPrice }}">
                        <button type="submit" name="submit" class="btn btn-primary py-3 px-4">Lanjutkan ke
                            Check-out</button>
                    </form>
                    @else
                        <p class="text-center alert alert-success">Anda tidak dapat checkout karena tidak ada item di keranjang</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
          <h2 class="mb-4">Related products</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-3">
              <div class="menu-entry">
                      <a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
                      <div class="text text-center pt-4">
                          <h3><a href="#">Coffee Capuccino</a></h3>
                          <p>A small river named Duden flows by their place and supplies</p>
                          <p class="price"><span>$5.90</span></p>
                          <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                      </div>
                  </div>
          </div>
          <div class="col-md-3">
              <div class="menu-entry">
                      <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                      <div class="text text-center pt-4">
                          <h3><a href="#">Coffee Capuccino</a></h3>
                          <p>A small river named Duden flows by their place and supplies</p>
                          <p class="price"><span>$5.90</span></p>
                          <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                      </div>
                  </div>
          </div>
          <div class="col-md-3">
              <div class="menu-entry">
                      <a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                      <div class="text text-center pt-4">
                          <h3><a href="#">Coffee Capuccino</a></h3>
                          <p>A small river named Duden flows by their place and supplies</p>
                          <p class="price"><span>$5.90</span></p>
                          <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                      </div>
                  </div>
          </div>
          <div class="col-md-3">
              <div class="menu-entry">
                      <a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                      <div class="text text-center pt-4">
                          <h3><a href="#">Coffee Capuccino</a></h3>
                          <p>A small river named Duden flows by their place and supplies</p>
                          <p class="price"><span>$5.90</span></p>
                          <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                      </div>
                  </div>
          </div>
      </div>
      </div>
  </section> --}}
@endsection
