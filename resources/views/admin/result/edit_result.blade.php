@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
	<div class="col-md-2"></div>
	<div class="col-md-8" style="margin-top:50px;">
	    <div class="x_panel">

	        <div class="x_title">
	            <h2>Add Student Result</h2>
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
                @if (isset($student) && !empty($student))
                    <div class="x_content">
                        {{ Form::open(['method' => 'post','route'=>'admin.student_result_update']) }}
                        <input type="hidden" name="result_id" value="{{$student->id}}">
                        <div class="form-group">
                            <label for="name">Registration Id</label>
                            <input class="form-control"  type="text" disabled value="{{$student->student_registration_id}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Registration Date</label>
                            <input class="form-control"  type="text" disabled value="{{$student->registration_date}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input class="form-control"  type="text" disabled value="{{$student->student_name}}">
                        </div>

                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input class="form-control"  type="text" disabled value="{{$student->course_name}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Course Duration</label>
                            <input class="form-control"  type="text" disabled value="{{$student->course_duration}} Months">
                        </div>

                        {{-- <div class="form-group">
                            <label for="s_date">Exam Start Date</label>
                            <input class="form-control" name="s_date" type="date" required value="{{$student->exam_start_date}}">
                            @if($errors->has('s_date'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('s_date') }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="e_date">Exam End Date</label>
                            <input class="form-control" name="e_date" type="date" value="{{$student->exam_end_date}}" required>
                            @if($errors->has('e_date'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('e_date') }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label for="passing_year">Result Date</label>
                            <input class="form-control" name="passing_year" type="date" value="{{$student->passing_year}}" required>
                            @if($errors->has('passing_year'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('passing_year') }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="percentage">Enter Percentage</label>
                            <input class="form-control" step="any" name="percentage" type="number" cast="any" placeholder="Enter Marks In Percentage" id="percentage"  value="{{$student->percentage}}"  required>
                            @if($errors->has('percentage'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('percentage') }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group" id="grade">
                        @if ($student->grade == 'A')
                            <label for="grade">Student grade</label>
                            <input class="form-control" name="grade" type="text" value="A" disabled style="color: white;font-weight: bold;background-color: #007d80;">
                        @elseif($student->grade == 'B')
                            <label for="grade">Student grade</label>
                            <input class="form-control" name="grade" type="text" value="B" disabled style="color: white;font-weight: bold;background-color: #33dc35;">
                        @elseif($student->grade == 'C')
                            <label for="grade">Student grade</label>
                            <input class="form-control" name="grade" type="text" value="C" disabled style="color: white;font-weight: bold;background-color: #dc9533;">
                        @else
                            <label for="grade">Student grade</label>
                            <input class="form-control" name="grade" type="text" value="D" disabled style="color: white;font-weight: bold;background-color: red;">
                        @endif
                        </div>
                        <div class="form-group" id="status">
                            @if ($student->result_status == '1')
                                <label for="status">Result Status</label>
                                <input class="form-control" name="status" type="text" value="Pass" disabled style="color: #0095ff;font-weight: bold;">
                            @else
                                <label for="status">Result Status</label>
                                <input class="form-control" name="status" type="text" value="Fail" disabled style="color: red;font-weight: bold;">
                            @endif
                        </div>

                        <div class="form-group">
                            {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
                            <a href="#" onclick="window.close()" class="btn btn-danger">Close</a>
                        </div>
                        {{ Form::close() }}
                    </div>
                @endif
	        </div>
	    </div>
	</div>

	<div class="col-md-2"></div>

	<div class="clearfix"></div>

	</div>
 @endsection

 @section('script')
     <script>
         $(document).ready(function(){
            $("#percentage").keyup(function(){
                var percentage = $(this).val();
                if (percentage) {
                    if (percentage >= 60 ) {
                        $("#grade").html('<label for="grade">Student grade</label><input class="form-control" name="grade" type="text" value="A" disabled style="color: white;font-weight: bold;background-color: #007d80;">');
                        $("#status").html('<label for="status">Result Status</label><input class="form-control" name="status" type="text" value="Pass" disabled style="color: #0095ff;font-weight: bold;">');
                    }else if(percentage >= 45){
                        $("#grade").html('<label for="grade">Student grade</label><input class="form-control" name="grade" type="text" value="B" disabled style="color: white;font-weight: bold;background-color: #33dc35;">');
                        $("#status").html('<label for="status">Result Status</label><input class="form-control" name="status" type="text" value="Pass" disabled style="color: #0095ff;font-weight: bold;">');
                    }else if(percentage >= 33){
                        $("#grade").html('<label for="grade">Student grade</label><input class="form-control" name="grade" type="text" value="C" disabled style="color: white;font-weight: bold;background-color: #dc9533;">');
                        $("#status").html('<label for="status">Result Status</label><input class="form-control" name="status" type="text" value="Pass" disabled style="color: #0095ff;font-weight: bold;">');
                    }else{
                        $("#grade").html('<label for="grade">Student grade</label><input class="form-control" name="grade" type="text" value="D" disabled style="color: white;font-weight: bold;background-color: red;">');
                        $("#status").html('<label for="status">Result Status</label><input class="form-control" name="status" type="text" value="Fail" disabled style="color: red;font-weight: bold;">');
                    }
                }
            })
         });
     </script>
 @endsection
