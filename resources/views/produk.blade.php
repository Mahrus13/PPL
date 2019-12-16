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
                <li>
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
<!-- <h3 class="title-5 m-b-35">Toko Obat</h3> -->
<div class="table-data__tool-left">
    <div class="rs-select2--light rs-select2--md">
      <a href="{{route('produk.create')}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
          <i class="fa fa-plus-circle"></i>Tambah Item</a>
        <div class="dropDownSelect2"></div>
    </div>
<div class="table-data__tool">
<div class="table-responsive m-b-40">
  <form class="login100-form validate-form" method="POST">
    @csrf
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Stock</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <!-- <th>Dokter</th> -->
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          @foreach($produk as $p)
            <tr>
                <td>{{ $p->name_produk }}</td>
                <td>{{ $p->stock_produk }}</td>
                <td>Rp.{{ $p->price_produk }}</td>
                <td>{{ $p->deskripsi }}</td>
                <!-- <td>{{$p->user->name}}</td> -->
                <td>
                        <a href="{{url('delete/'.$p->id)}}" type="submit" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"> Hapus</i>
                        </a>
                </td>
                <td>
                        <a href="/produk/{{$p->id}}/edit" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-alt"> Ubah</i>
                        </a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </form>
</div>
<!-- END DATA TABLE-->
@endsection
