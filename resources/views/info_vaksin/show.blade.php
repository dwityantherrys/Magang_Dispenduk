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
                <li class="breadcrumb-item"><a href="/infovaksin">Data Info Vaksin</a></li>
                <li class="breadcrumb-item"><a href="#">Data Info Vaksin</a></li>
            </ul>
        </div>
        <!-- Buttons-->
        <div class="tile">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('imginfovaksin/' . $infovaksin->foto) }}" width="350px" alt="">
                        <table class="table-condensed">
							<tr>
                                <td>Gambar</td>
                                <td>: </td>
                                <td>{{ $infovaksin->gambar }}</td>
                            </tr>
							<tr>
                                <td>Lokasi</td>
                                <td>: </td>
                                <td>{{ $infovaksin->lokasi }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>: </td>
                                <td>{{ $infovaksin->tanggal }}</td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td>: </td>
                                <td>{{ $infovaksin->waktu }}</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>: </td>
                                <td>{{ $infovaksin->keterangan }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
