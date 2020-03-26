	  	@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>institute</title>
	    @endsection

	    @section('content') 
	        <div class="slider-area ">
			    <div class="slider-active-2 owl-carousel nav-style-2">
			        <div class="single-slider slider-height-3 bg-img pt-170" style="background-image:url({{asset('web/img/slider/slider-6.jpg')}});"> </div>
			        <div class="single-slider slider-height-3 bg-img pt-170" style="background-image:url({{asset('web/img/slider/slider-7.jpg')}});">
			        </div>
			    </div>
			</div>
			<div class="about-us pt-50 pb-70">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-6 col-md-6">
			                <div class="about-content">
			                    <div class="section-title section-title-green mb-10">
			                        <h2>About <span>Us</span></h2>
			                        <p>CareerON had been incepted in the year 2018 with a vision to create awareness and guide students to choose a subject to study.</p>                        
			                    </div>
			                    <p><strong class="orange">What in Career Counselling is all about ????</strong></p>
			                    <p>After important milestones in education each one of us faces this question ‘what next’ after class 10th, after class 12th and after graduation. Career Counselling can help in all the major milestones in one's career. Firstly, to decide a stream and subject combinations, to decide the graduation course, and then, to decide the postgraduation and careeroption!<br>
			                    It is at this point that a Career Counselling can help the child sail through these turbulent times. &nbsp;&nbsp; <a class="default-btn" href="about.php">Read More</a></p>
			                </div>
			            </div>
			            <div class="col-lg-6 col-md-6">
			                <div class="about-img ind-abt mt-90">
			                    <img src="{{asset('web/img/banner/index-about.jpg')}}" alt="">                    
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url({{asset('web/img/bg/bg-3.jpg')}});">
			    <div class="container">
			        <div class="section-title mb-75">
			            <h2><span>Our</span> Event</h2>
			            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
			        </div>
			        <div class="event-active owl-carousel nav-style-1">
			            <div class="single-event event-white-bg">
			                <div class="event-img">
			                    <a href="event-details.html"><img src="{{asset('web/img/event/1.jpg')}}" alt=""></a>
			                    <div class="event-date-wrap">
			                        <span class="event-date">1st</span>
			                        <span>Dec</span>
			                    </div>
			                </div>
			                <div class="event-content">
			                    <h3><a href="event-details.html">Aempor incididunt ut labore ejam.</a></h3>
			                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
			                    <div class="event-meta-wrap">
			                        <div class="event-meta">
			                            <i class="fa fa-location-arrow"></i>
			                            <span>Mascot Plaza ,Uttara</span>
			                        </div>
			                        <div class="event-meta">
			                            <i class="fa fa-clock-o"></i>
			                            <span>11:00 am</span>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="single-event event-white-bg">
			                <div class="event-img">
			                    <a href="event-details.html"><img src="{{asset('web/img/event/2.jpg')}}" alt=""></a>
			                    <div class="event-date-wrap">
			                        <span class="event-date">10th</span>
			                        <span>Dec</span>
			                    </div>
			                </div>
			                <div class="event-content">
			                    <h3><a href="event-details.html">Global Conference on Business.</a></h3>
			                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
			                    <div class="event-meta-wrap">
			                        <div class="event-meta">
			                            <i class="fa fa-location-arrow"></i>
			                            <span>Shubastu ,Dadda</span>
			                        </div>
			                        <div class="event-meta">
			                            <i class="fa fa-clock-o"></i>
			                            <span>08:30 am</span>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="single-event event-white-bg">
			                <div class="event-img">
			                    <a href="event-details.html"><img src="{{asset('web/img/event/3.jpg')}}" alt=""></a>
			                    <div class="event-date-wrap">
			                        <span class="event-date">1st</span>
			                        <span>Dec</span>
			                    </div>
			                </div>
			                <div class="event-content">
			                    <h3><a href="event-details.html">Academic Conference Maui.</a></h3>
			                    <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
			                    <div class="event-meta-wrap">
			                        <div class="event-meta">
			                            <i class="fa fa-location-arrow"></i>
			                            <span>Banasree ,Rampura</span>
			                        </div>
			                        <div class="event-meta">
			                            <i class="fa fa-clock-o"></i>
			                            <span>10:00 am</span>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<div class="choose-us-area pt-50 pb-50">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-6">
			                <img src="{{asset('web/img/bg/iISO RGTM.jpg')}}"  style="width: 100%;">
			            </div>
			            <div class="col-lg-6">
			                <div class="choose-newsletter text-center ml-40">
			                    <h4>CONTACT US </h4><br>
			                    <form method="post" action="{{asset('web/SendGrid-API/send-email.php')}}">                        
			                        <input name="name" placeholder="Name" type="text">                        
			                        <input name="phone" placeholder="Phone" type="text">      
			                        <input name="email" placeholder="E-mail" type="email">                  
			                        <input name="sunject" placeholder="sunject" type="text">
			                        <textarea name="message" placeholder="Message"></textarea>
			                        <button class="default-btn submit" type="submit" style="background-color: #2c2254;    text-align: center;color: #fff;">Submit</button>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
    	@endsection   

      