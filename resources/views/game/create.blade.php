@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <b>Menambahkan Game</b>
                </div>

                <div class="card-body">
                <form method="POST" action="{{ route('gamecreate') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="gamename" class="col-md-4 col-form-label text-md-right">Game</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                <input id="gamename" type="text" class="form-control @error('gamename') is-invalid @enderror" name="gamename" value="{{ old('gamename') }}" placeholder="nama game" required autocomplete="name" autofocus>
                                 <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>

                                @error('gamename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="gameimg" class="col-md-4 col-form-label text-md-right">Gambar</label>

                            <div class="col-md-6">
                            <input type="file" name="gameimg">
                                @error('gameimg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gamelink" class="col-md-4 col-form-label text-md-right">Link TopUp</label>

                            <div class="col-md-6">
                                <input id="gamelink" type="text" class="form-control @error('gamelink') is-invalid @enderror" name="gamelink" value="{{ old('gamelink') }}" placeholder="game/topup" required autocomplete="name" autofocus>

                                @error('gamelink')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gameset" class="col-md-4 col-form-label text-md-right">Link Index</label>

                            <div class="col-md-6">
                                <input id="gameset" type="text" class="form-control @error('gameset') is-invalid @enderror" name="gameset" value="{{ old('gameset') }}" placeholder="game" required autocomplete="name" autofocus>

                                @error('gameset')
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
