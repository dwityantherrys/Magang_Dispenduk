

@extends('app')
@section('title')
Data 
@endsection
@section('kecamatan')
active
@endsection
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
            
<center><div style="height:auto">
            <h3><center>Agama</center></h3>
                <canvas id="myChartAgama" class="col" ></canvas>

<script>
  const ctx_agama = document.getElementById('myChartAgama');

  new Chart(ctx_agama, {
    type: 'pie',
    data: {
      labels: ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Konghucu', 'Kepercayaan Terhadap Tuhan YME'],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->islam}}','{{$tampil->kristen}}','{{$tampil->katholik}}','{{$tampil->hindu}}','{{$tampil->budha}}','{{$tampil->konghucu}}','{{$tampil->kepercayaan_terhadap_tuhan_yme}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>          
</div> 
          {{-- COL --}}


          {{-- JENIS KELAMIN --}}
          <div class="row">
          <div class="box3 col">
            <center><div style="width:50%;height:auto">
            <h3><center>Jenis Kelamin</center></h3>
                <canvas id="myChartJk" class="col" height="200"></canvas>

<script>
  const ctx = document.getElementById('myChartJk');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['permpuan', 'Laki-laki'],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->laki_laki}}','{{$tampil->perempuan}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>
          </div>

          <div class="w-100"></div>
          {{-- STATUS PERKAWINAN --}}
          <div class="box3 col">
<center><div style="height:auto;width:300px;margin-top:60px">
            <h3><center>Status Perkawinan</center></h3>
                <canvas id="myChartStatusPerkawinan" class="col" ></canvas>

<script>
  const ctx_status_perkawinan = document.getElementById('myChartStatusPerkawinan');

  new Chart(ctx_status_perkawinan, {
    type: 'pie',
    data: {
      labels: ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->belum_kawin}}','{{$tampil->kawin}}','{{$tampil->cerai_hidup}}','{{$tampil->cerai_mati}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center> 
          </div>
          
          </div>
</div>
{{-- KELOMPOK USIA  --}}
<div class="row">
  <div class=" box2 col">
       <center><div style="height:auto;margin-top:40px">
            <h3><center>Kelompok Usia</center></h3>
                <canvas id="myChartKelompokUsia" class="col" ></canvas>

<script>
  const ctx_kelompok_usia = document.getElementById('myChartKelompokUsia');

  new Chart(ctx_kelompok_usia, {
    type: 'pie',
    data: {
      labels: ['Usia 0-4 thn', 'Usia 5-9 thn',
       'Usia 10-14 thn', 'Usia 15-19 thn',
       'Usia 20-24 thn', 'Usia 25-29 thn',
       'Usia 30-34 thn', 'Usia 30-34 thn',
       'Usia 40-44 thn', 'Usia 45-49 thn',
       'Usia 45-49 thn', 'Usia 55-59 thn',
       'Usia 60-64 thn', 'Usia 60-64 thn',
       'Usia 70-74 thn', 'Usia 75 thn ke atas',
       'Lahir thn 2018', 'Lahir sebelum thn 2018',],
       
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->usia0_4thn}}','{{$tampil->usia5_9thn}}',
        '{{$tampil->usia10_14thn}}','{{$tampil->usia15_19thn}}',
        '{{$tampil->usia20_24thn}}','{{$tampil->usia25_29thn}}',
        '{{$tampil->usia30_34thn}}','{{$tampil->usia35_39thn}}',
        '{{$tampil->usia40_44thn}}','{{$tampil->usia45_49thn}}',
        '{{$tampil->usia50_54thn}}','{{$tampil->usia55_59thn}}',
        '{{$tampil->usia60_64thn}}','{{$tampil->usia65_69thn}}',
        '{{$tampil->usia70_74thn}}','{{$tampil->usia_75thn_keatas}}',
        '{{$tampil->lahir_thn_2018}}','{{$tampil->lahir_sebelum_thn_2018}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center> 
  </div>

  {{-- PERTUMBUHAN PENDUDUK --}}
  <div class=" box2 col" style="height: 200px">
     <center><div style="height:auto;margin-top:300px">
            <h3><center>Pertumbuhan Penduduk</center></h3>
                <canvas id="myChartPertumbuhanPenduduk" class="col" ></canvas>

<script>
  const ctx_pertumbuhan_penduduk = document.getElementById('myChartPertumbuhanPenduduk');

  new Chart(ctx_pertumbuhan_penduduk, {
    type: 'pie',
    data: {
      labels: ['Pertumbuhan Penduduk 2016 %', 'Pertumbuhan Penduduk 2017 %', 'Pertumbuhan Penduduk 2018 %'],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->pertumbuhan_penduduk_2016}}','{{$tampil->pertumbuhan_penduduk_2017}}','{{$tampil->pertumbuhan_penduduk_2018}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>
  </div>
</div>
         
<div class="row">
  {{-- USIA SEKOLAH  --}}
  <div class=" box2 col" style="height:370px">
    <center><div style="height:auto;margin-top:20px">
            <h3><center>Usia Sekolah</center></h3>
                <canvas id="myChartUsiaSekolah" class="col" ></canvas>

<script>
  const ctx_usia_sekolah = document.getElementById('myChartUsiaSekolah');

  new Chart(ctx_usia_sekolah, {
    type: 'pie',
    data: {
      labels: ['Usia sekolah 3-4 thn', 'Usia sekolah 5 thn',
        'Usia sekolah 6-11 thn','Usia sekolah 12-14 thn',
        'Usia sekolah 15-17 thn','Usia sekolah 18-22 thn',
      ],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->usia_sekolah_3_4_thn}}','{{$tampil->usia_sekolah_5_thn}}',
        '{{$tampil->usia_sekolah_6_11_thn}}','{{$tampil->usia_sekolah_12_14_thn}}',
      '{{$tampil->usia_sekolah_15_17_thn}}','{{$tampil->usia_sekolah_18_22_thn}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>
  </div>
  {{-- KELOMPOK USIA PENDIDIKAN --}}
  <div class=" box2 col" style="height: 330px">

    <center><div style="height:auto;margin-top:300px">
            <h3><center>Kelompok Usia Pendidikan</center></h3>
                <canvas id="myChartKelompokUsiaPendidikan" class="col" ></canvas>

<script>
  const ctx_kelompok_usia_pendidikan = document.getElementById('myChartKelompokUsiaPendidikan');

  new Chart(ctx_kelompok_usia_pendidikan, {
    type: 'pie',
    data: {
      labels: ['Usia 4-18 thn Khusus', 'Usia 5-6 thn PAUD', 'Usia 7-12 thn SD', 'Usia 12-15 thn SMP', 'Usia 16-18 thn SMA'],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->usia_4_18_thn_khusus}}','{{$tampil->usia_5_6_thn_paud}}','{{$tampil->usia_7_12_thn_sd}}',
        '{{$tampil->usia_12_15_thn_smp}}','{{$tampil->usia_16_18_thn_sma}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>
  </div>
</div>
{{-- GOLONGAN DARAH  --}}
<div class="row">
  <div class=" box2 col" style="height: 670px">
    <center><div style="height:auto;margin-top:200px;">
            <h3><center>Golongan Darah</center></h3>
                <canvas id="myChartGolonganDarah" class="col" ></canvas>

<script>
  const ctx_golongan_darah = document.getElementById('myChartGolonganDarah');

  new Chart(ctx_golongan_darah, {
    type: 'pie',
    data: {
      labels: ['Golongan Darah A', 'Golongan Darah B', 
      'Golongan Darah AB', 'Golongan Darah O',
     'Golongan Darah A+', 'Golongan Darah A-',
     'Golongan Darah B+', 'Golongan Darah B-',
    'Golongan Darah AB+', 'Golongan Darah AB-',
  'Golongan Darah O+','Golongan Darah O-','Golongan Darah Tidak Diketahui'],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->goldar_a}}','{{$tampil->goldar_b}}','{{$tampil->goldar_ab}}',
        '{{$tampil->goldar_o}}','{{$tampil->goldar_a_plus}}',
      '{{$tampil->goldar_a_min}}','{{$tampil->goldar_b_plus}}',
    '{{$tampil->goldar_b_min}}','{{$tampil->goldar_ab_plus}}',
  '{{$tampil->goldar_ab_min}}','{{$tampil->goldar_o_plus}}',
  '{{$tampil->goldar_ao_min}}','{{$tampil->goldar_tidak_tahu}}',
],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>
  </div>
  <div class="col"></div>
</div>

<div class="row">
  {{-- TINGKAT PENDIDIKAN  --}}
  <div class=" box2 col">

            <center><div style="margin-top:100px;padding-right:40px">
            <h3><center>Status Pekerjaan</center></h3>
                <canvas id="myChartStatusPekerjaan" class="col" ></canvas>

<script>
  const ctx_status_pekerjaan = document.getElementById('myChartStatusPekerjaan');

  new Chart(ctx_status_pekerjaan, {
    type: 'line',
    data: {
      labels: ['Belum/tidak bekerja', 'Aparatur Pejabat Negara', 
      'Tenaga Pengajar', 'Wiraswasta',
     'Pertanian dan Peternakan', 'Nelayan',
     'Agama dan Kepercayaan', 'Pelajar dan Mahasiswa',
    'Tenaga Kesehatan', 'Pensiunan',
  'Pekerjaan Lainnya'],
      datasets: [{
        label: 'Jumlah',
        data: ['{{$tampil->belum_atau_tidak_bekerja}}','{{$tampil->aparatur_pejabat_negara}}','{{$tampil->tenaga_pengajar}}',
        '{{$tampil->wiraswasta}}','{{$tampil->pertanian_dan_peternakan}}',
      '{{$tampil->nelayan}}','{{$tampil->agama_dan_kepercayaan}}',
    '{{$tampil->pelajar_dan_mahasiswa}}','{{$tampil->tenaga_kesehatan}}',
  '{{$tampil->pensiunan}}','{{$tampil->pekerjaan_lainnya}}',
],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>
<div style="clear: both;"></div>
  </div>
  </div>


<div class="row">
{{-- TINGKAT PENDIDIKAN --}}
  <div class=" box1 col" style="height: 600px">
        <center><div style="padding-right:40px;margin-top:60px">
            <h3><center>Tingkat Pendidikan</center></h3>
                <canvas id="myChartTingkatPendidikan" class="col" ></canvas>

<script>
  const ctx_tingkat_pendidikan = document.getElementById('myChartTingkatPendidikan');

  new Chart(ctx_tingkat_pendidikan, {
    type: 'bar',
    data: {
      labels: ['Tidak/Belum Sekolah', 'Belum Tamat SD', 
      'Tamat SD', 'SLTP',
     'SLTA', 'D1 dan D2',
     'D3', 'S1',
    'S2', 'S3'
  ],
      datasets: [{
        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
        label: 'Jumlah',
        data: ['{{$tampil->tidak_atau_belum_sekolah}}','{{$tampil->belum_tamat_sd}}','{{$tampil->tamat_sd}}',
        '{{$tampil->sltp}}','{{$tampil->slta}}',
      '{{$tampil->d1_dan_d2}}','{{$tampil->d3}}',
    '{{$tampil->s1}}','{{$tampil->s2}}',
  '{{$tampil->s3}}'
],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

     
       
<div style="clear: both;"></div>
          </div></center>
  </div>

</div>

<div>
  <canvas id="myChart" class="col"></canvas>
  @foreach($detail_laporan as $tampil)
              @endforeach
</div>

 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['permpuan', 'Laki-laki'],
      datasets: [{
        label: '# of Votes',
        data: ['{{$tampil->laki_laki}}','{{$tampil->perempuan}}'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
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
