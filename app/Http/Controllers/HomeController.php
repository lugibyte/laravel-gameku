<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = Product::count();
        $countx = User::count();
        $countxx = Game::count();

        return view('home')
        ->with('count4',$countxx)
        ->with('count3',$countx)
        ->with('count2', $count);

    }
}
