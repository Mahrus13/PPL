<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $dokter =  User::with('user')->get();
      // dd($dokter);
      // return view('home', ['dokter' => $dokter->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
          'name' => 'required|min:5|max:200|',
          'email' => 'required|min:5|max:200|email|unique:users',
          'tanggal_lahir' => 'required',
          'JenisKelamin' => 'required|min:5|',
          'alamat' => 'required|min:5|max:200|',
          'phone' => 'required|max:12|',
          'password' => 'required|min:5|max:200|',
          'foto' => 'required',
        ])->validate();

        $peternak = Role::where('name', 'peternak')->first();
        $new_user = new User;
        $new_user->name = $request->get('name');
        $new_user->email = $request->get('email');
        $new_user->tanggal_lahir = $request->get('tanggal_lahir');
        $new_user->JenisKelamin = $request->get('JenisKelamin');
        $new_user->alamat = $request->get('alamat');
        $new_user->phone = $request->get('phone');
        $new_user->password = bcrypt($request->get('password'));
        $gambar = $request->file('foto');
        if ($gambar) {
          $gambar_path = $gambar->store('gambar_user','public');
          $new_user->foto = $gambar_path;
        }
        $new_user->save();
        $new_user->roles()->attach($peternak);

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profile')->with('users', User::find($user->id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('EditProfil')->with('users', User::find($user->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = \App\User::find($user->id);
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->tanggal_lahir = $request->get('ttl');
        $data->alamat = $request->get('alamat');
        $data->phone = $request->get('phone');
        $data->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
