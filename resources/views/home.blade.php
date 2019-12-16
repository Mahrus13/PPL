@extends('master')

@section('content')
  @if(Auth::user()->hasAnyRole('Dokter'))
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
                  <li class="active has-sub">
                      <a class="js-arrow" href="#">
                          <i class="fas fa-users"></i>Dokter</a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fas fa-pills"></i>Obat</a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fas fa-comments"></i>Forum</a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fas fa-shopping-cart"></i>Keranjang </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fas fa-user-md"></i>Diagnosa</a>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
  <!-- END MENU SIDEBAR-->
  <?php
  $role = "Dokter";
  // $data = User::with('roles')->whereIn('name', [$role])->get();
  $data = \App\Role::with('users')->whereIn('name', [$role])->get();
  // return view('home', ['users' => $data->id('2')]);
  $dokter = $data->all();
  // dd($dokter);
   ?>
  @foreach($dokter as $data)
  @foreach($data['users'] as $data)
  <div class="col-md-4">
      <div class="card">
          <div class="card-header">
              <strong class="card-title pl-2">Profile</strong>
          </div>
          <div class="card-body">
              <div class="mx-auto d-block">
                  <img class="rounded-circle mx-auto d-block" style="width:35%" src="{{asset('storage/'.$data->foto)}}"/>
                  <h5 class="text-sm-center mt-2 mb-1">Dr. {{$data->name}}</h5>
                  <p class="text-sm-center mt-2 mb-1">Email : {{$data->email}}</p>
                  <p class="text-sm-center mt-2 mb-1">No.Telp : {{$data->phone}}</p>
                  <div class="location text-sm-center">
                      <i class="fa fa-map-marker"></i> {{$data->alamat}}</div>
              </div>
              <hr>
              <div class="card-text text-sm-center">

              </div>
          </div>
      </div>
  </div>
  @endforeach
  @endforeach

  @elseif(Auth::user()->hasAnyRole('Admin'))
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
                  <!-- <li class="active has-sub">
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
  <?php
  $role = "Peternak";
  // $data = User::with('roles')->whereIn('name', [$role])->get();
  $data = \App\Role::with('users')->whereIn('name', [$role])->get();
  // return view('home', ['users' => $data->id('2')]);
  $dokter = $data->all();
  // dd($dokter);
   ?>
  @foreach($dokter as $data)
  @foreach($data['users'] as $data)
  <div class="col-md-4">
      <div class="card">
          <div class="card-header">
              <strong class="card-title pl-2">Profile</strong>
          </div>
          <div class="card-body">
              <div class="mx-auto d-block">
                  <img class="rounded-circle mx-auto d-block" style="width:35%" src="{{asset('storage/'.$data->foto)}}"/>
                  <h5 class="text-sm-center mt-2 mb-1">{{$data->name}}</h5>
                  <p class="text-sm-center mt-2 mb-1">Email : {{$data->email}}</p>
                  <p class="text-sm-center mt-2 mb-1">No.Telp : {{$data->phone}}</p>
                  <div class="location text-sm-center">
                      <i class="fa fa-map-marker"></i> {{$data->alamat}}</div>
              </div>
              <hr>
              <div class="card-text text-sm-center">

              </div>
          </div>
      </div>
  </div>
  @endforeach
  @endforeach

  @else(Auth::user()->hasAnyRole('Peternak'))
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
                  <!-- <li class="active has-sub">
                      <a class="js-arrow" href="{{url('/home')}}">
                          <i class="fas fa-users"></i>Dokter</a>
                  </li> -->
                  <li class="active has-sub">
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
                  <li>
                      <a href="{{url('/artikelUser')}}">
                          <i class="fas fa-indent"></i>Artikel</a>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
    <div class="col-lg-7" style="margin-left:23%;">
      <!-- TOP CAMPAIGN-->
      <div class="top-campaign">
        <p>Apakah Sapi Anda Mengalami Gejala Seperti ini ?</p> <br>
        @error('gejala1') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
        <div class="table-responsive">
          <form class="" action="{{url('gejala1')}}" method="post">
            @csrf
            @foreach($gejala1 as $item)
          <table class="table table-top-campaign">
            <tbody>
              <tr>
                <td>
                  <label class="au-radio">
                    <input class="@error('gejala1') is-invalid @enderror" type="radio" name="gejala1" value="{{$item->kode}}">
                    <span class="au-radio">{{$item->name}}</span>
                  </label>
                </td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>
                </td>
              </tr>
            </tbody>
          </table>
          @endforeach
          <button type="submit" value="create" class="btn-primary btn-sm">Submit</button>
          </form>
        </div>
      </div>
      <!--  END TOP CAMPAIGN-->
    </div>
  </div>

  @endif
@endsection
