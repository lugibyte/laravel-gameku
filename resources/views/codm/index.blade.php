@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-header">
                    <div class="float-left">
                    <h6 style="letter-spacing:2px;"><b>DAFTAR HARGA GAME COD MOBILE</b></h>
                    </div>
                  @auth  
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('codm.create') }}" role="button"> <img src="https://fonts.gstatic.com/s/i/materialicons/add_box/v6/24px.svg?download=true" width="30" height="30" class="d-inline-block" alt="" style="filter: contrast(4) invert(1);"> Tambah</a>
                    </div>
                @endauth
                </div>

                <div class="card-body">
                @if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
                @if ($message = Session::get('edit'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
                @if ($message = Session::get('hapus'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif

                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Game</th>
                            <th scope="col">Denom</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($cdindex->count() > 0)
                        @foreach ($cdindex as $cd)
                            <tr>
                                <th scope="row">{{ $cd->id }}</th>
                                <td>{{ $cd->game }}</td>
                                <td>{{ $cd->denom }} CP</td>
                                <td>{{ $cd->harga }}</td> 
                                <td>
                                <a class="btn btn-sm" href="{{ route('codm.edit', $cd->id) }}" role="button"><i class="material-icons green">settings</i></a>
                                <a class="btn btn-sm" href="{{ route('codm.destroy', $cd->id) }}" role="button"
                                            onclick="event.preventDefault();
                                            document.getElementById('destroy-cd-{{$cd->id}}').submit();">
                                        <i class="material-icons red">delete</i>
                                    </a>
                                    <form id="destroy-cd-{{$cd->id}}" action="{{ route('codm.destroy', $cd->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>     
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <div class="alert alert-danger" role="alert">
                            Tidak ada data
                        </div>
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
