<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use Auth;
use Illuminate\Http\Request;

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
        $role = "Dokter";
        // $data = User::with('roles')->whereIn('name', [$role])->get();
        $data = \App\Role::with('users')->whereIn('name', [$role])->get();
        // return view('home', ['users' => $data->id('2')]);
        $dokter = $data->all();
        // dd($dokter);
        return view ('/home', compact('dokter'));
    }
}
