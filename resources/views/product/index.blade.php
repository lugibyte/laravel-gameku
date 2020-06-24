@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-header">
                    <div class="float-left">
                    <h6 style="letter-spacing:2px;"><b>DAFTAR ORDER</b></h>
                    </div>
                    
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('products.create') }}" role="button"> <img src="https://fonts.gstatic.com/s/i/materialicons/add_box/v6/24px.svg?download=true" width="30" height="30" class="d-inline-block" alt="" style="filter: contrast(4) invert(1);"> Tambah</a>
                    </div>
                    
                    <form action="/products/cari" method="GET" class="form-inline my-2 my-lg-0 float-right" style="margin-right: 48px;">
                            <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari Nick"  value="{{ old('cari') }}" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit"><img src="https://fonts.gstatic.com/s/i/materialicons/search/v6/24px.svg?download=true" width="30" height="30" class="d-inline-block" alt="" style="filter: contrast(4) invert(1);"></button>
                    </form>

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
                            <th scope="col">Id Game</th>
                            <th scope="col">Nick</th>
                            <th scope="col">No HP Pembeli</th>
                            <th scope="col">Denom</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($productsx2->count() > 0)
                        @foreach ($productsx2 as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->game }}</td>
                                <td>{{ $product->idgame }}</td>
                                <td>{{ $product->nama }}</td>
                                <td>{{ $product->nohp }}</td>
                                <td>{{ $product->denom }}</td>
                                <td>{{ $product->harga }}</td>
                                <td>{{ $product->jumlah }}</td>
                                <td>{{ $product->status }}</td>
                                <td>
                                    <a class="btn btn-sm" href="{{ route('products.view', $product->id) }}" role="button"><i class="material-icons">visibility</i></a>
                                    <a class="btn btn-sm" href="{{ route('products.edit', $product->id) }}" role="button"><i class="material-icons green">settings</i></a>
                                    
                                    <a class="btn btn-sm" href="{{ route('products.destroy', $product->id) }}" role="button"
                                            onclick="event.preventDefault();
                                            document.getElementById('destroy-product-{{$product->id}}').submit();">
                                        <i class="material-icons red">delete</i>
                                    </a>

                                    <form id="destroy-product-{{$product->id}}" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: none;">
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

                    <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <z class="page-item"><z class="page-link" href="">Halaman Ke {{ $productsx2->currentPage() }} dari  {{ $productsx2->lastPage() }}</z></z>
                        <li class="page-item"><a class="page-link" href="{{ $productsx2->previousPageUrl() }}">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="{{ $productsx2->nextPageUrl() }}">Next</a></li>
                        <li class="page-item"><a class="page-link" href="?page={{ $productsx2->lastPage() }}">Last Page</a></li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
