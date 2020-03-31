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
			            <h2>Result</h2>
			        </div>
			    </div>
			    <div class="breadcrumb-bottom">
			        <div class="container">
			            <ul>
			                <li><a href="{{route('web.index')}}">Home</a> <span><i class="fa fa-angle-double-right"></i> Result</span></li>
			            </ul>
			        </div>
			    </div>
			</div>		    
			<div class="about-us pt-50 pb-50">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-8 col-md-12 mx-auto">
			                <div class="result-content mb-30">
			                	<div class="section-title section-title-green mb-50">
			                        <h2>Check <span>Result</span></h2>                      
			                    </div>
			                    <div class="contact-form">
				                    <form id="contact-form" action="#" method="post" class="row">
				                        <div class="col-md-7">
				                        	<label>Enter Student ID*</label>
					                        <input name="name" placeholder="Student ID*" type="text">
				                        </div>
				                        <div class="col-md-5">	
				                        <label>Enter Addmission Date*</label>		                        	
					                        <input name="subject" type="date">
				                        </div>
				                        <div class="col-md-3 mx-auto text-center">
				                        	<button class="submit btn-style" type="submit">CHECK</button>
				                        </div>
				                    </form>			                    	
			                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="row mt-30">
			            <div class="col-lg-10 col-md-12 mx-auto">
			                <div class="result-content-table mb-30">
			                    <div class="row">
			                        <div class="col-md-6">
			                        	<p><strong>Student Name : </strong>Raju Ahmed</p>
			                        </div>
			                        <div class="col-md-6">
			                        	<p><strong>Father Name : </strong>Samsul Ahmed</p>
			                        </div>
			                        <div class="col-md-4">
			                        	<p><strong>Course : </strong>DSC</p>
			                        </div>
			                        <div class="col-md-4">
			                        	<p><strong>Registration No : </strong>ADSH1802FG0</p>
			                        </div>  
			                        <div class="col-md-4">
			                        	<p><strong>Date of Birth : </strong>12-3-2020</p>
			                        </div>
			                        <div class="col-md-4">
			                        	<p><strong>Duration : </strong>12 Months</p>
			                        </div>
			                        <div class="col-md-4">
			                        	<p><strong>Date of Admission : </strong>12-3-2020</p>
			                        </div>  
			                        <div class="col-md-4">
			                        	<p><strong>Date of Examination : </strong>12-3-2020 to 12-3-2020</p>
			                        </div>
			                        <div class="col-md-4">
			                        	<p class="bdr-bt"><strong>Result : </strong>Passed</p>
			                        </div> 
			                        <div class="col-md-4">
			                        	<p class="bdr-bt"><strong>Percentage : </strong>74%</p>
			                        </div>  
			                        <div class="col-md-4">
			                        	<p class="bdr-bt"><strong>Grade : </strong>A</p>
			                        </div>                  	
			                    </div>
			                </div>
			            </div>
			            <div class="col-lg-2 col-md-12 mx-auto" style="padding: 0">
			                <div class="result-content-table mb-30">
			                    <div class="row">
			                        <div class="col-md-12">
			                        	<p><strong>Grade- A = </strong>60% & above.</p>
			                        </div>
			                        <div class="col-md-12">
			                        	<p><strong>Grade- B = </strong>45% to 59%.</p>
			                        </div>
			                        <div class="col-md-12">
			                        	<p><strong>Grade- C = </strong>33% to 44%.</p>
			                        </div>
			                        <div class="col-md-12">
			                        	<p class="bdr-bt"><strong>Grade- D = </strong>below 33% (Fail).</p>
			                        </div>            	
			                    </div>
			                </div>
			            </div>			        	
			        </div>
			    </div>
			</div>
    	@endsection   

      