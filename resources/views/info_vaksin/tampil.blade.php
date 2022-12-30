@extends('app')
@section('title')
Data Info Vaksin
@endsection
@section('InfoVaksin')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Info Vaksin </h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Info Vaksin</li>
          <li class="breadcrumb-item"><a href="#">Data Info Vaksin</a></li>
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
                      <th>Gambar</th>
                      <th>Lokasi</th>
                      <th>Tanggal</th>
                      <th>Waktu</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($infovaksin as $tampil)
                    <tr>
                      <td><a href="{{route('infovaksin.show', $tampil->id)}}"><img src="{{$tampil->gambar}}"  alt=""  width="100px", height="60px"></a></td>
                      <td>{{$tampil->lokasi}}</td>
                      <td>{{$tampil->tanggal}}</td>
                      <td>{{$tampil->waktu}}</td>
                      <td>{{$tampil->keterangan}}</td>
                      <td>

                       <!-- <a class="btn btn-info" href="{{ route('infovaksin.show',$tampil->id) }}"><span class="fa fa-book"></a>-->
                        <form action="{{route('infovaksin.destroy', $tampil->id)}}" method="post">
                           <a href="{{url('/infovaksin/'.$tampil->id.'/edit')}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"></span></button>
                        </form>
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
@endsection
