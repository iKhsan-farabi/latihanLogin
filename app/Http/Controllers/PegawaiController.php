<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    //
    public function index(){
        // ambil data dari table pegawai
    
        $pegawai = DB::table('pegawai')->get();

        // kirim data ke index

        return view('pegawai',['pegawai' => $pegawai]);
    }
}
