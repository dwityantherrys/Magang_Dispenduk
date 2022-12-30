@extends('main.header')
@section('konten')
  <!--================Banner Area =================-->
        <section class="banner_area first">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-left pl-5 ml-5">
                        
                        <br />
                        <br />
                        <h3 style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;">Data Demografi</h3>
                        
                        <p style="text-shadow: 0 0 3px #000000, 0 0 5px #000000;font-weight:500;">Berapa jumlah penduduk di Kota Malang saat ini?<br>

                            Ketahui informasi datanya di beberapa kategori berikut</p>
                        <div class="row">
                        <div class="col" style=" 
                        width: 300px;
                        height: 90px;
                        border-radius:10px;
                        padding: 10px;
                        border: 5px solid rgb(22, 63, 144);
                        margin-right: 30px;
                        background-color:rgb(22, 63, 144);
                        ">
                             <p style="
                            text-align:center;
                            font-weight:500;
                            font-size:20px;
                            text-shadow: 0 0 3px #000000 ;
                            ">10.000 Jiwa</p>
                            <p style="
                            text-align:center;
                            font-weight:500;
                            font-size:15px;
                            margin-top:-40px;
                            text-shadow: 0 0 3px #000000 ;
                            ">
                            Jumlah Kepala Keluarga</p>
                            
                    </div>
                    <div class="col" style=" 
                        width: 300px;
                        height: 90px;
                        border-radius:10px;
                        padding: 10px;
                        border: 5px solid rgb(22, 63, 144);
                        margin-right: 400px;
                        background-color:rgb(22, 63, 144);
                        ">
                                <p style="
                            text-align:center;
                            font-weight:500;
                            font-size:20px;
                            text-shadow: 0 0 3px #000000 ;
                            ">10.000 Jiwa</p>
                            <p style="
                            text-align:center;
                            font-weight:500;
                            font-size:15px;
                            margin-top:-40px;
                            text-shadow: 0 0 3px #000000 ;
                            ">
                            Jumlah Penduduk</p>
                    </div>
                        </div>
					</div>
				</div>
            </div>

        </section>
        <!--================Banner Area =================-->

        <!--================ Facilities Area  =================-->
        <section class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <div class="boxuser">
                        <h3>Jumlah Penduduk Per <br>Akhir Juli 2022<br><br><span style="font-size:40px;">932.127 Jiwa</h3>
                        
                     <div class="boxuser2">
                        <h3>Jumlah Penduduk Per <br>Akhir Juli 2022</h3>
                    </div>
                    </div>
{{-- isi --}}
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->

        <!--================ Latest Blog Area  =================-->

@include('main.footer')
@endsection
