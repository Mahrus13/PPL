<?php

namespace App\Http\Controllers;
use App\Pembelian;
use Auth;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class keranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('keranjang');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::add($request->id, $request->name_produk, $request->qty, $request->price_produk )
              ->associate('App\Produk');
        return redirect()->route('keranjang.index')->with('success_message','berhasil');
    }

    public function simpan(Request $request)
    {
      \Validator::make($request->all(), [
        'name' => 'required',
        'bukti' => 'required|mimes:jpg,jpeg,png|max:1024',
      ])->validate();

      $items=Cart::content()->map(function($item){
        return $item->model->name_produk;
      })->values()->toJson();
      $qty=Cart::content()->map(function($item){
        return $item->qty;
      })->values()->toJson();
      $price=Cart::content()->map(function($item){
        return $item->price;
      })->values()->toJson();
      $new_pembelian = new Pembelian;
      $new_pembelian->user_id = Auth::user()->id;
      $new_pembelian->total = Cart::subtotal();
      $new_pembelian->qty = $qty;
      $new_pembelian->price = $price;
      $new_pembelian->name_produk = $items;
      $new_pembelian->resi = $request->get('resi');
      $gambar = $request->file('bukti');
      if ($gambar) {
        $gambar_path = $gambar->store('bukti','public');
        $new_pembelian->bukti = $gambar_path;
      }
      $beli = json_decode($items);
      $jumlah = json_decode($qty);
      foreach ($beli as $key => $value) {
        $stock = \DB::table('produk')->where('name_produk',$value)->value('stock_produk');
        foreach ($jumlah as $kantong) {
          \DB::table('produk')->where('name_produk',$value)->update([
            'stock_produk'=>$stock-$kantong

          ]);
        }
      }

      $new_pembelian->save();

      Cart::instance('default')->destroy();

      return redirect('/pesanan');
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
        $data = Pembelian::find($id);
        return view('tambahresi', compact('data'));
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
        'resi' => 'required|max:15',
      ])->validate();

      $data = \App\Pembelian::find($id);
      $data->resi = $request->get('resi');
      $data->save();
      return redirect('/keranjang_dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public function delete($id)
    {
      Cart::remove($id);
      return back();
    }
}
