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
                <li class="active has-sub">
                    <a href="#">
                        <i class="fas fa-shopping-cart"></i>keranjang <span class="badge badge-info">{{Cart::count()}}</span></a>
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
<!-- END MENU SIDEBAR-->
<!-- DATA TABLE-->
<!-- <h3 class="title-5 m-b-35">Keranjang Belanja</h3> -->
<div class="table-data__tool">
<div class="table-responsive m-b-40">
  <div class="rs-select2--light rs-select2--md">
    <a href="{{route ('keranjang.create')}}" class="au-btn au-btn-icon au-btn--blue au-btn--small">
        <i class="fa fa-dollar"></i>Beli</a>
      <div class="dropDownSelect2"></div>
  </div>
  <form class="login100-form validate-form" method="POST">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>#</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Option</th>
            </tr>

        </thead>
        <tbody>
          <?php $number = 0; ?>
          <?php $total = 0; $total1 = 0;?>
            @foreach (Cart::content() as $data)
          <tr>
            <td>{{++$number}}.</td>
            <td>{{$data->name}}</td>
            <td>{{$data->qty}}</td>
            <td>Rp.{{$total = $data->qty * $total1 = $data->price}}</td>
            <td>
              <a href="/carts/{{$data->rowId}}">
                <button type="submit" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i>
                </button>
              </a>
      				</form>
            </td>
            @endforeach
        </tbody>
    </table>
  </form>
</div>
<!-- END DATA TABLE-->
@endsection
