<?php

namespace App\Http\Controllers;

use Session;
use App\Mlbb;
use Illuminate\Http\Request;

class MlbbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index() {

        $mlbb = Mlbb::all();
        return view ('mlbb.index', ['mlbbindex' => $mlbb]); 
        }

    public function create() {
        return view ('mlbb.create');
    }    

    public function mlbbcreatex(Request $request)
    {
        $mlbbcreatex = new Mlbb;
        $mlbbcreatex->game = $request->game;
        $mlbbcreatex->denom = $request->denom;
        $mlbbcreatex->harga = $request->harga;
        $mlbbcreatex->save();
        Session::flash('sukses','Berhasil Menambahkan Data');
        return redirect()->route('mlbb.index');
    }

    public function edit(Request $request, Mlbb $ml)
    {
        return view('mlbb.edit', [ 'mlbbedit' => $ml ]);
    }

    public function update(Request $request, Mlbb $ml)
    {
        $ml->game = $request->game;
        $ml->denom = $request->denom;
        $ml->harga = $request->harga;
        $ml->save();

        Session::flash('edit','Berhasil Mengedit Data');
        return redirect()->route('mlbb.index');
    }

    public function destroy(Request $request, Mlbb $ml)
    {
        $ml->delete();

        Session::flash('hapus','Berhasil Menghapus Data');
        return redirect()->route('mlbb.index');
    }

    public function topup() {

        $mlbb = Mlbb::orderBy('denom', 'asc')->get();
        return view ('mlbb.topup', ['mltopup' => $mlbb]); 
        }

}
