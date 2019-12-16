@extends('master')

@section('content')
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{url('/home')}}">
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
                <!-- <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user-md"></i>Diagnosa</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                  <a href="{{url('/gejala1')}}"><i class="fas fa-stethoscope"></i>Gejala 1</a>
                              </li>
                              <li>
                                  <a href="index2.html"><i class="fas fa-stethoscope"></i>Gejala 2</a>
                              </li>
                              <li>
                                  <a href="index3.html"><i class="fas fa-stethoscope"></i>Gejala 3</a>
                              </li>
                       </ul>
                </li> -->
                <li>
                    <a href="{{url('/produk')}}">
                        <i class="fas fa-pills"></i>Obat</a>
                </li>
                <li class="active has-sub">
                    <a href="{{url('/keranjang_dokter')}}">
                        <i class="fas fa-archive"></i>Pesanan</a>
                </li>
                <li>
                    <a href="{{url('/artikel')}}">
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
                <th>Nama</th>
                <th>Harga</th>
                <th>Bukti</th>
                <th>No.Resi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          <?php
            $data = \DB::table('pembelian')->get();
            $items = $data->all();
            $number = 1;
           ?>
           <?php foreach ($items as $key=> $item): ?>
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

               <td>{{$p->name}}</td>
               <td>
                 @foreach($price as $harga)
                   Rp.{{$harga}} <br>
                 @endforeach
               </td>
               <td><img class="card-img-top" src="{{asset('storage/'.$item->bukti)}}"></td>
               <td> {{$item->resi}}</td>
               <td>
                 <a href="/keranjang/{{$item->id}}/edit" class="btn btn-primary btn-sm">
                     <i class="fa fa-plus-circle"></i>
                 </a>
               </td>
             </tr>
             <tr>
               <td></td>
               <td></td>
               <td></td>
               <td><b>Total : </b></td>
               <td> <b>Rp.{{$item->total}}</b> </td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
           <?php endforeach; ?>
        </tbody>
    </table>
  </form>
  <br><br><br>
</div>
<!-- END DATA TABLE-->
@endsection
