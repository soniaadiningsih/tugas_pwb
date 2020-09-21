<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PagesController extends Controller
{
    public function jurusan()
    {
        $jurusan = DB::table('t_jurusan')->get();
        // $jurusan = \App\jurusan::all();
        return view('jurusan/index', ['jurusan' => $jurusan]);
    }
    
    public function create()
    {
        
    }
}
