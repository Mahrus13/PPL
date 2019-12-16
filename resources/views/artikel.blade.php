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
                <!-- <li>
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
                <li class="active has-sub">
                    <a href="{{url('/artikel')}}">
                        <i class="fas fa-indent"></i>Artikel</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
<div class="col-lg">
  <a href="{{route('artikel.create')}}" class="btn btn-secondary"><i class="fa fa-plus-circle"></i> tambah artikel</a>
</div>
@foreach($data as $artikel)
<div class="col-lg-12">
  <!-- TOP CAMPAIGN-->
  <div class="top-campaign">
    <p>{{$artikel->tanggal}}</p>
    <h3 class="title-3 m-b-30">{{$artikel->judul}}</h3>

    <div class="table-responsive">
      <form class="" action="" method="post">
      <table class="table table-top-campaign">
        <tbody>
          <tr>
            <td>
              <label class="au-radio">
                <img class="card-img-top" src="{{asset('storage/'.$artikel->gambar)}}" style="width:50%;">
              </label>
            </td>
            <td></td>
          </tr>
          <tr>
            <td><p align="justify">{{$artikel->deskripsi}}</p></td>
            <td></td>
          </tr>
          <tr>
            <td>
              <a href="{{url('hapus/'.$artikel->id)}}" type="submit" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"> Hapus</i>
              </a>
              <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-primary btn-sm">
                  <i class="fa fa-pencil-alt"> Ubah</i>
              </a>
            </td>
            <td></td>
          </tr>
        </tbody>
      </table>
      </form>
    </div>
  </div>
  <!--  END TOP CAMPAIGN-->
</div>
@endforeach
@endsection
