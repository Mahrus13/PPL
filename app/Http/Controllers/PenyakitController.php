<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gejala1;
use App\gejala2;
use App\gejala3;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    public function home()
    {
      $gejala = gejala1::get();
      return view('home', ['gejala1' => $gejala->all()]);
    }

    public function step(Request $request)
    {
      \Validator::make($request->all(), [
        'gejala1' => 'required|',
      ])->validate();
        $gejala1= $request->gejala1;

        if(isset($gejala1)) {

            $gejala2 = DB::table('gejala2')
                ->where('kode_1', $gejala1)
                ->get();

            return view('cekGejala1',compact('gejala2'));
        }
    }


    public function step2(Request $request)
    {
      
        $gejala2= $request->gejala2;
        // dd($request->all());
        if(isset($gejala2)) {

            $gejala3 = DB::table('gejala3')
                ->where('kode_2',$gejala2)
                ->get();
            return view('cekGejala2',compact('gejala3'));
        }
    }

    public function step3(Request $request)
    {

        $gejala3= $request->gejala3;

        if(isset($gejala3)) {

            $gejala4 = DB::table('penyakit')
                ->where('kode_3',$gejala3)
                ->get();
            return view('penyakit',compact('gejala4'));
        }
    }

}
