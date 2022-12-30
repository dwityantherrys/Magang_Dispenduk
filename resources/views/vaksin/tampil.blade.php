@extends('app')
@section('title')
Data Vaksin
@endsection
@section('vaksin')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Vaksin </h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vaksin</li>
          <li class="breadcrumb-item"><a href="#">Data Vaksin</a></li>
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
                      <th>Nama</th>
                      <th>Usia</th>
                      <th>TTL</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>NIK</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($vaksin as $tampil)
                    <tr>                      
                      <td><a href="{{route('vaksin.show', $tampil->id)}}">{{$tampil->nama}}</a></td>
                      <td>{{$tampil->usia}} </td>
                      <td>{{$tampil->tgl_lahir}}</td>
                      <td>{{$tampil->jenis_kelamin}}</td>
                      <td>{{$tampil->alamat}}</td>
                      <td>{{$tampil->nik}}</td>
                      <td>{{$tampil->status}}</td>
                      <td>
                       
                       <!-- <a class="btn btn-info" href="{{ route('vaksin.show',$tampil->id) }}"><span class="fa fa-book"></a>-->

                        <form action="{{route('vaksin.destroy', $tampil->id)}}" method="post">
                           <a href="{{url('/vaksin/'.$tampil->id.'/edit')}}"
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