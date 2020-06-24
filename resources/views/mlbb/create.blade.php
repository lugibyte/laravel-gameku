@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <b>Menambahkan Denom</b>
                </div>

                <div class="card-body">
                <form method="POST" action="{{ route('mlbbcreate') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="game" class="col-md-4 col-form-label text-md-right">Game</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                <select id="game" class="custom-select" name="game" value="{{ old('game') }}" required>
                                <option value="MOBILE LEGENDS">MOBILE LEGENDS</option>
                                </select>

                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>

                                @error('game')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="denom" class="col-md-4 col-form-label text-md-right">Denom</label>

                            <div class="col-md-6">
                                <input id="denom" type="number" class="form-control @error('Denom') is-invalid @enderror" name="denom" value="{{ old('denom') }}" required autocomplete="name" autofocus>

                                @error('denom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="name" autofocus>

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
