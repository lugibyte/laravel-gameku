<?php

namespace App\Http\Controllers;
use Session;
use App\Codm;
use Illuminate\Http\Request;

class CodmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index() {

        $codm = Codm::all();
        return view ('codm.index', ['cdindex' => $codm]); 
        }

    public function create() {
        return view ('codm.create');
    }    

    public function codmcreatex(Request $request)
    {
        $codmcreatex = new Codm;
        $codmcreatex->game = $request->game;
        $codmcreatex->denom = $request->denom;
        $codmcreatex->harga = $request->harga;
        $codmcreatex->save();
        Session::flash('sukses','Berhasil Menambahkan Data');
        return redirect()->route('codm.index');
    }

    
    public function edit(Request $request, Codm $cd)
    {
        return view('codm.edit', [ 'cdedit' => $cd ]);
    }

    public function update(Request $request, Codm $cd)
    {
        $cd->game = $request->game;
        $cd->denom = $request->denom;
        $cd->harga = $request->harga;
        $cd->save();

        Session::flash('edit','Berhasil Mengedit Data');
        return redirect()->route('codm.index');
    }

    public function destroy(Request $request, Codm $cd)
    {
        $cd->delete();

        Session::flash('hapus','Berhasil Menghapus Data');
        return redirect()->route('codm.index');
    }

    public function topup() {

        $codm = Codm::orderBy('denom', 'asc')->get();
        return view ('codm.topup', ['cdtopup' => $codm]); 
        }
}
