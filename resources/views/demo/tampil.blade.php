@extends('main.header')

@section('konten')
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            
        </section>
        <!--================Breadcrumb Area =================-->

        <!--================Breadcrumb Area =================-->
        <section class="gallery_area section_gap">
            <div class="warna-tek">
            <div class="container">
                <div class=" text-center" style="background-color:#0F285C;border: 2px solid;border-color:black;height:200px;border-radius:10px; position:relative">
                   <img src="image/bis.png" style="position:absolute;float: right;height:100%;margin-left:340px">
                   <div class="row" style="margin-left:15px">
                  <div class="demobox" style="float: left;padding-top:15px;padding-left:15px"> <h3>Data Penduduk</h3></div>
                   </div>
                   <div class="row" style="margin-left:15px">
                  <div class="demobox" style="float: left;padding-top:15px;padding-left:15px"> 
                  <h3 id="date"><script>
                    setInterval(()=>{

    var d = new Date();
    
    var date = d.getDate();
    var year = d.getFullYear();
    var month = d.getMonth();
    var monthArr = ["January", "February","March", "April", "May", "June", "July", "August", "September", "October", "November","December"];
    month = monthArr[month];
    var today= d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    document.getElementById("date").innerHTML=date+" "+month+", "+year+" | "+today+"";
    },1000)
    
</script>

</h3>


</div>
                   </div>
                   <div class="row" style="margin-left:15px">
                   <div class="demobox" style="float: left;padding-top:15px;padding-left:15px"> <a class="btn btn-light" href="#">Unduh</a></div>
                   </div>
                </div>
                    
                 
                 <div class="row">
                   
                    <div class="col-6" style="color:black;font-weight:bold;padding-top:15px;padding-bottom:15px">Kelurahan</div>
                    @foreach($kecamatan as $tampil)
    
    
   @endforeach
   
                     <div class="w-100"></div>
          
<div class="col-6" style="margin-top:12px" >
  <button class="alright btn btn-light dropdown-toggle" type="button" 
  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
  alt="kelurahan" aria-placeholder="kelurahan" style="width:80%; border:1px solid;">
 
  </button>
  <ul class=" dropdown-menu" style="
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
    width:76%;
" aria-labelledby="dropdownMenu2">
      @foreach($kecamatan as $tampil)
    <li><a class="" href="{{ route('demo.show' , $tampil->id) }}">{{$tampil->kelurahan}}</a></li>
    <br>
   @endforeach
  </ul>
</div>

  </div>
  
                <div class="row imageGallery1" id="gallery">

                    {{-- @foreach($infovaksin as $tampil)
                    <div class="col-md-4 align-items-stretch card" style="margin-bottom: 15px; padding-top: 15px;">
                    <div class="gallery_item">
                        <div class="gallery_img">
                            <img src="{{$tampil->gambar}}"  alt=""  width="350px", height="200px">
                            <table  width="95%">

                                <tr>
                                    <th>Lokasi</th>
                                    <td>:</td>
                                    <td>{{$tampil->lokasi}}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>:</td>
                                    <td>{{$tampil->tanggal}}</td>
                                </tr>
                                <tr>
                                    <th>Waktu</th>
                                    <td>:</td>
                                    <td>{{$tampil->waktu}}</td>
                                </tr>
                                <tr>
                                    <th Valign="top">Keterangan</th>
                                    <td Valign="top">:</td>
                                    <td>{{$tampil->keterangan}}</td>
                                </tr>

                            </table>
                            <div class="hover">
                            	<a class="light" href="{{$tampil->gambar}}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach --}}
                </div>

                </div>
            </div></div>
        </div>
        </section>
        <!--================Breadcrumb Area =================-->
@include('main.footer')
@endsection
