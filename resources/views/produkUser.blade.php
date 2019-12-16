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
                <li  class="active has-sub">
                    <a href="{{url('/produkUser')}}">
                        <i class="fas fa-pills"></i>Obat</a>
                </li>
                <li>
                    <a href="{{url('/keranjang')}}">
                        <i class="fas fa-shopping-cart"></i>Keranjang <span class="badge badge-info">{{Cart::count()}}</span></a>
                </li>
                <li>
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
@foreach($produk as $p)
  <div class="col-md-4">
      <div class="card">
          <img class="card-img-top" src="{{asset('storage/'.$p->foto)}}">
          <div class="card-body">
              <h4 class="card-title mb-3">{{ $p->name_produk }}</h4>
              <p class="card-text">
                <table>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </table>
                Stock : {{ $p->stock_produk }} <br>
                Harga : Rp.{{ $p->price_produk }} <br> <br>
                <!-- Dokter : Dr. {{ $p->user->name }} <br> <br> -->
              </p>
              <a href="{{route('produk.show',$p->id)}}" class="btn btn-primary btn-sm">
                Detail
              </a>
          </div>
      </div>
  </div>
@endforeach

<!-- END DATA TABLE-->
@endsection
