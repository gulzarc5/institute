@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
  @if(isset($student) && !empty($student))
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Student Result Details</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <section class="content invoice">
              <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
                  <table class="table table-striped">
                    <caption>Student Deails</caption>
                    <tr>
                      <th style="width:150px;">Name : </th>
                      <td>{{$student->student_name}}</td>
                    </tr>
                    <tr>
                        <th>Father Name : </th>
                        <td>{{$student->father_name}}</td>
                    </tr>
                    <tr>
                        <th>Course Name : </th>
                        <td>{{$student->course_name}}</td>
                    </tr>
                    <tr>
                      <th>Course Duration : </th>
                      <td>{{$student->course_duration}} Months</td>
                    </tr>
                    <tr>
                      <th>Date Of Admission : </th>
                      <td>{{$student->registration_date}}</td>
                    </tr>
                  </table>
                </div>

                <div class="col-sm-6 invoice-col">
                   <table class="table table-striped">
                    <caption>Result Deails</caption>
                    <tr>
                        <th>Registration Id : </th>
                        <td>{{$student->student_registration_id}} </td>
                    </tr>
                    {{-- <tr>
                        <th>Examination Date : </th>
                        <td>{{$student->exam_start_date}} To {{$student->exam_end_date}}</td>
                    </tr> --}}

                    <tr>
                        <th>Result : </th>
                        <td>
                            @if ($student->result_status == '1')
                                <a class="btn btn-success">Passed</a>
                            @else
                                <a class="btn btn-danger">Fail</a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Grade : </th>
                        <td>{{$student->grade}}</td>
                    </tr>
                    <tr>
                        <th>Percentage : </th>
                        <td>{{$student->percentage}}</td>
                    </tr>
                    <tr>
                        <th>Passing Year : </th>
                        <td>{{$student->passing_year}}</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="row">
                <button class="btn btn-sm btn-danger" onclick="javascript:window.close()">Window Close</button>
              </div>
              <!-- /.row -->
            </section>
          </div>
        </div>
      </div>
    </div>
  @endif
</div>


 @endsection

@section('script')



 @endsection
