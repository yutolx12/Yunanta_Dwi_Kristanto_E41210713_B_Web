<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index($nama){
    	return view('dashboard',['nama' => $nama]);
        // return $nama;
    }
}
