<?php

namespace App\Http\Controllers;

use Session;
use App\Pubgm;
use Illuminate\Http\Request;

class PubgmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index() {

        $pubgm = Pubgm::all();
        return view ('pubgm.index', ['pubgmindex' => $pubgm]); 
        }

    public function create() {
        return view ('pubgm.create');
    }    

    public function pubgmcreatex(Request $request)
    {
        $pubgmcreatex = new Pubgm;
        $pubgmcreatex->game = $request->game;
        $pubgmcreatex->denom = $request->denom;
        $pubgmcreatex->harga = $request->harga;
        $pubgmcreatex->save();
        Session::flash('sukses','Berhasil Menambahkan Data');
        return redirect()->route('pubgm.index');
    }

    
    public function edit(Request $request, Pubgm $pg)
    {
        return view('pubgm.edit', [ 'pubgmedit' => $pg ]);
    }

    public function update(Request $request, Pubgm $pg)
    {
        $pg->game = $request->game;
        $pg->denom = $request->denom;
        $pg->harga = $request->harga;
        $pg->save();

        Session::flash('edit','Berhasil Mengedit Data');
        return redirect()->route('pubgm.index');
    }

    public function destroy(Request $request, Pubgm $pg)
    {
        $pg->delete();

        Session::flash('hapus','Berhasil Menghapus Data');
        return redirect()->route('pubgm.index');
    }

    public function topup() {

        $pubgm = Pubgm::orderBy('denom', 'asc')->get();
        return view ('pubgm.topup', ['pgtopup' => $pubgm]); 
        }

}
