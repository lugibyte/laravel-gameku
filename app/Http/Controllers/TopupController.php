<?php

namespace App\Http\Controllers;

use App\Codm;
use App\Pubgm;
use App\Freefire;
use App\Mlbb;
use App\Game;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    public function welcome() {

        $game = Game::all();
        return view ('welcome', ['gameindex' => $game]); 
        }

    public function topupcdom() {

        $codm = Codm::orderBy('denom', 'asc')->get();
        return view ('codm.topup', ['cdtopup' => $codm]); 
        }

    public function topuppubgm() {

        $pubgm = Pubgm::orderBy('denom', 'asc')->get();
        return view ('pubgm.topup', ['pgtopup' => $pubgm]); 
        }

    public function topupmlbb() {

        $mlbb = Mlbb::orderBy('denom', 'asc')->get();
        return view ('mlbb.topup', ['mltopup' => $mlbb]); 
        }
        
    public function topupff() {

        $freefire = Freefire::orderBy('denom', 'asc')->get();
        return view ('freefire.topup', ['fftopup' => $freefire]); 
        }    
}
