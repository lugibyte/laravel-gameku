@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Daftar Akun
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $u)
                            <tr>
                                <th scope="row">{{ $u->id }}</th>
                                <td>{{ $u->username }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                <a class="btn btn-sm" href="{{ route('users.view', $u->id) }}" role="button"><i class="material-icons">visibility</i></a>
                                <td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
