<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
	} 
	
    public function index()
    {
    	// mengambil data dari table pegawai
    	$users = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('user/index',['users' => $users]);
 
	}

	public function view(Request $request, User $userx)
    {
        return view('user.view', [ 'user' => $userx ]);
    }
	
	
}
