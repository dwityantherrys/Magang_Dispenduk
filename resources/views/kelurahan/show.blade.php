@extends('app')
@section('title')
Data 
@endsection
@section('kecamatan')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Kelurahan Sawojajar </h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item"><a href="{{ route('kota_malang.index') }}">Kota Malang</a></li>
          <li class="breadcrumb-item"><a href="#">Kecamatan Kedungkandang </a></li>
                    <li class="breadcrumb-item"><a href="#">Kelurahan Sawojajar </a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
         <a class="btn btn-dark" href="#" style="margin-top:10px;margin-bottom:10px;float:right;">Tambah Data</a>
          <div class="boxshow">
            <h4>Kelurahan Sawojajar</h4> <br>
            <p>Jln.Tenaga Utara no. 1 <br> Telp. 0341 2222 2222
              {{-- {{$laporan['id_kelurahans']['tahun']}} --}}
            </p>
             <div class="boxshow2">
             <div class="boxshow3">
            
          </div>

          </div>
          </div>
<div class="row">
          <div class="box6 col"></div>
          <div class="box5 col"></div>
          <div class="w-100"></div>
          <div class="box6 col"></div>
          <div class="box5 col"></div>
          <div class="w-100"></div>
          <div class="box6 col"></div>
          <div class="box5 col"></div>

</div>
<div class="row">
          <div class="box4 col"></div>
          <div class="row">
          <div class="box3 col"></div>
          <div class="w-100"></div>
          <div class="box3 col"></div>
          
          </div>
</div>

<div class="row">
  <div class=" box2 col"></div>
  <div class=" box2 col"></div>
</div>
         
<div class="row">
  <div class=" box2 col"></div>
  <div class=" box2 col"></div>
</div>
<div class="row">
  <div class=" box2 col"></div>
  <div class=" box2 col"></div>
</div>
<div class="row">
  <div class=" box1 col"></div>

</div>

          <div class="row">
            <div class="col-lg-12">

                <table class="table table-hover">
                     <thead>
                    <tr>
                      {{-- <th>id</th> --}}
                      <th>Kelurahan</th>
                      <th>tahun</th>
                      <th>semester</th> 
                      {{-- <th>id jenis data</th> --}}
                      <th>jenis data</th>
                      <th>value</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @foreach($laporan as $tampil )

                    <tr>
                      {{-- <td>{{$tampil->id}}</td>                      --}}
                      {{-- <td>{{$jenisdata->['jenis')}}</td> --}}
                      <td>{{$tampil->id_kelurahans}}</td>
                      <td>{{$tampil->kecamatan['kelurahan']}}</td>
                      {{-- <td>{{$jenisdata->jenis}}</td> --}}
                      
                      <td>{{$tampil->tahun}}</td>
                      <td>{{$tampil->semester}}</td>
                      {{-- <td>{{$tampil->id_jenis_datas}}</td> --}}
                      <td>{{$tampil->jenisdata['jenis']}}</td>
                      {{-- <td>{{$jenisdata->jenis}}</td> --}}
                      
                      <td>{{$tampil->value}}</td>
                     
                      <td style="width: 100%"></td>
                      <td>

                       {{-- <a class="btn btn-info" href="{{url('/kota_malang/'.$tampil->id_kecamatans. '/'.$tampil->id)}}">Detail</a> --}}
                        {{-- <form action="{{route('kota_malang.destroy', $tampil->id)}}" method="post">
                           <a href="{{url('/kota_malang/'.$tampil->id.'/edit')}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"></span></button>
                        </form> --}}
                      </td>

                    </tr>
                    @endforeach

                  </tbody>
                </table>


            </div>
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </main>
     <script src="{{ asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/bootstrap.min.js') }}"></script>

@endsection
