@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <b> Nomor Order #{{ $product->id }}</b>
                   <br/>
                   {{ $product->created_at }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}">
                        @method('PUT')
                        @csrf
                       
                        <div class="form-group row">
                            <label for="game" class="col-md-4 col-form-label text-md-right">GAME</label>

                            <div class="col-md-6">
                                <input id="game" type="text" class="form-control @error('game') is-invalid @enderror" name="game" value="{{ $product->game }}" required autocomplete="name" autofocus>

                                @error('game')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idgame" class="col-md-4 col-form-label text-md-right">ID GAME</label>

                            <div class="col-md-6">
                                <input id="idgame" type="text" class="form-control @error('idgame') is-invalid @enderror" name="idgame" value="{{ $product->idgame }}" required autocomplete="name" autofocus>

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
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $product->nama }}" required autocomplete="name" autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nohp" class="col-md-4 col-form-label text-md-right">No Hp</label>

                            <div class="col-md-6">
                                <input id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ $product->nohp }}" required autocomplete="name" autofocus>

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
                                <input id="denom" type="text" class="form-control @error('denomn') is-invalid @enderror" name="denom" value="{{ $product->denom }}" required autocomplete="name" autofocus>

                                @error('denom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga </label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $product->harga }}" required autocomplete="name" autofocus>

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
                                <input id="jumlah" type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ $product->jumlah }}" required autocomplete="name" autofocus>

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
                                <input id="status" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="status" value="{{ $product->status }}" required autocomplete="name" autofocus>

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
