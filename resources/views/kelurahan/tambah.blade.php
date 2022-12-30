@section('title')
    Tambah Data
@endsection
@section('InfoVaksin')
    active
@endsection
@extends('app')
@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Tambah Data </h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Kelurahan </li>
                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <!-- <h3 class="tile-title">Register</h3> -->
                    <div class="tile-body">
                        <form class="form-horizontal" action="{{ route('kelurahan.store') }}" method="post">
                        <form class="form-horizontal" action="{{ url('/kelurahan/create') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
    <label for="id_kelurahans" class="control-label col-md-3">Kelurahan</label>
    <div class="col-md-8">
    <select class="form-control" id="id_Kelurahans" name="id_kelurahans">
      <option value={{$kecamatan->id}}>{{$kecamatan->kelurahan}}</option>
    </select>
    </div>
  </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tahun</label>
                                <div class="col-md-8">
                                    <input class="form-control " type="text" name="tahun">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Semester</label>
                                <div class="col-md-8">
                                    <input class="form-control " type="text" name="semester">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="control-label col-md-3">Value</label>
                                <div class="col-md-8">
                                    <input class="form-control " type="text" name="value">
                                </div>
                            </div>
                             <div class="row">
                                <label class="control-label col " style="color:red">Nb : Lakukan Input Data hingga selesai, Jika sudah Selesai silahkan klik button Tambah --> Button Selesai</label>
                               
                            </div>

                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="alleft btn btn-primary" type="submit" ><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                                        <a class="alright btn btn-secondary" href="http://127.0.0.1:8000/masuk/kota_malang"><i
                                                class="fa fa-fw fa-lg fa-times-circle"></i>Selesai</a>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>

        </div>
        </div>
    </main>
 <script src="{{ asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/bootstrap.min.js') }}"></script>

@endsection
