@extends('web.templete.master')

{{-- META --}}
@section('meta')
	<title>institute</title>
	<style>.single-event .event-content ul li:before {left: 8%;}</style>
@endsection

@section('content') 
	<div class="slider-area ">
		<div class="slider-active-2 owl-carousel nav-style-2">
			<div class="single-slider slider-height-3 bg-img pt-170" style="background-image:url({{asset('web/img/slider/slider-6.jpg')}});"> </div>
			<div class="single-slider slider-height-3 bg-img pt-170" style="background-image:url({{asset('web/img/slider/slider-7.jpg')}});"> </div>
		</div>
	</div>
	<div class="about-us pt-50 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="about-content">
						<div class="section-title section-title-green mb-10">
							<h2>About <span>Us</span></h2>
							<p>Thank you for visiting RISING GLOBE TECHNOLOGY & MANAGEMENT, RGTM, Academy for IT & Management;</p>                       
						</div>
						<p> RGTM was setup on 02.08.2017 with goal to serve Information Technology. It was started up as a partnership venture and Regd. as Educational Societies under Govt. of Assam Act I.P of 1932 & Act XXI OF 1860, bearing Registration No-RF/HAI/183/A/37 of 2017-2018. It is also ISO 9001:2015 Certified Institution under Govt. of India.<br>
						It believes in the foundation of technology that computer science has brought new opportunities and challenges to traditional study style, and has changed the foundational concepts in education
						&nbsp;&nbsp; <a class="default-btn" href="{{route('web.about.about')}}">Read More</a></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="about-img ind-abt mt-30">
						<img src="{{asset('web/img/banner/index-about.jpg')}}" alt="">                    
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="about-content">
						<div class="section-title section-title-green mb-10">
							<h2>Director <span>Message</span></h2>
							<p>“A good education is the first step to building a stable career”</p>                       
						</div>
						<p> It is my privilege to welcome you to RGTM, Academy for IT & Management and invite you to explore the multidimensional facts of this Technical Institute using the official website. The Institute has marked its presence as a leading teaching Institute. The Institute challenging and inspiring environment designed to mould students into leaders of tomorrow. The Institute is headed by a competent well experienced dedicated and devoted faculty.
							&nbsp;&nbsp; <a class="default-btn" href="{{route('web.about.about')}}">Read More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="event-area bg-img default-overlay pt-50 pb-50" style="background-image:url({{asset('web/img/bg/bg-3.jpg')}});">
		<div class="container">
			<div class="section-title section-title-green mb-50">
				<h2><span>Our</span> Courses</h2>
				<p>Our various courses to help you to make a carrer </p>
			</div>
			<div class="event-active owl-carousel nav-style-1">
						
				<div class="single-event event-white-bg">
					<div class="event-content" style="min-height: 393px;">
						<h3><a>CERTIFICATE IN BASIC COMPUTER APPLICATION (CBCA)</a></h3>
						<p>Eligibility- HSLC</p>
						<ul>
							<li>Introduction of Computer Fundamentals.</li>
							<li>Paint.</li>
							<li>Notepad.</li>
							<li>WordPad.</li>
							<li>M.S Word.</li>
							<li>M.S Excel.</li>
							<li>M.S Power Point.</li>
							<li>M.S Access.</li>
							<li>Internet.</li>
						</ul>
						<div class="event-meta-wrap">
							<div class="event-meta">
								<i class="fa fa-clock-o"></i>
								<span>3 Months</span>
							</div>
						</div>
					</div>
				</div>

				<div class="single-event event-white-bg">
					<div class="event-content" style="min-height: 393px;">
						<h3><a>CERTIFICATE IN OFFICE AUTOMATION (COA)</a></h3>
						<p>Eligibility- HSLC</p>
						<ul>
							<li>Introduction of Computer Fundamentals.</li>
							<li>Paint.</li>
							<li>Notepad.</li>
							<li>WordPad.</li>
							<li>M.S Word.</li>
							<li>M.S Excel.</li>
							<li>M.S Power Point.</li>
							<li>M.S Access.</li>
							<li>Office Work.</li>
							<li>Internet.</li>
						</ul>
						<div class="event-meta-wrap">
							<div class="event-meta">
								<i class="fa fa-clock-o"></i>
								<span>3 Months</span>
							</div>
						</div>
					</div>
				</div>

				<div class="single-event event-white-bg">
					<div class="event-content" style="min-height: 393px;">
						<h3><a>CERTIFICATE IN DESK TOP PUBLISHING (CDTP)</a></h3>
						<p>Eligibility- HSLC</p>
						<ul>
							<li>Introduction of Computer Fundamentals.</li>
							<li>Paint.</li>
							<li>Notepad.</li>
							<li>WordPad.</li>
							<li>M.S Word.</li>
							<li>Page Maker.</li>
							<li>Photoshop.</li>
							<li>English & Bengali Type Writing.</li>
							<li>Internet.</li>
						</ul>
						<div class="event-meta-wrap">
							<div class="event-meta">
								<i class="fa fa-clock-o"></i>
								<span>3 Months</span>
							</div>
						</div>
					</div>
				</div>

				<div class="single-event event-white-bg">
					<div class="event-content" style="min-height: 393px;">
						<h3><a>CERTIFICATE IN TYPE WRITING (CTW)</a></h3>
						<p>Eligibility- HSLC</p>
						<ul>
							<li>Bengali.</li>
							<li>Hindi.</li>
							<li>Assamise.</li>
						</ul>
						<div class="event-meta-wrap">
							<div class="event-meta">
								<i class="fa fa-clock-o"></i>
								<span>3 Months</span>
							</div>
						</div>
					</div> 
				</div>

				<div class="single-event event-white-bg">
					<div class="event-content" style="min-height: 393px;">
						<h3><a>CERTIFICATE IN SPOKEN ENGLISH (CSE)</a></h3>
						<p>Eligibility- HSLC</p>
						<ul>
							<li>Tense</li>
							<li>Word Stock.</li>
							<li>Personality development.</li>
							<li>Voice Clarity.</li>
							<li>Presentation.</li>	
						</ul>
						<div class="event-meta-wrap">
							<div class="event-meta">
								<i class="fa fa-clock-o"></i>
								<span>3 Months</span>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-3 mx-auto text-center">
					<a class="default-btn mt-50" style="font-size: 20px;" href="{{route('web.courses.courses')}}">More Corses</a>
				</div>
			</div>
		</div>
	</div>
	<div class="choose-us-area pt-50 pb-50">
		<div class="container">
			<div class="row">
				{{-- <div class="col-lg-6">
					<img src="{{asset('web/img/bg/iISO RGTM.jpg')}}" class="certificate">
				</div> --}}
				<div class="col-lg-2 mt-30"></div>
				<div class="col-lg-8 mt-30">
					<div class="choose-newsletter pb-70">
						<div class="section-title mb-50">
							<h2><span>Contact</span> Us</h2>
							@if (Session::has('message'))
							<p class="alert alert-success">Thank You For Sending Us a Query We Will Back To You Soon</p>
							@endif
						</div>
						<form method="post" action="{{route('web.send_mail')}}">       
							@csrf                 
							<input name="name" placeholder="Name" type="text" required>                        
							<input name="phone" placeholder="Phone" type="text" required>      
							<input name="email" placeholder="E-mail" type="email" required>                  
							<input name="subject" placeholder="subject" type="text" required>
							<textarea name="message" placeholder="Message" required></textarea>
							<button class="default-btn submit" type="submit" style="background-color: #2c2254;    text-align: center;color: #fff;">Submit</button>
						</form>
					</div>
				</div>
				<div class="col-lg-2 mt-30"></div>
			</div>
		</div>
	</div>
@endsection   


@section('script')

	@if (Session::has('message'))
		<script>
			$("html, body").animate({ scrollTop: 1850 }, "slow");
		</script>	
	@endif
@endsection

      