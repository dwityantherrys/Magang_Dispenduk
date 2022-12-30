@section('title')
    Edit Data
@endsection
@section('kecamatan')
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
                        <form class="form-horizontal" action="{{ route('kelurahan.update',$kecamatan->id) }}" method="post">
                            {{ csrf_field() }}
                                          {{method_field('PUT')}}

<input class="form-control " type="hidden" name="kecamatan" value="{{$kecamatan->kotamalang['kecamatan']}}" >
<input class="form-control " type="hidden" name="kabupaten" value="Kota Malang" >
<input class="form-control " type="hidden" name="provinsi" value="Jawa Timur" >
<input class="form-control " type="hidden" name="desa" value="{{$kecamatan->kelurahan}}" >
                            <div class="form-group row">
                                <label class="control-label col" ><h3>Kelurahan {{$kecamatan->kelurahan}}</h3></label>
                                <div class="col-md-8">
                                    @foreach($detail_laporan as $tampil)
                                    @endforeach
                                    <input class="form-control " type="hidden" name="id_kelurahans" value="{{$kecamatan->id}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                            </div>
{{-- INput  --}}

                            <div class="form-group row" style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label">Jumlah Penduduk</label>
                                    <input class="form-control " type="text" name="jumlah_penduduk" value="{{$tampil->jumlah_penduduk}}">
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Jumlah Kartu Keluarga</label>
                                    <input class="form-control " type="text" name="jumlah_kk" value="{{$tampil->jumlah_kk}}">
                                </div>
                            </div>

                             <div class="form-group row"style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                     <label class="control-label">Luas Wilayah</label>
                                    <input class="form-control " type="text" name="luas_wilayah" value="{{$tampil->luas_wilayah}}">
                                </div>
                                <div class="col" style="margin-left: 60px">
                                    <label class="control-label">Kepadatan Penduduk</label>
                                    <input class="form-control " type="text" name="kepadatan_penduduk" value="{{$tampil->kepadatan_penduduk}}">
                                </div>
                            </div>

                             <div class="form-group row"style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label">Jumlah Meninggal</label>
                                    <input class="form-control " type="text" name="jumlah_meninggal" value="{{$tampil->jumlah_meninggal}}">
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Wajib KTP</label>
                                    <input class="form-control " type="text" name="wajib_ktp" value="{{$tampil->wajib_ktp}}">
                                </div>
                            </div>

                             <div class="form-group row"style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label">Perpindahan Penduduk</label>
                                    <input class="form-control " type="text" name="perpindahan_penduduk" value="{{$tampil->perpindahan_penduduk}}">
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Perubahan Data</label>
                                    <input class="form-control " type="text" name="perubahan_data" value="{{$tampil->perubahan_data}}">
                                </div>
                            </div>

                            
                             <div class="form-group row"style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label" style="">Agama</label>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Islam" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="islam" value="{{$tampil->islam}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Kristen" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="kristen" value="{{$tampil->kristen}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Katholik" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="katholik" value="{{$tampil->katholik}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Hindu" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="hindu" value="{{$tampil->hindu}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Budha" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="budha" value="{{$tampil->budha}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Konghucu" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="konghucu" value="{{$tampil->konghucu}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Kepercayaan Tuhan YME" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="kepercayaan_terhadap_tuhan_yme" value="{{$tampil->kepercayaan_terhadap_tuhan_yme}}" >
                                        </div>
                                    </div>
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Jenis Kelamin</label>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Laki-laki" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="laki_laki" value="{{$tampil->laki_laki}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Perempuan" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="perempuan" value="{{$tampil->perempuan}}" >
                                        </div>
                                    </div>
                                </div>
                                </div>

                                 <div class="form-group row"style="padding-top:20px ">
                                <div class="col" style="margin-right: 60px">
                                     <label class="control-label">Status Perkawinan</label>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Belum Kawin" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="belum_kawin" value="{{$tampil->belum_kawin}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Kawin" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="kawin" value="{{$tampil->kawin}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Cerai Hidup" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="cerai_hidup" value="{{$tampil->cerai_hidup}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Cerai Mati" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="cerai_mati" value="{{$tampil->cerai_mati}}" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Kelompok Usia</label>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 0-4 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia0_4thn" value="{{$tampil->usia0_4thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 5-9 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia5_9thn" value="{{$tampil->usia5_9thn}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 10-14 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia10_14thn" value="{{$tampil->usia10_14thn}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 15-19 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia15_19thn" value="{{$tampil->usia15_19thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 20-24 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia20_24thn" value="{{$tampil->usia20_24thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 15-29 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia25_29thn" value="{{$tampil->usia25_29thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 30-34 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia30_34thn" value="{{$tampil->usia30_34thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 35-39 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia35_39thn" value="{{$tampil->usia35_39thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 40-44 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia40_44thn" value="{{$tampil->usia40_44thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 45-49 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia45_49thn" value="{{$tampil->usia45_49thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 50-54 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia50_54thn" value="{{$tampil->usia50_54thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 55-59 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia55_59thn" value="{{$tampil->usia55_59thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 60-64 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia60_64thn" value="{{$tampil->usia60_64thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 65-69 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia65_69thn" value="{{$tampil->usia65_69thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 70-74 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia70_74thn" value="{{$tampil->usia70_74thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 75 thn keatas" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_75thn_keatas" value="{{$tampil->usia_75thn_keatas}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Lahir Thn 2018" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="lahir_thn_2018" value="{{$tampil->lahir_thn_2018}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Lahir Sebelum thn 2018" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="lahir_sebelum_thn_2018" value="{{$tampil->lahir_sebelum_thn_2018}}" >
                                        </div>
                                    </div>
                                    
                                </div>

                                 </div>{{-- enddiv  ROW--}}

                                 <div class="form-group row"style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label" style="">Pertumbuhan Penduduk</label>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Pertumbuhan penduduk thn 2016 (%)" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="pertumbuhan_penduduk_2016" value="{{$tampil->pertumbuhan_penduduk_2016}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Pertumbuhan penduduk thn 2017 (%)" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="pertumbuhan_penduduk_2017" value="{{$tampil->pertumbuhan_penduduk_2018}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Pertumbuhan penduduk thn 2018 (%)" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="pertumbuhan_penduduk_2018" value="{{$tampil->pertumbuhan_penduduk_2018}}" >
                                        </div>
                                    </div>
                                     
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Usia Sekolah</label>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia sekolah 3-4 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_sekolah_3_4_thn" value="{{$tampil->usia_sekolah_3_4_thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia sekolah 5 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_sekolah_5_thn" value="{{$tampil->usia_sekolah_5_thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia sekolah 6-11 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_sekolah_6_11_thn" value="{{$tampil->usia_sekolah_6_11_thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia sekolah 12-14 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_sekolah_12_14_thn" value="{{$tampil->usia_sekolah_12_14_thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia sekolah 15-17 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_sekolah_15_17_thn" value="{{$tampil->usia_sekolah_15_17_thn}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia sekolah 18-22 thn" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_sekolah_18_22_thn" value="{{$tampil->usia_sekolah_18_22_thn}}" >
                                        </div>
                                    </div>
                                </div>
                                </div>
                                 <div class="form-group row"style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label" style="">Kelompok Usia Pendidikan</label>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 4-18 thn Khusus" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_4_18_thn_khusus" value="{{$tampil->usia_4_18_thn_khusus}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 5-6 thn PAUD" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_5_6_thn_paud" value="{{$tampil->usia_5_6_thn_paud}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 7-12 thn SD" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_7_12_thn_sd" value="{{$tampil->usia_7_12_thn_sd}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 12-15 thn SMP" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_12_15_thn_smp" value="{{$tampil->usia_12_15_thn_smp}}" >
                                        </div>
                                    </div>
                                     
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Usia 16-18 thn SMA" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="usia_16_18_thn_sma" value="{{$tampil->usia_16_18_thn_sma}}" >
                                        </div>
                                    </div>
                                     
                                     
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Tingkat Pendidikan</label>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Tidak / Belum Sekolah" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="tidak_atau_belum_sekolah" value="{{$tampil->tidak_atau_belum_sekolah}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Belum Tamat SD" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="belum_tamat_sd" value="{{$tampil->belum_tamat_sd}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Tamat SD" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="tamat_sd" value="{{$tampil->tamat_sd}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="SLTP" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="sltp" value="{{$tampil->sltp}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="slta" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="slta" value="{{$tampil->slta}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="D1 dan D2" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="d1_dan_d2" value="{{$tampil->d1_dan_d2}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="D3" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="d3" value="{{$tampil->d3}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="S1" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="s1" value="{{$tampil->s1}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="S2" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="s2" value="{{$tampil->s2}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="S3" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="s3" value="{{$tampil->s3}}" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row"style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label" style="">Golongan Darah</label>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah A" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_a" value="{{$tampil->goldar_a}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah B" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_b" value="{{$tampil->goldar_b}}" >
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah AB" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_ab" value="{{$tampil->goldar_ab}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah O" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_o" value="{{$tampil->goldar_o}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah A+" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_a_plus" value="{{$tampil->goldar_a_plus}}" >
                                        </div>
                                    </div><div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah A-" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_a_min" value="{{$tampil->goldar_a_min}}" >
                                        </div>
                                    </div><div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah B+" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_b_plus" value="{{$tampil->goldar_b_plus}}" >
                                        </div>
                                    </div><div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah B-" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_b_min" value="{{$tampil->goldar_b_min}}" >
                                        </div>
                                    </div><div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah AB+" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_ab_plus" value="{{$tampil->goldar_ab_plus}}" >
                                        </div>
                                    </div><div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah AB-" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_ab_min" value="{{$tampil->goldar_ab_min}}" >
                                        </div>
                                    </div><div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah O+" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_o_plus" value="{{$tampil->goldar_o_plus}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah O-" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_o_min" value="{{$tampil->goldar_o_min}}" >
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Golongan Darah Tidak Diketahui" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="goldar_tidak_tahu" value="{{$tampil->goldar_tidak_tahu}}" >
                                        </div>
                                    </div> 
                                    
                                     
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Status Pekerjaan</label>
                                     <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Belum / Tidak Bekerja" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="belum_atau_tidak_bekerja" value="{{$tampil->belum_atau_tidak_bekerja}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Aparatur Pejabat Negara" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="aparatur_pejabat_negara" value="{{$tampil->aparatur_pejabat_negara}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Tenaga Pengajar" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="tenaga_pengajar" value="{{$tampil->tenaga_pengajar}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Wiraswasta" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="wiraswasta" value="{{$tampil->wiraswasta}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Pertanian Dan Peternakan" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="pertanian_dan_peternakan" value="{{$tampil->pertanian_dan_peternakan}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Nelayan" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="nelayan" value="{{$tampil->nelayan}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Agama Dan Kepercayaan" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="agama_dan_kepercayaan" value="{{$tampil->agama_dan_kepercayaan}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Pelajar Dan Mahasiswa" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="pelajar_dan_mahasiswa" value="{{$tampil->pelajar_dan_mahasiswa}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Tenaga Kesehatan" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="tenaga_kesehatan" value="{{$tampil->tenaga_kesehatan}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Pensiunan" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="pensiunan" value="{{$tampil->pensiunan}}" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input class="form-control " type="text" value="Pekerjaan Lainnya" readonly >
                                        </div>
                                        <div class="col">
                                    <input class="form-control " type="text" name="pekerjaan_lainnya" value="{{$tampil->pekerjaan_lainnya}}" >
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="form-group row" style="padding-top:20px ">
                                
                                <div class="col" style="margin-right: 60px">
                                    <label class="control-label">Sumber data</label>
                                    <input class="form-control " type="text" name="sumber_data" value="{{$tampil->sumber_data}}">
                                </div>
                                
                               
                                <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Tahun</label>
                                    <input class="form-control " type="text" name="tahun" value="{{$tampil->tahun}}">
                                </div>

                                  <div class="col" style="margin-left: 60px">
                                     <label class="control-label">Semester</label>
                                    <input class="form-control " type="text" name="semester" value="{{$tampil->semester}}">
                                </div>
                            </div>

                             

                            

                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col">
                                        <button class="alright btn btn-primary" type="submit" ><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                                        
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
