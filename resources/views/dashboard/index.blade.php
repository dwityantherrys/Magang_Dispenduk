 <link rel="stylesheet" type="text/css" href="{{ asset('template/docs/css/calen.css') }}">
     

@extends('app')
@section('title')
Dashboard
@endsection
@section('dashboard')
active
@endsection
@section('content')
    <main class="app-content">
      
      <div class="row">
        <div class="col-6" style="margin-top: 100px">
          <div class="box_not" style="position: relative">
            
            <div class="not_admin" style="position: absolute;top:75px;">
              <p><span style="font-size: 20px;font-weight:bold">Halo</span><br>
              Hari ini kamu memiliki 9 notifikasi<p>
        
            </div>
                   <img src="image/girl.png" style="position:absolute;margin-left:300px;width:150px;height:auto">
          </div>

        </div>
        <div class="col-6">
					<div class="elegant-calencar d-md-flex">
						<div class="wrap-header d-flex align-items-center img" style="background-image: url(image/bg.jpg)  ;">
				      <p id="reset">Today</p>
			        <div id="header" class="p-0">
								<!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
		            <div class="head-info">
		            	<div class="head-month"></div>
		                <div class="head-day"></div>
		            </div>
		            <!-- <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div> -->
			        </div>
			      </div>
			      <div class="calendar-wrap">
			      	<div class="w-100 button-wrap">
				      	<div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
				      	<div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
			      	</div>
			        <table id="calendar">
		            <thead>
		                <tr>
	                    <th>Sun</th>
	                    <th>Mon</th>
	                    <th>Tue</th>
	                    <th>Wed</th>
	                    <th>Thu</th>
	                    <th>Fri</th>
	                    <th>Sat</th>
		                </tr>
		            </thead>
		            <tbody>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
	                <tr>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                </tr>
		            </tbody>
			        </table>
			      </div>
			    </div>
				</div>
			</div>
      </div>

      <div class="row">
        <div class="col">
          <div class="box_not1" style="color:black;">
        
          </div>
        </div>
        
      </div>
      <div class="row">
        
        <div class="col">
          <div class="box_not2"style="color:black;">
          </div>
        </div>
      </div>
    </main>
      <script src="{{ asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/main2.js') }}"></script>

    
@endsection
