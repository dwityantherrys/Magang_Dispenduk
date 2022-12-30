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
          <h1><i class="fa fa-laptop"></i> Daftar Kelurahan di Kecamatan  {{$kotamalang->kecamatan}}</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item"><a href="{{ route('kota_malang.index') }}">Kota Malang</a></li>
          <li class="breadcrumb-item"><a href="#">Kecamatan {{$kotamalang->kecamatan}}</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Nama Kelurahan</th>
                      <th></th>
                      <th></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($kecamatan as $tampil)
                    <tr>
                      <td>{{$tampil->id_kecamatans}}</td>
                      <td>{{$tampil->kelurahan}}</td>
                      <td style="width: 100%"></td>
                      <td>

                       {{-- <a class="btn btn-info" href="{{ route('kota_malang.detail',$tampil->id) }}"><span class="fa fa-book"></a> --}}
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
