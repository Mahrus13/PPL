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
                  <li>
                      <a href="{{url('/pesanan')}}">
                          <i class="fas fa-archive"></i>Pesanan Saya</a>
                  </li>
                <li class="active has-sub">
                    <a href="{{url('/artikelUser')}}">
                        <i class="fas fa-indent"></i>Artikel</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
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
            <td></td>
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
