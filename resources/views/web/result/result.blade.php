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
			@if (isset($student) && !empty($student))
				<div class="row mt-30">
					<div class="col-lg-10 col-md-12 mx-auto">
						<div class="result-content-table mb-30">
							<div class="row">
								<div class="col-md-6">
									<p><strong>Student Name : </strong>{{$student->name}}</p>
								</div>
								<div class="col-md-6">
									<p><strong>Father Name : </strong>{{$student->father_name}}</p>
								</div>
								@if (isset($result) && !empty($result))
									<div class="col-md-4">
										<p><strong>Course : </strong>{{$result->course_name}}</p>
									</div>
								@endif								
								<div class="col-md-4">
									<p><strong>Registration No : </strong>{{$student->student_id}}</p>
								</div>  
								<div class="col-md-4">
									<p><strong>Date of Birth : </strong>{{$student->dob}}</p>
								</div>
								@if (isset($result) && !empty($result))
								<div class="col-md-4">
									<p><strong>Duration : </strong>{{$result->course_duration}} Months</p>
								</div>
								@endif	
								<div class="col-md-4">
									<p><strong>Date of Admission : </strong>{{$student->registration_date}}</p>
								</div> 
								@if (isset($result) && !empty($result)) 
								<div class="col-md-4">
									<p><strong>Date of Examination : </strong>{{$result->exam_start_date}} to {{$result->exam_end_date}}</p>
								</div>								
								<div class="col-md-4">
									<p class="bdr-bt"><strong>Result : </strong>
										@if ($result->result_status == '1')
											Passed
										@else
											Fail
										@endif
									</p>
								</div> 
								<div class="col-md-4">
									<p class="bdr-bt"><strong>Percentage : </strong>{{$result->percentage}}%</p>
								</div>  
								<div class="col-md-4">
									<p class="bdr-bt"><strong>Grade : </strong>{{$result->grade}}</p>
								</div> 
								@endif                 	
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
					<center>
						<a href="{{route('web.result.result')}}" class="btn btn-warning">Back</a>
					</center>	        	
				</div>
			@else
				<div class="row">
					<div class="col-lg-8 col-md-12 mx-auto">
						<div class="result-content mb-30">
							<div class="section-title section-title-green mb-50">
								<h2>Check <span>Result</span></h2>  
								@if (Session::has('message'))
									<div class="alert alert-success" >{{ Session::get('message') }}</div>
								@endif
								@if (Session::has('error'))
									<div class="alert alert-danger">{{ Session::get('error') }}</div>
								@endif                    
							</div>
							<div class="contact-form">
								{{-- <form id="contact-form" action="#" method="post" class="row"> --}}
								{{ Form::open(['method' => 'post','route'=>'web.result.view','class'=>'row'])}}   
									<div class="col-md-7">
										<label>Enter Student ID*</label>
										<input name="student_id" placeholder="Student ID*" type="text">
										@if($errors->has('student_id'))
											<span  role="alert" style="color:red">
												<strong>{{ $errors->first('student_id') }}</strong>
											</span>
										@enderror
									</div>
									<div class="col-md-5">	
									<label>Enter Date Of Birth*</label>		                        	
										<input name="dob" type="date">
										@if($errors->has('dob'))
											<span  role="alert" style="color:red">
												<strong>{{ $errors->first('dob') }}</strong>
											</span>
										@enderror
									</div>
									<div class="col-md-3 mx-auto text-center">
										<button class="submit btn-style" type="submit">CHECK</button>
									</div>

								{{Form::close()}}		                    	
							</div>
						</div>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection   

@section('script')
	
@endsection

      