<?php

namespace App\Http\Controllers;
use Session;
use App\Product;
use App\Freefire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeliController extends Controller
{
    public function storex(Request $request)
    {
        $productx = new Product;
        $productx->game = $request->game;
        $productx->idgame = $request->idgame;
        $productx->nama = $request->nama;
        $productx->nohp = $request->nohp;
        $productx->denom = $request->denom;
        $productx->harga = $request->harga;
        $productx->jumlah = $request->jumlah;
        $productx->status = $request->status;
        $productx->save();

        /*$productx = Product::create(['harga' => $request->harga]);*/
        
        Session::flash('sukses','Sukses, Orderan Anda Akan Di Proses');
        return redirect()->back();
    }
}
