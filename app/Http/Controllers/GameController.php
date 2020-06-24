<?php

namespace App\Http\Controllers;

use App\Game;
use Session;
use Illuminate\Http\Request;


class GameController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 


    public function index() {
        $game = Game::all();
        return view ('game.index', ['gameindex' => $game]); 
        }    

    public function create() {
        return view ('game.create');
    }
    
    public function createx(Request $request)
    {
        
        $this->validate($request, [
			'gameimg' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'gamename' => 'required',
            'gamelink' => 'required',
            'gameset' => 'required',
        ]);
        
        $file = $request->file('gameimg');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'img';
        $file->move($tujuan_upload,$nama_file);
        
        Game::create([
			'gameimg' => $nama_file,
            'gamename' => $request->gamename,
            'gamelink' => $request->gamelink,
            'gameset' => $request->gameset,
		]);
    
        Session::flash('sukses','Berhasil Menambahkan Data');
        return redirect()->route('game.index');
    }

    public function edit(Request $request, Game $gm) {

        return view ('game.edit', ['gameindex' => $gm]); 
        }    

        public function update(Request $request, Game $gm)
        {
            $gm->gamename = $request->gamename;
            $gm->gameimg = $request->gameimg;
            $gm->gameset = $request->gameset;
            $gm->gamelink = $request->gamelink;
            $gm->save();
    
            Session::flash('edit','Berhasil Mengedit Data');
            return redirect()->route('game.index');
        }    

        public function destroy(Request $request, Game $gm)
        {
            $gm->delete();
    
            Session::flash('hapus','Berhasil Menghapus Data');
            return redirect()->route('game.index');
        }    

}
