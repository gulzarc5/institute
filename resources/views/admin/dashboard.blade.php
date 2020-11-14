@extends('admin.template.admin_master')

@section('content')

  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Student</span>
        <div class="count green">
          @if (isset($total_student))
              {{$total_student}}
          @endif
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Result Declared</span>
        <div class="count green">
          @if (isset($result_declared))
              {{$result_declared}}
          @endif
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Course Runing </span>
          <div class="count green">
            @if (isset($course_runing))
                {{$course_runing}}
            @endif
          </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Course</span>
        <div class="count green">
            @if (isset($total_course))
                {{$total_course}}
            @endif
        </div>
      </div>
      
    </div>
    <!-- /top tiles -->

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_content">
                 {{--//////////// Last Ten Sellers //////////////--}}
                 <div class="table-responsive">
                    <h2>Last 10 Declared Results</h2>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">                
                                <th class="column-title">Sl No. </th>
                                <th class="column-title">Name</th>
                                <th class="column-title">Course</th>
                                <th class="column-title">Percentage</th>
                                <th class="column-title">Grade</th>
                                <th class="column-title">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                          @if (isset($last_ten_results) && !empty($last_ten_results) ).
                          @php
                              $count_seller = 1;
                          @endphp
                              @foreach ($last_ten_results as $item)
                                <tr>
                                  <td>{{$count_seller++}}</td>
                                  <td>{{$item->s_name}}</td>
                                  <td>{{$item->course_name}}</td>
                                  <td>{{$item->percentage}}</td>
                                  <td>
                                    @if ($item->grade == 'A')
                                      <a class="btn btn-primary">A</a>
                                    @elseif ($item->grade == 'B')
                                      <a class="btn btn-success">B</a>
                                    @elseif ($item->grade == 'C')
                                      <a class="btn btn-warning">C</a>
                                    @else
                                      <a class="btn btn-danger">D</a>
                                    @endif
                                  </td>
                                  <td>
                                    @if ($item->result_status == '1')
                                      <a class="btn btn-success">Pass</a>
                                    @else
                                      <a class="btn btn-danger">Fail</a>
                                    @endif
                                  </td>
                                </tr>
                              @endforeach
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