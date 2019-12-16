<?php

namespace App\Http\Controllers;
use App\gejala1;
use App\gejala2;
use App\gejala3;
use App\penyakit;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
  public function home1()
  {
    return view('gejala1');
  }

  public function home2()
  {
    return view('gejala2');
  }
  public function home3()
  {
    return view('gejala3');
  }
}
