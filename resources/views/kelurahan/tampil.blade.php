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
          <h1><i class="fa fa-laptop"></i> Kelurahan {{$kecamatan->kelurahan}} </h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item">Kota Malang</li>
          <li class="breadcrumb-item">Kecamatan </li>
                    <li class="breadcrumb-item"><a href="#">Kelurahan {{$kecamatan->kelurahan}} </a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
         <a class="btn btn-dark" href="{{route('kelurahan.edit',$kecamatan->id)}}" style="margin-top:10px;margin-bottom:10px;float:right;">Tambah / Edit Data</a>
              
                      

           
         
          <div class="boxshow">
            <h4>Kelurahan {{$kecamatan->kelurahan}}</h4> <br>
            <p>Jln.Tenaga Utara no. 1 <br> Telp. 0341 2222 2222 
       

              {{-- {{$laporan['id_kelurahans']['tahun']}} --}}
            </p>
             <div class="boxshow2">
             <div class="boxshow3">
            
          </div>

          </div>
          </div>
<div class="row">
          <div class="box6 col">
            <div class="row">
            <div class="col" style="justify-content: left;
    align-items: center; text-align:center;padding-top:20px"><h3>Jumlah Penduduk </h3></div>
            <div class="col"style="justify-content: left;
    align-items: center; text-align:center;padding-top:35px">
                        <h3>
              @foreach($detail_laporan as $tampil)
                      {{$tampil->jumlah_penduduk}}
              @endforeach
            </h3>

            </div>
            </div>
          </div>

          <div class="box5 col"> <div class="row">
            <div class="col" style="justify-content: left;
    align-items: center; text-align:center;padding-top:20px"><h3>Kepadatan Penduduk </h3></div>
            <div class="col"style="justify-content: left;
    align-items: center; text-align:center;padding-top:35px">
                        <h3>
              @foreach($detail_laporan as $tampil)
                      {{$tampil->kepadatan_penduduk}}
              @endforeach
            </h3>

            </div>
            </div>
          </div>

          <div class="w-100"></div>
          <div class="box6 col"> <div class="row">
            <div class="col" style="justify-content: left;
    align-items: center; text-align:center;padding-top:20px"><h3>Jumlah Kartu Keluarga</h3></div>
            <div class="col"style="justify-content: left;
    align-items: center; text-align:center;padding-top:35px">
                        <h3>
              @foreach($detail_laporan as $tampil)
                      {{$tampil->jumlah_kk}}
              @endforeach
            </h3>

            </div>
            </div>
          </div>
          <div class="box5 col"> <div class="row">
            <div class="col" style="justify-content: left;
    align-items: center; text-align:center;padding-top:20px"><h3>Luas <br>Wilayah </h3></div>
            <div class="col"style="justify-content: left;
    align-items: center; text-align:center;padding-top:35px">
                       <h3>
              @foreach($detail_laporan as $tampil)
                      {{$tampil->luas_wilayah}}
              @endforeach
            


          <span style="font-size: 14px">(km &#178)<span>  </h3>
            </div>
            </div>
          </div>

          <div class="w-100"></div>
          <div class="box6 col"> <div class="row">
            <div class="col" style="justify-content: left;
    align-items: center; text-align:center;padding-top:20px"><h3>Jumlah Meninggal </h3></div>
            <div class="col"style="justify-content: left;
    align-items: center; text-align:center;padding-top:35px">
                        <h3>
              @foreach($detail_laporan as $tampil)
                      {{$tampil->jumlah_meninggal}}
              @endforeach
            </h3>

            </div>
            </div>
          </div>

          <div class="box5 col"> <div class="row">
            <div class="col" style="justify-content: left;
    align-items: center; text-align:center;padding-top:35px"><h3>Wajib KTP </h3></div>
            <div class="col"style="justify-content: left;
    align-items: center; text-align:center;padding-top:35px">
                        <h3>
              @foreach($detail_laporan as $tampil)
                      {{$tampil->wajib_ktp}}
              @endforeach
            </h3>

            </div>
            </div>
          </div>

</div>
<div class="row">
          <div class="box4 col"> 
            <h2 style="padding-top:20px;"><center>Agama</center> </h2>
<h4 class="alleft">Islam</h4>
            <h4 class="alright">
            @foreach($detail_laporan as $tampil)
                      {{$tampil->islam}}
              @endforeach

            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Kristen</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->kristen}}
              @endforeach

            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Katholik</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->katholik}}
              @endforeach

            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Hindu</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->hindu}}
              @endforeach

            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Budha</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->budha}}
              @endforeach

            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Konghucu</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->konghucu}}
              @endforeach

            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h5 class="alleft">Kepercayaan Terhadap Tuhan YME</h5>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->kepercayaan_terhadap_tuhan_yme}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
          </div>


          {{-- JENIS KELAMIN --}}
          <div class="row">
          <div class="box3 col">
                <h2 style="padding-top:20px;"><center>Jenis Kelamin</center> </h2>
<h4 class="alleft">Laki - laki</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->laki_laki}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Perempuan</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->perempuan}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
          </div>

          <div class="w-100"></div>
          {{-- STATUS PERKAWINAN --}}
          <div class="box3 col">
              <h3 style="padding-top:5px;"><center>Status Perkawinan</center> </h3>
<h4 class="alleft1">Belum Kawin</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->belum_kawin}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft1">Kawin</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->kawin}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft1">Cerai Hidup</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->cerai_hidup}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Cerai Mati</h4>
            <h4 class="alright1">
            @foreach($detail_laporan as $tampil)
                      {{$tampil->cerai_mati}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
          </div>
          
          </div>
</div>
{{-- KELOMPOK USIA  --}}
<div class="row">
  <div class=" box2 col">
       <h2 style="padding-top:20px;"><center>Kelompok Usia</center> </h2>
<h4 class="alleft1">Usia 0-4 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia0_4thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft1">Usia 5-9 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia5_9thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft1">Usia 10-14 thn</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia10_14thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft1">Usia 15-19 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia15_19thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft1">Usia 20-24 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia20_24thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft1">Usia 25-29 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia25_29thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft1">Usia 30-34 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia30_34thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 35-39 thn</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia35_39thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 40-44 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia40_44thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 45-49 thn</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia45_49thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 50-54 thn</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia50_54thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 55-59 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia55_59thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 60-64 thn</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia60_64thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 65-69 thn</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia65_69thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">	
Usia 70-74 thn</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia70_74thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Usia 75 thn ke atas</h4>
            <h4 class="alright1">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_75thn_keatas}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Lahir thn 2018</h4>
            <h4 class="alright1">
            @foreach($detail_laporan as $tampil)
                      {{$tampil->lahir_thn_2018}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft1">Lahir sebelum thn 2018</h4>
            <h4 class="alright1">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->lahir_sebelum_thn_2018}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
  </div>

  {{-- PERTUMBUHAN PENDUDUK --}}
  <div class=" box2 col" style="height: 200px">
     <h2 style="padding-top:20px;"><center>Pertumbuhan Penduduk</center> </h2>
            <h5 class="alleft">	
Pertumbuhan penduduk thn 2016 (%)
</h5>
            <h5 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->pertumbuhan_penduduk_2016}}
              @endforeach
            </h5>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>

            <h5 class="alleft">	
Pertumbuhan penduduk thn 2017 (%)
</h5>
            <h5 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->pertumbuhan_penduduk_2017}}
              @endforeach
            </h5>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>

            <h5 class="alleft">	
Pertumbuhan penduduk thn 2018 (%)
</h5>
            <h5 class="alright">
            @foreach($detail_laporan as $tampil)
                      {{$tampil->pertumbuhan_penduduk_2018}}
              @endforeach
            </h5>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
  </div>
</div>
         
<div class="row">
  {{-- USIA SEKOLAH  --}}
  <div class=" box2 col" style="height:370px">
    <h2 style="padding-top:20px;"><center>Usia Sekolah</center> </h2>
<h4 class="alleft">Usia sekolah 3-4 thn</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_sekolah_3_4_thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia sekolah 5 thn</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_sekolah_5_thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia sekolah 6-11 thn</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_sekolah_6_11_thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia sekolah 12-14 thn</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_sekolah_12_14_thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia sekolah 15-17 thn</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_sekolah_15_17_thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia sekolah 18-22 thn</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_sekolah_18_22_thn}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>

  </div>
  {{-- KELOMPOK USIA PENDIDIKAN --}}
  <div class=" box2 col" style="height: 330px">

    <h2 style="padding-top:20px;"><center>Kelompok Usia Pendidikan</center> </h2>
<h4 class="alleft">Usia 4-18 thn Khusus</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_4_18_thn_khusus}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia 5-6 thn PAUD</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_5_6_thn_paud}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia 7-12 thn SD</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_7_12_thn_sd}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia 12-15 thn SMP</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_12_15_thn_smp}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Usia 16-18 thn SMA</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->usia_16_18_thn_sma}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
  </div>
</div>
<div class="row">
  {{-- TINGKAT PENDIDIKAN  --}}
  <div class=" box2 col" style="height: 540px">

             <h2 style="padding-top:20px;"><center>Tingkat Pendidikan</center> </h2>
<h4 class="alleft">Tidak/belum sekolah</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->tidak_atau_belum_sekolah}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Belum tamat SD</h4>
            <h4 class="alright">
           @foreach($detail_laporan as $tampil)
                      {{$tampil->belum_tamat_sd}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Tamat SD</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->tamat_sd}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">SLTP</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->sltp}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">SLTA</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->slta}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">D1 dan D2</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->d1_dan_d2}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h5 class="alleft">	
D3</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->d3}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">S1</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->s1}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">S2</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->s2}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">S3</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->s3}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
  </div>
{{-- GOLONGAN DARAH  --}}
  <div class=" box2 col" style="height: 670px">
    <h2 style="padding-top:20px;"><center>Golongan Darah</center> </h2>
<h4 class="alleft">Golongan Darah A</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_a}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Golongan Darah B</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_b}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Golongan Darah AB</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_ab}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Golongan Darah O</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_o}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Golongan Darah A+</h4>
            <h4 class="alright">
            @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_a_plus}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Golongan Darah A-</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_a_min}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h5 class="alleft">	
Golongan Darah B+</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_b_plus}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">Golongan Darah B-</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_b_min}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">Golongan Darah AB+</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_ab_plus}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">Golongan Darah AB-</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_ab_min}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft">Golongan Darah O+</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_o_plus}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft">Golongan Darah O-</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_o_min}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft">Golongan Darah Tidak Diketahui</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->goldar_tidak_tahu}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
  </div>
</div>

<div class="row">
{{-- STATUS PEKERJAAN --}}
  <div class=" box1 col" style="height: 600px">
        <h2 style="padding-top:20px;"><center>Status Pekerjaan</center> </h2>
<h4 class="alleft">Belum/tidak bekerja</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->belum_atau_tidak_bekerja}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Aparatur Pejabat Negara</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->aparatur_pejabat_negara}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Tenaga Pengajar</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->tenaga_pengajar}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Wiraswasta</h4>
            <h4 class="alright">
           @foreach($detail_laporan as $tampil)
                      {{$tampil->wiraswasta}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Pertanian dan Peternakan</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->pertanian_dan_peternakan}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h4 class="alleft">Nelayan</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->nelayan}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
            <h5 class="alleft">	
Agama dan Kepercayaan</h4>
            <h4 class="alright">
            @foreach($detail_laporan as $tampil)
                      {{$tampil->agama_dan_kepercayaan}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">Pelajar dan Mahasiswa</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->pelajar_dan_mahasiswa}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">Tenaga Kesehatan</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->tenaga_kesehatan}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
    <h4 class="alleft">Pensiunan</h4>
            <h4 class="alright">
              @foreach($detail_laporan as $tampil)
                      {{$tampil->pensiunan}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
 <h4 class="alleft">Pekerjaan Lainnya</h4>
            <h4 class="alright">
             @foreach($detail_laporan as $tampil)
                      {{$tampil->pekerjaan_lainnya}}
              @endforeach
            </h4>
        <div style="clear: both;"></div>
            <div class="liner"></div>
<div style="clear: both;"></div>
  </div>

</div>
<?php /*
          <div class="row">
            <div class="col-lg-12">

                <table class="table table-hover">
                     <thead>
                    <tr>
                      {{-- <th>id</th> --}}
                      {{-- <th>Kelurahan</th> --}}
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
                      {{-- <td>{{$tampil->id_kelurahans}}</td> --}}
                      {{-- <td>{{$tampil->kecamatan['kelurahan']}}</td> --}}
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
          */
          ?>
        </div>
       
        <div class="row">

        </div>
      </div>
    </main>
     <script src="{{ asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/bootstrap.min.js') }}"></script>

@endsection
