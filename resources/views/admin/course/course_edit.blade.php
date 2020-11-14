@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
	<div class="col-md-2"></div>
	<div class="col-md-8" style="margin-top:50px;">
	    <div class="x_panel">

	        <div class="x_title">
	            <h2>Edit Course</h2>
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
                @if (isset($course) && !empty($course))
                    <div class="x_content">
                        {{ Form::open(['method' => 'post','route'=>'admin.course_update']) }}
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input class="form-control" placeholder="Enter Course name" name="name" type="text" value="{{$course->name}}">
                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="duration">Course Duration in Months</label>
                            <input class="form-control" placeholder="Enter Course Duration In Months" name="duration" type="number" value="{{$course->duration}}">
                            @if($errors->has('duration'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('duration') }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}	                	
                        </div>
                        {{ Form::close() }}	            	

                    </div>
                @endif
	        </div>
	    </div>
	</div>
	</div>


 @endsection