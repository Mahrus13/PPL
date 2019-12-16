<?php

use Illuminate\Database\Seeder;
use App\Produk;
class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $produk=new Produk();
      $produk->name_produk='penicilin';
      $produk->stock_produk='10';
      $produk->price_produk='23000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='sterptomicin';
      $produk->stock_produk='10';
      $produk->price_produk='49000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='terramicin';
      $produk->stock_produk='10';
      $produk->price_produk='76000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='B.abortus S19';
      $produk->stock_produk='10';
      $produk->price_produk='85000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='salep sulfa';
      $produk->stock_produk='10';
      $produk->price_produk='52000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='yodium sulfur';
      $produk->stock_produk='10';
      $produk->price_produk='65000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='diapet';
      $produk->stock_produk='10';
      $produk->price_produk='2000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='borogluconas';
      $produk->stock_produk='10';
      $produk->price_produk='48000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='minyak angin ';
      $produk->stock_produk='10';
      $produk->price_produk='15000';
      $produk->save();

      $produk=new Produk();
      $produk->name_produk='pakan konsentrat';
      $produk->stock_produk='10';
      $produk->price_produk='50000';
      $produk->save();

    }
}
