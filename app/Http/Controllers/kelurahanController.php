<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kotamalang;
use App\Models\kecamatan;
use App\Models\detail_laporan;
use App\Charts\UserChart;

class kelurahanController extends Controller
{

    public function index()
    {
        
     $kecamatan=kecamatan::all();
        return view('kelurahan.tampil', compact('kelurahan'));
    }

   
    public function create()
    {
        

        $detail_laporan = detail_laporan::all();
        $kecamatan = kecamatan::all();
        return view('kelurahan.tambah' , compact('kecamatan','detail_laporan'));

    }

    
    public function store(Request $request)
    {
    
        $detail_laporan = new detail_laporan();
        $detail_laporan->id_kelurahans = $request ->id_kelurahans;
        $detail_laporan->sumber_data = $request ->sumber_data;
        $detail_laporan->desa = $request ->desa;
        $detail_laporan->kecamatan = $request ->kecamatan;
        $detail_laporan->kabupaten = $request ->kabupaten;
        $detail_laporan->provinsi = $request ->provinsi;
        $detail_laporan->jumlah_penduduk = $request ->jumlah_penduduk;
        $detail_laporan->jumlah_kk = $request ->jumlah_kk;
        $detail_laporan->luas_wilayah = $request ->luas_wilayah;
        $detail_laporan->kepadatan_penduduk = $request ->kepadatan_penduduk;
        $detail_laporan->perpindahan_penduduk = $request ->perpindahan_penduduk;
        $detail_laporan->jumlah_meninggal = $request ->jumlah_meninggal;
        $detail_laporan->perubahan_data = $request ->perubahan_data;
        $detail_laporan->wajib_ktp = $request ->wajib_ktp;
        $detail_laporan->islam = $request ->islam;
        $detail_laporan->kristen = $request ->kristen;
        $detail_laporan->katholik = $request ->katholik;
        $detail_laporan->hindu = $request ->hindu;
        $detail_laporan->budha = $request ->budha;
        $detail_laporan->konghucu = $request ->konghucu;
        $detail_laporan->kepercayaan_terhadap_tuhan_yme = $request ->kepercayaan_terhadap_tuhan_yme;
        $detail_laporan->laki_laki = $request ->laki_laki;
        $detail_laporan->perempuan = $request ->perempuan;
        $detail_laporan->belum_kawin = $request ->belum_kawin;
        $detail_laporan->kawin = $request ->kawin;
        $detail_laporan->cerai_hidup = $request ->cerai_hidup;
        $detail_laporan->cerai_mati = $request ->cerai_mati;
        $detail_laporan->usia0_4thn = $request ->usia0_4thn;
        $detail_laporan->usia5_9thn = $request ->usia5_9thn;
        $detail_laporan->usia10_14thn = $request ->usia10_14thn;
        $detail_laporan->usia15_19thn = $request ->usia15_19thn;
        $detail_laporan->usia20_24thn = $request ->usia20_24thn;
        $detail_laporan->usia25_29thn = $request ->usia25_29thn;
        $detail_laporan->usia30_34thn = $request ->usia30_34thn;
        $detail_laporan->usia35_39thn = $request ->usia35_39thn;
        $detail_laporan->usia40_44thn = $request ->usia40_44thn;
        $detail_laporan->usia45_49thn = $request ->usia45_49thn;
        $detail_laporan->usia50_54thn = $request ->usia50_54thn;
        $detail_laporan->usia55_59thn = $request ->usia55_59thn;
        $detail_laporan->usia60_64thn = $request ->usia60_64thn;
        $detail_laporan->usia65_69thn = $request ->usia65_69thn;
        $detail_laporan->usia70_74thn = $request ->usia70_74thn;
        $detail_laporan->usia_75thn_keatas = $request ->usia_75thn_keatas;
        $detail_laporan->lahir_thn_2018 = $request ->lahir_thn_2018;
        $detail_laporan->lahir_sebelum_thn_2018 = $request ->lahir_sebelum_thn_2018;
        $detail_laporan->pertumbuhan_penduduk_2016 = $request ->pertumbuhan_penduduk_2016;
        $detail_laporan->pertumbuhan_penduduk_2017 = $request ->pertumbuhan_penduduk_2017;
        $detail_laporan->pertumbuhan_penduduk_2018 = $request ->pertumbuhan_penduduk_2018;
        $detail_laporan->usia_sekolah_3_4_thn = $request ->usia_sekolah_3_4_thn;
        $detail_laporan->usia_sekolah_5_thn = $request ->usia_sekolah_5_thn;
        $detail_laporan->usia_sekolah_6_11_thn = $request ->usia_sekolah_6_11_thn;
        $detail_laporan->usia_sekolah_12_14_thn = $request ->usia_sekolah_12_14_thn;
        $detail_laporan->usia_sekolah_15_17_thn = $request ->usia_sekolah_15_17_thn;
        $detail_laporan->usia_sekolah_18_22_thn = $request ->usia_sekolah_18_22_thn;
        $detail_laporan->usia_4_18_thn_khusus = $request ->usia_4_18_thn_khusus;
        $detail_laporan->usia_5_6_thn_paud = $request ->usia_5_6_thn_paud;
        $detail_laporan->usia_7_12_thn_sd = $request ->usia_7_12_thn_sd;
        $detail_laporan->usia_12_15_thn_smp = $request ->usia_12_15_thn_smp;
        $detail_laporan->usia_16_18_thn_sma = $request ->usia_16_18_thn_sma;
        $detail_laporan->tidak_atau_belum_sekolah = $request ->tidak_atau_belum_sekolah;
        $detail_laporan->belum_tamat_sd = $request ->belum_tamat_sd;
        $detail_laporan->tamat_sd = $request ->tamat_sd;
        $detail_laporan->sltp = $request ->sltp;
        $detail_laporan->slta = $request ->slta;
        $detail_laporan->d1_dan_d2 = $request ->d1_dan_d2;
        $detail_laporan->d3 = $request ->d3;
        $detail_laporan->s1 = $request ->s1;
        $detail_laporan->s2 = $request ->s2;
        $detail_laporan->s3 = $request ->s3;
        $detail_laporan->goldar_a = $request ->goldar_a;
        $detail_laporan->goldar_b = $request ->goldar_b;
        $detail_laporan->goldar_ab = $request ->goldar_ab;
        $detail_laporan->goldar_o = $request ->goldar_o;
        $detail_laporan->goldar_a_plus = $request ->goldar_a_plus;
        $detail_laporan->goldar_a_min = $request ->goldar_a_min;
        $detail_laporan->goldar_b_plus = $request ->goldar_b_plus;
        $detail_laporan->goldar_b_min = $request ->goldar_b_min;
        $detail_laporan->goldar_ab_plus = $request ->goldar_ab_plus;
        $detail_laporan->goldar_ab_min = $request ->goldar_ab_min;
        $detail_laporan->goldar_o_plus = $request ->goldar_o_plus;
        $detail_laporan->goldar_o_min = $request ->goldar_o_min;
        $detail_laporan->goldar_tidak_tahu = $request ->goldar_tidak_tahu;
        $detail_laporan->belum_atau_tidak_bekerja = $request ->belum_atau_tidak_bekerja;
        $detail_laporan->aparatur_pejabat_negara = $request ->aparatur_pejabat_negara;
        $detail_laporan->tenaga_pengajar = $request ->tenaga_pengajar;
        $detail_laporan->wiraswasta = $request ->wiraswasta;
        $detail_laporan->pertanian_dan_peternakan = $request ->pertanian_dan_peternakan;
        $detail_laporan->nelayan = $request ->nelayan;
        $detail_laporan->agama_dan_kepercayaan = $request ->agama_dan_kepercayaan;
        $detail_laporan->pelajar_dan_mahasiswa = $request ->pelajar_dan_mahasiswa;
        $detail_laporan->tenaga_kesehatan = $request ->tenaga_kesehatan;
        $detail_laporan->pensiunan = $request ->pensiunan;
        $detail_laporan->pekerjaan_lainnya = $request ->pekerjaan_lainnya;
        $detail_laporan->tahun = $request ->tahun;
        $detail_laporan->semester = $request ->semester;
        $detail_laporan->save();
        return redirect ('masuk/kelurahan/create');
    }
    

    public function show($id)
    {
  
       $kecamatan = kecamatan::find($id);
        $detail_laporan=detail_laporan::orderBy('id','ASC')->with('kecamatan')->where('id_kelurahans',$id)->get();
        
        return view('kelurahan.tampil', compact('kecamatan','detail_laporan'));
        
    
    }

    public function edit($id)
    {
        //

       $kecamatan = kecamatan::find($id);
        $detail_laporan=detail_laporan::all()->where('id_kelurahans',$id);
        return view ('kelurahan.edit', compact('kecamatan','detail_laporan'));
    }

   
    public function update(Request $request, $id)
    {
        
        $detail_laporan = detail_laporan::find($id);
        $detail_laporan->id_kelurahans = $request ->id_kelurahans;
        $detail_laporan->sumber_data = $request ->sumber_data;
        $detail_laporan->desa = $request ->desa;
        $detail_laporan->kecamatan = $request ->kecamatan;
        $detail_laporan->kabupaten = $request ->kabupaten;
        $detail_laporan->provinsi = $request ->provinsi;
        $detail_laporan->jumlah_penduduk = $request ->jumlah_penduduk;
        $detail_laporan->jumlah_kk = $request ->jumlah_kk;
        $detail_laporan->luas_wilayah = $request ->luas_wilayah;
        $detail_laporan->kepadatan_penduduk = $request ->kepadatan_penduduk;
        $detail_laporan->perpindahan_penduduk = $request ->perpindahan_penduduk;
        $detail_laporan->jumlah_meninggal = $request ->jumlah_meninggal;
        $detail_laporan->perubahan_data = $request ->perubahan_data;
        $detail_laporan->wajib_ktp = $request ->wajib_ktp;
        $detail_laporan->islam = $request ->islam;
        $detail_laporan->kristen = $request ->kristen;
        $detail_laporan->katholik = $request ->katholik;
        $detail_laporan->hindu = $request ->hindu;
        $detail_laporan->budha = $request ->budha;
        $detail_laporan->konghucu = $request ->konghucu;
        $detail_laporan->kepercayaan_terhadap_tuhan_yme = $request ->kepercayaan_terhadap_tuhan_yme;
        $detail_laporan->laki_laki = $request ->laki_laki;
        $detail_laporan->perempuan = $request ->perempuan;
        $detail_laporan->belum_kawin = $request ->belum_kawin;
        $detail_laporan->kawin = $request ->kawin;
        $detail_laporan->cerai_hidup = $request ->cerai_hidup;
        $detail_laporan->cerai_mati = $request ->cerai_mati;
        $detail_laporan->usia0_4thn = $request ->usia0_4thn;
        $detail_laporan->usia5_9thn = $request ->usia5_9thn;
        $detail_laporan->usia10_14thn = $request ->usia10_14thn;
        $detail_laporan->usia15_19thn = $request ->usia15_19thn;
        $detail_laporan->usia20_24thn = $request ->usia20_24thn;
        $detail_laporan->usia25_29thn = $request ->usia25_29thn;
        $detail_laporan->usia30_34thn = $request ->usia30_34thn;
        $detail_laporan->usia35_39thn = $request ->usia35_39thn;
        $detail_laporan->usia40_44thn = $request ->usia40_44thn;
        $detail_laporan->usia45_49thn = $request ->usia45_49thn;
        $detail_laporan->usia50_54thn = $request ->usia50_54thn;
        $detail_laporan->usia55_59thn = $request ->usia55_59thn;
        $detail_laporan->usia60_64thn = $request ->usia60_64thn;
        $detail_laporan->usia65_69thn = $request ->usia65_69thn;
        $detail_laporan->usia70_74thn = $request ->usia70_74thn;
        $detail_laporan->usia_75thn_keatas = $request ->usia_75thn_keatas;
        $detail_laporan->lahir_thn_2018 = $request ->lahir_thn_2018;
        $detail_laporan->lahir_sebelum_thn_2018 = $request ->lahir_sebelum_thn_2018;
        $detail_laporan->pertumbuhan_penduduk_2016 = $request ->pertumbuhan_penduduk_2016;
        $detail_laporan->pertumbuhan_penduduk_2017 = $request ->pertumbuhan_penduduk_2017;
        $detail_laporan->pertumbuhan_penduduk_2018 = $request ->pertumbuhan_penduduk_2018;
        $detail_laporan->usia_sekolah_3_4_thn = $request ->usia_sekolah_3_4_thn;
        $detail_laporan->usia_sekolah_5_thn = $request ->usia_sekolah_5_thn;
        $detail_laporan->usia_sekolah_6_11_thn = $request ->usia_sekolah_6_11_thn;
        $detail_laporan->usia_sekolah_12_14_thn = $request ->usia_sekolah_12_14_thn;
        $detail_laporan->usia_sekolah_15_17_thn = $request ->usia_sekolah_15_17_thn;
        $detail_laporan->usia_sekolah_18_22_thn = $request ->usia_sekolah_18_22_thn;
        $detail_laporan->usia_4_18_thn_khusus = $request ->usia_4_18_thn_khusus;
        $detail_laporan->usia_5_6_thn_paud = $request ->usia_5_6_thn_paud;
        $detail_laporan->usia_7_12_thn_sd = $request ->usia_7_12_thn_sd;
        $detail_laporan->usia_12_15_thn_smp = $request ->usia_12_15_thn_smp;
        $detail_laporan->usia_16_18_thn_sma = $request ->usia_16_18_thn_sma;
        $detail_laporan->tidak_atau_belum_sekolah = $request ->tidak_atau_belum_sekolah;
        $detail_laporan->belum_tamat_sd = $request ->belum_tamat_sd;
        $detail_laporan->tamat_sd = $request ->tamat_sd;
        $detail_laporan->sltp = $request ->sltp;
        $detail_laporan->slta = $request ->slta;
        $detail_laporan->d1_dan_d2 = $request ->d1_dan_d2;
        $detail_laporan->d3 = $request ->d3;
        $detail_laporan->s1 = $request ->s1;
        $detail_laporan->s2 = $request ->s2;
        $detail_laporan->s3 = $request ->s3;
        $detail_laporan->goldar_a = $request ->goldar_a;
        $detail_laporan->goldar_b = $request ->goldar_b;
        $detail_laporan->goldar_ab = $request ->goldar_ab;
        $detail_laporan->goldar_o = $request ->goldar_o;
        $detail_laporan->goldar_a_plus = $request ->goldar_a_plus;
        $detail_laporan->goldar_a_min = $request ->goldar_a_min;
        $detail_laporan->goldar_b_plus = $request ->goldar_b_plus;
        $detail_laporan->goldar_b_min = $request ->goldar_b_min;
        $detail_laporan->goldar_ab_plus = $request ->goldar_ab_plus;
        $detail_laporan->goldar_ab_min = $request ->goldar_ab_min;
        $detail_laporan->goldar_o_plus = $request ->goldar_o_plus;
        $detail_laporan->goldar_o_min = $request ->goldar_o_min;
        $detail_laporan->goldar_tidak_tahu = $request ->goldar_tidak_tahu;
        $detail_laporan->belum_atau_tidak_bekerja = $request ->belum_atau_tidak_bekerja;
        $detail_laporan->aparatur_pejabat_negara = $request ->aparatur_pejabat_negara;
        $detail_laporan->tenaga_pengajar = $request ->tenaga_pengajar;
        $detail_laporan->wiraswasta = $request ->wiraswasta;
        $detail_laporan->pertanian_dan_peternakan = $request ->pertanian_dan_peternakan;
        $detail_laporan->nelayan = $request ->nelayan;
        $detail_laporan->agama_dan_kepercayaan = $request ->agama_dan_kepercayaan;
        $detail_laporan->pelajar_dan_mahasiswa = $request ->pelajar_dan_mahasiswa;
        $detail_laporan->tenaga_kesehatan = $request ->tenaga_kesehatan;
        $detail_laporan->pensiunan = $request ->pensiunan;
        $detail_laporan->pekerjaan_lainnya = $request ->pekerjaan_lainnya;
        $detail_laporan->tahun = $request ->tahun;
        $detail_laporan->semester = $request ->semester;
        $detail_laporan->save();



        return redirect('masuk/kelurahan/'.$id);

    }

 
    public function destroy($id)
    {
        
        $detail_laporan = detail_laporan::find($id);
        $detail_laporan->delete();

        return redirect('masuk/kelurahan');
    }
}
