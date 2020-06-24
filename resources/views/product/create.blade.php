@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <b>Menambahkan Order Top Up</b>
                </div>

                <div class="card-body">
                <form method="POST" action="{{ route('storexx') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="game" class="col-md-4 col-form-label text-md-right">Game</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                <select id="game" class="custom-select" name="game" value="{{ old('game') }}" required>
                                <option value="">Open this select menu</option>
                                <option value="FREE FIRE">FREE FIRE</option>
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
                            <label for="idgame" class="col-md-4 col-form-label text-md-right">Id Game</label>

                            <div class="col-md-6">
                                <input id="idgame" type="number" class="form-control @error('idgame') is-invalid @enderror" name="idgame" value="{{ old('idgame') }}" required autocomplete="name" autofocus>

                                @error('idgame')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">Nick Name</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="name" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nohp" class="col-md-4 col-form-label text-md-right">No Hp Pembeli </label>

                            <div class="col-md-6">
                                <input id="nohp" type="number" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" required autocomplete="name" autofocus>

                                @error('nohp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="denom" class="col-md-4 col-form-label text-md-right">Denom</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                <select id="denom" class="custom-select" name="denom" value="{{ old('denom') }}" required>
                                <option value="">Open this select menu</option>
                                <option value="50">50 Diamond</option>
                                <option value="70">70 Diamond</option>
                                <option value="140">140 Diamond</option>
                                <option value="210">210 Diamond</option>
                                <option value="355">355 Diamond</option>
                                <option value="720">720 Diamond</option>
                                </select>

                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>

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

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">Jumlah</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                <select id="jumlah" class="custom-select" name="jumlah" value="{{ old('jumlah') }}" required>
                                <option value="">Open this select menu</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                </select>

                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>

                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                <select id="status" class="custom-select" name="status" value="{{ old('status') }}" required>
                                <option value="Proses">Proses</option>
                                </select>

                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>

                                @error('status')
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
