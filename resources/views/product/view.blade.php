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
                        <div class="form-group row">
                            <label for="game" class="col-md-6 col-form-label text-md-right">GAME</label>

                            <div class="col-md-6">
                            <label for="game" class="col-md-9 col-form-label text-md-left">{{ $product->game }}</label>
                                @error('game')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idgame" class="col-md-6 col-form-label text-md-right">ID GAME</label>

                            <div class="col-md-6">
                            <label for="idgame" class="col-md-9 col-form-label text-md-left">{{ $product->idgame }}</label>
                                @error('idgame')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-md-6 col-form-label text-md-right">Nick Name</label>

                            <div class="col-md-6">
                            <label for="nama" class="col-md-9 col-form-label text-md-left">{{ $product->nama }}</label>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nohp" class="col-md-6 col-form-label text-md-right">No Hp</label>

                            <div class="col-md-6">
                            <label for="nohp" class="col-md-9 col-form-label text-md-left">{{ $product->nohp }}</label>
                                @error('nohp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="denom" class="col-md-6 col-form-label text-md-right">Denom</label>

                            <div class="col-md-6">
                            <label for="denom" class="col-md-9 col-form-label text-md-left">{{ $product->denom }}</label>
                                @error('denom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-6 col-form-label text-md-right">Harga </label>

                            <div class="col-md-6">
                            <label for="harga" class="col-md-9 col-form-label text-md-left">{{ $product->harga }}</label>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-6 col-form-label text-md-right">Jumlah</label>

                            <div class="col-md-6">
                            <label for="jumlah" class="col-md-9 col-form-label text-md-left">{{ $product->jumlah }}</label>
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-primary" href="{{ route('products.index', $product->id) }}">
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
