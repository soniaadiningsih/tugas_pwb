<?php
 
namespace App\Http\Controllers;
 
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\DB;
 
class JurusanController extends Controller
{
    public function jurusan()
    {
        $jurusan = User::all();

        return view('jurusan', ['jurusan'=>$jurusan]);
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'nis' => 'required',
           'nama' => 'required',
           'email' => 'required',
           'jurusan' => 'required'
        ]);
 
        return view('proses',['data' => $request]);
    }
}