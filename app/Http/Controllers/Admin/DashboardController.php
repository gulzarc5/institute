<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $total_student = DB::table('student')->count();
        $result_declared = DB::table('student')->where('result_status',2)->count();
        $course_runing = DB::table('student')->where('result_status',1)->count();
        $total_course = DB::table('course')->count();

        $last_ten_results = DB::table('student_result')
            ->select('student_result.*','student.name as s_name')
            ->leftjoin('student','student.id','=','student_result.student_id')
            ->orderBy('student_result.id','desc')
            ->limit(10)
            ->get();
        return view('admin.dashboard',compact('total_student','result_declared','course_runing','total_course','last_ten_results'));
    }
}
