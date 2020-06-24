@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                   Profile <b>{{ $user->email }}</b>
                   <br/>
                   Dibuat pada {{ $user->created_at }}
                </div>
                <div class="card-body">
                        <div class="form-group row">
                            <label for="username" class="col-md-6 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                            <label for="username" class="col-md-9 col-form-label text-md-left">{{ $user->username }}</label>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-6 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                            <label for="name" class="col-md-9 col-form-label text-md-left">{{ $user->name }}</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-6 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                            <label for="lastname" class="col-md-9 col-form-label text-md-left">{{ $user->lastname }}</label>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                            <label for="email" class="col-md-9 col-form-label text-md-left">{{ $user->email }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-primary" href="{{ route('user.index') }}">
                                Keluar
                                </a>
                            </div>
                        </div>
                               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
