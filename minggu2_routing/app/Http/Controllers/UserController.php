<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $nama = "Admin";
    	return view('dashboard',['nama' => $nama]);
    }

    public function form(){

    	return view('form');

    }
    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
    
}
