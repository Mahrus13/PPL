<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use Auth;
class artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::get();
        return view('artikel', ['data' => $artikel->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahArtikel');
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
        'judul' => 'required|max:225|unique:artikel',
        'deskripsi' => 'required',
        'tanggal' => 'required',
        'gambar' => 'required|mimes:jpg,jpeg,png|max:1024',
      ])->validate();
      $new_artikel = new artikel;
      $new_artikel->user_id = Auth::user()->id;
      $new_artikel->judul = $request->get('judul');
      $new_artikel->deskripsi = $request->get('deskripsi');
      $new_artikel->tanggal = $request->get('tanggal');
      $gambar = $request->file('gambar');
      if ($gambar) {
        $gambar_path1 = $gambar->store('gambar_artikel','public');
        $new_artikel->gambar = $gambar_path1;
      }
      $new_artikel->save();
      return redirect('/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('EditArtikel')->with('artikel', artikel::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      \Validator::make($request->all(), [
        'judul' => 'required|max:225',
        'deskripsi' => 'required',
        'tanggal' => 'required',
      ])->validate();
      $data = \App\artikel::find($id);
      // $data->name_produk = $request->get('name_produk');
      $data->judul = $request->get('judul');
      $data->tanggal = $request->get('tanggal');
      $data->deskripsi = $request->get('deskripsi');
      $data->save();
      return redirect('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
      $artikel = \App\artikel::findOrFail($id);
      $artikel->delete();
      return back();
    }
}
