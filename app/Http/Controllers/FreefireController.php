<?php

namespace App\Http\Controllers;

use App\Freefire;
use App\Product;
use Session;
use Illuminate\Http\Request;

class FreefireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index() {

    $freefire = Freefire::orderBy('id','desc')->get();
    return view ('freefire.index', ['ffindex' => $freefire]); 
    }

    public function create()
    {
        return view('freefire.create');
    }

    public function ffcreatex(Request $request)
    {
        $ffcreatex1 = new Freefire;
        $ffcreatex1->game = $request->game;
        $ffcreatex1->denom = $request->denom;
        $ffcreatex1->harga = $request->harga;
        $ffcreatex1->save();
        Session::flash('sukses','Berhasil Menambahkan Data');
        return redirect()->route('freefire.index');
    }

    public function edit(Request $request, Freefire $ff)
    {
        return view('freefire.edit', [ 'ffedit' => $ff ]);
    }

    public function update(Request $request, Freefire $ff)
    {
        $ff->game = $request->game;
        $ff->denom = $request->denom;
        $ff->harga = $request->harga;
        $ff->save();

        Session::flash('edit','Berhasil Mengedit Data');
        return redirect()->route('freefire.index');
    }

    public function destroy(Request $request, Freefire $ff)
    {
        $ff->delete();

        Session::flash('hapus','Berhasil Menghapus Data');
        return redirect()->route('freefire.index');
    }

    public function topup() {

        $freefire = Freefire::orderBy('denom', 'asc')->get();
        return view ('freefire.topup', ['fftopup' => $freefire]); 
        }
    

}
