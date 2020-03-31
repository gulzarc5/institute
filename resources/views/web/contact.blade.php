	  	@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>Parakiaki Academy</title>
	     <!--<meta name="description" content="">-->
	     <!--<meta name="author" content="">-->
	     <!--<meta name="keywords" content="">-->
	    @endsection

	    @section('content') 
	        <div class="breadcrumb-area">
			    <div class="breadcrumb-top default-overlay bg-img pt-30 pb-30">
			        <div class="container">
			            <h2>Contact</h2>
			        </div>
			    </div>
			    <div class="breadcrumb-bottom">
			        <div class="container">
			            <ul>
			                <li><a href="{{route('web.index')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact</span></li>
			            </ul>
			        </div>
			    </div>
			</div>
			<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14327.03325140621!2d91.79077583129151!3d26.139422181432227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdowntown!5e0!3m2!1sen!2sin!4v1565598995721!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Stay <span>Connected</span></h2>
                    </div>
                    <form id="contact-form" action="http://demo.hasthemes.com/glaxdu-v1/glaxdu/assets/php/mail.php" method="post">
                        <input name="name" placeholder="Name*" type="text">
                        <input name="email" placeholder="Email*" type="email">
                        <input name="phone" placeholder="Phone*" type="number">
                        <input name="subject" placeholder="Subject*" type="text">
                        <textarea name="message" placeholder="Message"></textarea>
	                    <p class="form-messege"></p>
                        <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    	@endsection   

      