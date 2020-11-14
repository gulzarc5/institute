@extends('admin.template.admin_master')
@section('content')
<div class="right_col" role="main">
    <div class="row">
    	<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:50px;">
    	    <div class="x_panel">

    	        <div class="x_title">
    	            <h2>Student List </h2>
    	            <div class="clearfix"></div>
              </div>
    	        <div>
    	            <div class="x_content">
                        <table id="size_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Sl</th>
                              <th>Registration Id</th>
                              <th>Registration Date</th>
                              <th>Name</th>
                              <th>Course Name</th>
                              <th>Father Name</th>
                              <th>Gender</th>
                              <th>Date Of Birth</th>
                              <th>Caste</th>
                              <th>Highest Qualification</th>
                              <th>State</th>
                              <th>City</th>
                              <th>Pin</th>
                              <th>Address</th>
                              <th>action</th>
                            </tr>
                          </thead>
                          <tbody>                       
                          </tbody>
                        </table>
    	            </div>
    	        </div>
    	    </div>
    	</div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function () {

      var table = $('#size_list').DataTable({
        processing: true,
        serverSide: true,
        iDisplayLength: 50,
        ajax: "{{ route('admin.student_list_ajax') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'student_id', name: 'student_id',searchable: true},
            {data: 'registration_date', name: 'registration_date',searchable: true},
            {data: 'name', name: 'name' ,searchable: true},
            {data: 'course_name', name: 'course_name' ,searchable: true},       
            {data: 'father_name', name: 'father_name' ,searchable: true},
            {data: 'gender', name: 'gender' ,render:function(data, type, row){
                if (row.gender == 'M') {
                    return "Male"
                }else{
                  return "Female"
                }                        
            }},  
            {data: 'dob', name: 'dob' ,searchable: true}, 
            {data: 'caste', name: 'caste', render:function(data, type, row){
                if (row.caste == '1') {
                    return "General"
                }else if(row.caste == '2'){
                    return "SC"
                }else if(row.caste == '3'){
                    return "ST"
                }else if(row.caste == '4'){
                    return "OBC"
                }else{
                  return "MOBC"
                }                        
            }},  
            {data: 'highest_qualification', name: 'highest_qualification' ,searchable: true},                 
            {data: 'state', name: 'state' ,searchable: true},                 
            {data: 'city', name: 'city' ,searchable: true},                 
            {data: 'pin', name: 'pin' ,searchable: true},                 
            {data: 'address', name: 'address' ,searchable: true},                 
            {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
  });
</script>
 @endsection


        
    