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
          <h5 class="card-title mb-4 d-inline">Messages</h5>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Pesan</th>
                <th scope="col">Tanggal dibuat</th>
                <th scope="col">Hapus Pesan</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $message->your_name }}</td>
                  <td>{{ $message->email }}</td>
                  
                  <td>{{ $message->message }}</td>

                  <td>{{ $message->created_at }}</td>


                  <td><a href="{{ route('delete.message', $message->id) }}" class="btn btn-danger text-white text-center ">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
@endsection