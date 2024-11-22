@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
            <div class="container">
                @if (Session::has('update'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('update') }}</p>
                @endif
            </div>
            <div class="container">
                @if (Session::has('delete'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('delete') }}</p>
                @endif
            </div>
          <h5 class="card-title mb-4 d-inline">Orders</h5>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama depan</th>
                <th scope="col">Nama belakang</th>
                {{-- <th scope="col">city</th>
                <th scope="col">state</th> --}}
                <th scope="col">No.Handphone</th>
                <th scope="col">Alamat</th>
                <th scope="col">Total bayar</th>
                <th scope="col">Status</th>
                <th scope="col">Ubah status</th>
                <th scope="col">Hapus daftar</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($allOrders as $order )
                    
                <tr>
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td>{{ $order->first_name }}</td>
                  <td>{{ $order->last_name }}</td>
                  {{-- <td>{{ $order->city }}</td>
                  <td>{{ $order->state }}</td> --}}
                  
                  <td>{{ $order->phone }}</td>
                  <td>{{ $order->address }}</td>
                  <td>Rp {{ $order->price }}.000</td>
  
                  <td>{{ $order->status }}</td>
                  <td><a href="{{ route('edit.order', $order->id) }}" class="btn btn-warning  text-white text-center ">Ubah status</a></td>
                  <td><a href="{{ route('delete.order', $order->id) }}" class="btn btn-danger  text-center ">hapus</a></td>
                </tr>
                @endforeach
              
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>


@endsection