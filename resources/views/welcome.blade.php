@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
                <div class="text-center animate" style="margin: 0px 0px 26px;">
                <h3 class="h2logo"><img src="/img/logo.png" width="50" height="50" class="d-inline-block" alt=""> 
                <b>GAMEKU</b></h3> <deskripsi style="letter-spacing: 5px; font-size: 13px;">App Retail Top Up All Games</deskripsi>
                </div>

        <div class="col-md-12 animate">
            
                       
                    <div class="row">
                    @foreach ($gameindex as $gm)
                        <div class="col-sm-3">
                            <div class="p-3">
                            @auth
                            <span style="position: absolute;right: 14%;margin-top: 8px;background: #4fe290;padding: 2px;border-radius: 28px;z-index: 34;"><a class="btn btn-sm" href="{{$gm->gameset}}" role="button"><i class="material-icons" style="padding-top: 3px;color: #fff;">settings</i></a></span>
                            @endauth
                            <a href="{{ $gm->gamelink }}">
                                 <img class="card-img-top" src="img/{{$gm->gameimg}}" style="border-radius: 50px 0 0 0;border: 4px solid #6b2de7;" alt="Card image cap">
                                 <div class="alert2 card-body text-center alert alert-primary" style="border-radius: 0 0 50px 0;box-shadow: 0 20px 30px -14px rgba(9, 9, 16, 0.53); " ><b>{{$gm->gamename}}</b></div>
                            </a>
                            </div>
                        </div>
                    @endforeach

                    </div>

          
        </div>
    </div>
</div>

 <!---
                <div class="text-center animate" style="margin: 137px 3px;">
                <h2 class="h2logo" style="font-size:4rem;"><img src="/img/logo.png" width="90" height="90" class="d-inline-block" alt=""> 
                <b>GAMEKU</b><h2> <deskripsi style="letter-spacing: 7px; font-size: 16px; left: 39%; position: absolute; top: 100%;">App Retail Top Up All Games</deskripsi>
                </div>
--->

@endsection
