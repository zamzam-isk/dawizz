@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Products</h5>
          <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
          <p class="card-text" style="color:black;"> Jumlah produk: {{ $productsCount }}</p>
         
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Orders</h5>
          
          <p class="card-text" style="color:black;">Daftar pesanan: {{ $ordersCount }}</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Bookings</h5>
          
          <p class="card-text" style="color:black;">Daftar bookings: {{ $bookingsCount }}</p>
          
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Admins</h5>
          
          <p class="card-text" style="color:black;">Daftar admin: {{ $adminsCount }}</p>
          
        </div>
      </div>
    </div>
  </div>

  @endsection