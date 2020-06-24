<?php

namespace App\Http\Controllers;
use Session;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
       /* $productsx2 = Product::orderBy('id', 'desc')->get(); */
        $productsx1 = DB::Table('products')
        ->orderBy('id', 'desc')
        ->paginate(10); 
        return view('product.index', [ 'productsx2' => $productsx1 ]);
    }

    public function create()
    {
        return view('product.create');
    }

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
        Session::flash('sukses','Berhasil Menambahkan Data, Silahkah Proses');
        return redirect()->route('products.index');
    }

    public function edit(Request $request, Product $product)
    {
        return view('product.edit', [ 'product' => $product ]);
    }

    public function view(Request $request, Product $product)
    {
        return view('product.view', [ 'product' => $product ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->game = $request->game;
        $product->idgame = $request->idgame;
        $product->nama = $request->nama;
        $product->nohp = $request->nohp;
        $product->denom = $request->denom;
        $product->harga = $request->harga;
        $product->jumlah = $request->jumlah;
        $product->status = $request->status;
        $product->save();

        Session::flash('edit','Berhasil Mengedit Data');
        return redirect()->route('products.index');
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();

        Session::flash('hapus','Berhasil Menghapus Data');
        return redirect()->route('products.index');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$productx = DB::table('products')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
            return view('product.index', [ 'productsx2' => $productx ]);
 
    }
    
    
}
