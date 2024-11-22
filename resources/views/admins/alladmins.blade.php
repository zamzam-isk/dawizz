@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col">
            <div class="container">
                @if (Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('success') }}</p>
                @endif
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Admins</h5>
                    <a href="{{ route('create.admins') }}" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Admin</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($allAdmins as $admin)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
