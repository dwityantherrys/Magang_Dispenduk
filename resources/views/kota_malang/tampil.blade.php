@extends('app')
@section('title')
Data Info Vaksin
@endsection
@section('kota_Malang')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Daftar Kecamatan di Kota Malang </h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item"><a href="#">Kota Malang</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile">
        <div class="page-header">
<div class="outerbox">
  <div class="row">
          <div class="dropdown col">
  <button class="alleft btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class=" dropdown-menu" aria-labelledby="dropdownMenu2">
      @foreach($kotamalang as $tampil)
     
    <a class="btn btn-info" href="{{ route('kota_malang.show',$tampil->id) }}">{{$tampil->kecamatan}}</a>
    <br>
   @endforeach
  </div>
    <a class=" alright btn btn-dark" style="margin-left: 15px" href="{{route('kelurahan.create')}}" >Tambah Data</a>
              
   
</div>
  </div>
<div class="row">
          <div class="dropdown col">
<label style="font-size:15px;margin-top:10px;float:left">show
<select name="data_leght" aria-controls="myTables">
  <option value="10">10</option>
  <option value="25">25</option>
  <option value="50">50</option>
  <option value="100">100</option>
</select>  
</label>
<label style="font-size: 15px;margin-top:10px; float:right; border-radius:2px">Search
<input type="search">
</label>
  <div class=" dropdown-menu" aria-labelledby="dropdownMenu2">
      @foreach($kotamalang as $tampil)
     
    <a class="btn btn-info" href="{{ route('kota_malang.show',$tampil->id) }}">{{$tampil->kecamatan}}</a>
    <br>
   @endforeach
  </div>
   
</div>
  </div>
          <div class="row">
            <div class="col-lg-12">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      
                      {{-- <th>Nama Kecamatan</th> --}}
                      {{-- <th>id</th> --}}
                      {{-- <th></th> --}}
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($kotamalang as $tampil)
                    
                    @endforeach

                  </tbody>
                </table>


            </div>
          </div>
            {{-- bata  --}}
        </div>
        
      
        
        {{-- outerbox top  --}}
      </div>
    </main>
     <script src="{{ asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/bootstrap.min.js') }}"></script>

@endsection
