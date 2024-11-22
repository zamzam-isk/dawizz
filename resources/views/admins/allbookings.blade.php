@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col">
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
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Bookings</h5>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama depan</th>
                <th scope="col">Nama belakang</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Waktu Pemesanan</th>
                <th scope="col">No.Handphone</th>
                <th scope="col">Catatan Pelanggan</th>
                <th scope="col">Status</th>
                <th scope="col">Edit status</th>

                <th scope="col">Tanggal dibuat</th>
                <th scope="col">Hapus</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $booking->first_name }}</td>
                  <td>{{ $booking->last_name }}</td>
                  <td>{{ $booking->date }}</td>
                  <td>{{ $booking->time }}</td>
                  <td>{{ $booking->phone }}</td>
                  
                  <td>{{ $booking->message }}</td>
                  
                  <td>{{ $booking->status }}</td>
                  <td><a href="{{ route('edit.booking', $booking->id) }}" class="btn btn-warning text-white text-center ">Edit Status</a></td>

                  <td>{{ $booking->created_at }}</td>


                  <td><a href="{{ route('delete.booking', $booking->id) }}" class="btn btn-danger text-white text-center ">hapus</a></td>
                </tr>
                @endforeach
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
@endsection