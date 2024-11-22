@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col">
            <div class="container">
                @if (Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('success') }}</p>
                @endif
            </div>
            <div class="container">
                @if (Session::has('delete'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('delete') }}</p>
                @endif
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Produk BellaVista</h5>
                    <a href="{{ route('create.products') }}" class="btn btn-primary mb-4 text-center float-right">Create
                        Products</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama produk</th>
                                <th scope="col">Foto produk</th>
                                <th scope="col">Harga produk</th>
                                <th scope="col">Jenis produk</th>
                                <th scope="col">Hapus produk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{ asset('assets/images/' . $product->image . '') }}" width="70"
                                            height="70"> </td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->type }}</td>
                                    <td><a href="{{ route('delete.products', $product->id) }}" class="btn btn-danger  text-center ">delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
