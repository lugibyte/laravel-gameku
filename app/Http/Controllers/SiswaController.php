<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index()
    {
        return 'Halo, dari Controller';
    }

    function detail($nama = 'Orang Asing')
    {
        return 'Halo, ' . $nama;
    }
}
