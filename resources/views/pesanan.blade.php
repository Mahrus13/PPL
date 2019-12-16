@extends('master')

@section('content')
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <!-- <li>
                    <a class="js-arrow" href="{{url('/home')}}">
                        <i class="fas fa-users"></i>Dokter</a>
                </li> -->
                <li>
                    <a href="{{url('/home')}}">
                        <i class="fas fa-user-md"></i>Diagnosa</a>
                </li>
                <li>
                    <a href="{{url('/produkUser')}}">
                        <i class="fas fa-pills"></i>Obat</a>
                </li>
                <li>
                    <a href="{{url('/keranjang')}}">
                        <i class="fas fa-shopping-cart"></i>Keranjang <span class="badge badge-info">{{Cart::count()}}</span> </a>
                </li>
                <li class="active has-sub">
                    <a href="{{url('/pesanan')}}">
                        <i class="fas fa-archive"></i>Pesanan Saya</a>
                </li>
                <li>
                    <a href="{{url('/artikelUser')}}">
                        <i class="fas fa-indent"></i>Artikel</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<!-- DATA TABLE-->
<!-- <h3 class="title-5 m-b-35">Keranjang Belanja</h3> -->
<div class="table-data__tool">
<div class="table-responsive m-b-40">
  <form class="login100-form validate-form" method="POST">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>#</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Bukti</th>
                <th>No.Resi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          <?php
            $data = \DB::table('pembelian')->where('user_id',Auth::user()->id)->get();
            $items = $data->all();
            $number = 1;
           ?>
           <?php foreach ($items as $item): ?>
             <?php $user = \DB::table('users')->where('id',$item->user_id)->get(); ?>
             <?php $produk = json_decode($item->name_produk);?>
             <?php $qty = json_decode($item->qty);?>
             <?php $price = json_decode($item->price); ?>
             <?php foreach ($user as $p):?>
             <?php endforeach ?>
             <tr>
               <td>{{$number++}}</td>
               <td>
                 @foreach($produk as $nama)
                   {{$nama}} <br>
                 @endforeach
               </td>
               <td>
                 <?php
                 $data = null;
                 foreach ($qty as $jumlah) {
                 $data = $data+$jumlah;
                }
                ?>
                  {{$data}}
               </td>
               <td>
                 @foreach ($price as $harga)
                   Rp.{{$harga}} <br>
                 @endforeach
               </td>
               <td><img class="card-img-top" src="{{asset('storage/'.$item->bukti)}}"></td>
               <td>{{$item->resi}}</td>
               <td><a href="{{url('remove/'.$item->id)}}" type="submit" class="btn btn-danger btn-sm">
                   <i class="fa fa-check"></i>
               </a></td>
             </tr>
             <tr>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td><b>Total : </b></td>
               <td> <b>Rp.{{$item->total}}</b> </td>
             </tr>
           <?php endforeach; ?>
        </tbody>
    </table>
  </form>
</div>
<!-- END DATA TABLE-->
@endsection
