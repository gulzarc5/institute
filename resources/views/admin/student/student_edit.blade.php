@extends('admin.template.admin_master')
@section('content')
<div class="right_col" role="main">
    <div class="row">
    	<div class="col-md-12" style="margin-top:50px;">
    	    <div class="x_panel">

    	        <div class="x_title">
    	            <h2>Student Edit Form</h2>
    	            <div class="clearfix"></div>
    	        </div>
                <div>
                     @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif

                </div>
    	        <div>
                    @if (isset($student) && !empty($student))                    
                        <div class="x_content">
                    
                            {{ Form::open(['method' => 'post','route'=>'admin.student_update']) }}
                            <input type="hidden" name="student_id" value="{{$student->id}}">
                            <div class="well" style="overflow: auto">
                                <div class="form-row mb-10">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name"  placeholder="Enter Student Name"  value="{{ $student->name}}">
                                    @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="father">Father Name</label>
                                    <input type="text" class="form-control" name="father"  placeholder="Enter Father Name" value="{{ $student->father_name}}" >
                                        @if($errors->has('father'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('father') }}</strong>
                                            </span>
                                        @enderror
                                    </div> 

                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="size_wearing">Gender <span class="required-color">*</span></label>
                                        <p style="padding-bottom: 6px; margin-top: 8px;">
                                            @if ($student->gender == 'M')
                                                Male:
                                                <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" /> FeMale:
                                                <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                            @else
                                                Male:
                                                <input type="radio" class="flat" name="gender" id="genderM" value="M" /> FeMale:
                                                <input type="radio" class="flat" name="gender" id="genderF" value="F" checked=""  />
                                            @endif                                           
                                        </p>
                                        @if($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @enderror
                                    </div> 
                                                                
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" name="dob"  value="{{ $student->dob}}">
                                        @if($errors->has('dob'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('dob') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="caste">Caste</label>
                                        <select class="form-control" name="caste" >
                                            <option value="">Select Caste</option>
                                            <option value="1" {{ $student->caste == 1 ? 'selected' : '' }}>General</option>
                                            <option value="2" {{ $student->caste == 2 ? 'selected' : '' }}>SC</option>
                                            <option value="3" {{ $student->caste == 3 ? 'selected' : '' }}>ST</option>
                                            <option value="4" {{ $student->caste == 4 ? 'selected' : '' }}>OBC</option>
                                            <option value="5" {{ $student->caste == 5 ? 'selected' : '' }}>MOBC</option>
                                        </select>
                                        @if($errors->has('caste'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('caste') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="course">Select Course</label>
                                        <select class="form-control" name="course" >
                                            <option value="">Select Course</option>
                                            @if (isset($course) && !empty($course))
                                                @foreach ($course as $item)    
                                                    @if ($item->id == $student->course_id)
                                                    <option value="{{$item->id}}" {{ old('course') == $item->id ? 'selected' : '' }} selected>{{$item->name}}</option>
                                                    @else
                                                    <option value="{{$item->id}}" {{ old('course') == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                        @if($errors->has('course'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('course') }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-row mb-3">
                                        <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="highest_qualification">Highest Qualification</label>
                                        <input type="text" class="form-control" name="highest_qualification" placeholder="Enter Highest Qualification"  value="{{ $student->highest_qualification}}">
                                            @if($errors->has('highest_qualification'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('highest_qualification') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="reg_date">Registration Date</label>
                                        <input type="date" class="form-control" name="reg_date"  value="{{ $student->registration_date}}">
                                        @if($errors->has('reg_date'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('reg_date') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="well" style="overflow: auto">
                                <div class="form-row mb-10">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" name="state" placeholder="Enter State Name"  value="{{ $student->state}}">
                                        @if($errors->has('state'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" placeholder="Enter City Name"  value="{{ $student->city}}">
                                        @if($errors->has('city'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="pin">Pin</label>
                                        <input type="number" class="form-control" name="pin" placeholder="Enter Pin Code"  value="{{ $student->pin}}">
                                        @if($errors->has('pin'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('pin') }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                        <label for="address">Type Address</label>
                                        <textarea class="form-control" rows="6" name="address" placeholder="Type Address">{{ $student->address}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">    	            	
                                {{ Form::submit('Save', array('class'=>'btn btn-success')) }}  
                                <a href="#" class="btn btn-danger" onclick="window.close()">Close</a>
                            </div>
                            {{ Form::close() }}

                        </div>    
                    @endif
    	        </div>
    	    </div>
    	</div>
    	{{-- <div class="col-md-2"></div> --}}
    </div>
</div>
@endsection

@section('script')

 @endsection


        
    