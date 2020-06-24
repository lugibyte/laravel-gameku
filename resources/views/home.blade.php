@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                    <img src="https://fonts.gstatic.com/s/i/materialicons/verified/v5/24px.svg?download=true" width="23" height="23" class="d-inline-block align-top" alt="" >   Selamat  <b>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</b>, Anda Berhasil Login di website <b>GAMEKU</b> !!
                    </div>
                </div>


                       
                        <div class="row">
                            
                            <div class="col-sm-4 gamecol">
                                <div class="card">
                                <a href="{{ route('products.index') }}">
                                <div class="alert2 card-body text-center alert alert-primary">
                                <img src="https://fonts.gstatic.com/s/i/materialicons/library_books/v7/24px.svg?download=true" width="23" height="23" class="d-inline-block align-top" alt="" style="filter: contrast(4) invert(1);">  <b>{{$count2}}</b> PESANAN
                                </div>
                                 <img class="card-img-top" src="http://localhost:8000/img/undraw_product_tour_foyt1.png" alt="Card image cap">
                                  <div class="card-body">
                                 <a class="btn btn-primary" href="{{ route('products.index') }}"><b>Lihat</b></a>
                                </div>
                                </a>
                                </div>
                            </div>   
                            
                            <div class="col-sm-4 gamecol">
                            <div class="card">
                            <a href="{{ route('user.index') }}">
                            <div class="alert2 card-body text-center alert alert-primary">
                            <img src="https://fonts.gstatic.com/s/i/materialicons/account_circle/v6/24px.svg" width="23" height="23" class="d-inline-block align-top" alt="" style="filter: contrast(4) invert(1);">    <b>{{$count3}}</b> MEMBER
                                </div>
                                 <img class="card-img-top" src="http://localhost:8000/img/undraw_team_spirit_hrr41.png" alt="Card image cap">
                                  <div class="card-body">
                                  <a class="btn btn-primary" href="{{ route('user.index') }}"><b>Lihat</b></a>
                                </div>
                                </a>
                                </div>
                            </div>

                            <div class="col-sm-4 gamecol">
                            <div class="card">
                            <a href="{{ route('game.index') }}">
                            <div class="alert2 card-body text-center alert alert-primary">
                            <img src="https://fonts.gstatic.com/s/i/materialicons/sports_esports/v5/24px.svg?download=true" width="23" height="23" class="d-inline-block align-top" alt="" style="filter: contrast(4) invert(1);">    <b>{{$count4}}</b> GAME
                                </div>
                                 <img class="card-img-top" src="http://localhost:8000/img/undraw_video_game_night_8h8m.png" alt="Card image cap">
                                  <div class="card-body">
                                  <a class="btn btn-primary" href="{{ route('game.index') }}"><b>Lihat</b></a>
                                </div>
                                </a>
                                </div>
                            </div>
                        
                        </div>
                    


                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
