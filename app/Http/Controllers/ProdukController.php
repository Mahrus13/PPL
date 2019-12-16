<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use App\Produk;
use Auth;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produk = Produk::with('user')->get();
      return view('produk', ['produk' => $produk->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahProduk');
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
        'name_produk' => 'required|unique:produk',
        'stock_produk' => 'required',
        'price_produk' => 'required',
        'deskripsi' => 'required|max:1024',
        'foto_produk' => 'required|mimes:jpg,jpeg,png|max:1024',
      ])->validate();

      $new_produk = new Produk;
      $new_produk->user_id = Auth::user()->id;
      $new_produk->name_produk = $request->get('name_produk');
      $new_produk->stock_produk = $request->get('stock_produk');
      $new_produk->price_produk = $request->get('price_produk');
      $new_produk->deskripsi = $request->get('deskripsi');
      $gambar = $request->file('foto_produk');
      if ($gambar) {
        $gambar_path1 = $gambar->store('gambar_produk','public');
        $new_produk->foto = $gambar_path1;
      }
      $new_produk->save();
      return redirect('/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = \App\Produk::findOrFail($id);
        return view('detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('EditProduk')->with('produk', Produk::find($id));

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
        'stock_produk' => 'required|numeric',
        'price_produk' => 'required|numeric',
        'deskripsi' => 'required|max:1024',
      ])->validate();

      $data = \App\Produk::find($id);
      // $data->name_produk = $request->get('name_produk');
      $data->stock_produk = $request->get('stock_produk');
      $data->price_produk = $request->get('price_produk');
      $data->deskripsi = $request->get('deskripsi');
      $data->save();
      return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //   dd($produk);
    //     // Produk::destroy($produk->id);
    //     return redirect('/produk');
    // }
    public function delete($id)
    {
      $produk = \App\Produk::findOrFail($id);
      $produk->delete();
      return redirect('/produk');
    }
}
