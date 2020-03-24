@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
	<div class="col-md-2"></div>
	<div class="col-md-8" style="margin-top:50px;">
	    <div class="x_panel">

	        <div class="x_title">
	            <h2>Add New Course</h2>
	            <div class="clearfix"></div>
	        </div>
            <div>
                 @if (Session::has('message'))
                    <div class="alert alert-success" >{{ Session::get('message') }}</div>
                 @endif
                 @if (Session::has('error'))
                    <div class="alert alert-danger" >{{ Session::get('error') }}</div>
                 @endif

            </div>
	        <div>
	            <div class="x_content">
	            	{{ Form::open(['method' => 'post','route'=>'admin.course_insert','enctype'=>'multipart/form-data']) }}

                    <div class="form-group">
	            		<label for="name">Course Name</label>
                        <input class="form-control" placeholder="Enter Course name" name="name" type="text" id="name">
                        @if($errors->has('name'))
	                    	<span class="invalid-feedback" role="alert" style="color:red">
		                        <strong>{{ $errors->first('name') }}</strong>
		                    </span>
		              	@enderror
                    </div>
                    
                    <div class="form-group">
	            		<label for="duration">Course Duration in Months</label>
                        <input class="form-control" placeholder="Enter Course Duration In Months" name="duration" type="number" id="name">
                        @if($errors->has('duration'))
	                    	<span class="invalid-feedback" role="alert" style="color:red">
		                        <strong>{{ $errors->first('duration') }}</strong>
		                    </span>
		              	@enderror
	            	</div>

                    <div class="form-group">
	            		<label for="total_exam">How Many Exam In This Course</label>
                        <input class="form-control" placeholder="Enter Total Exam" name="total_exam" type="number" id="name">
                        @if($errors->has('total_exam'))
	                    	<span class="invalid-feedback" role="alert" style="color:red">
		                        <strong>{{ $errors->first('total_exam') }}</strong>
		                    </span>
		              	@enderror
	            	</div>

	            	<div class="form-group">
                        {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}	                	
	            	</div>
	            	{{ Form::close() }}	            	

	            </div>
	        </div>
	    </div>
	</div>

	<div class="col-md-2"></div>

	<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Course List</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">                
                                    <th class="column-title">Sl No. </th>
                                    <th class="column-title">Name</th>
                                    <th class="column-title">Duration</th>
                                    <th class="column-title">Total Exam</th>
                                    <th class="column-title">Action</th>
                            </thead>

                            <tbody>

                            	@if(isset($course) && !empty($course) && count($course) > 0)
                            	@php
                            		$count = 1;
                            	@endphp

                            	@foreach($course as $item)
                                <tr class="even pointer">
                                    <td class=" ">{{ $count++ }}</td>
                                    <td class=" ">{{ $item->name }}</td>
                                    <td>{{ $item->duration}} Months</td>                                    
                                    <td>{{ $item->total_exam}} Exams</td>                                	
                                    <td class=" ">
                                       <a href="#" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                	<tr>
	                                    <td colspan="6" style="text-align: center">Sorry No Course Found</td>
                                	</tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
	</div>


 @endsection