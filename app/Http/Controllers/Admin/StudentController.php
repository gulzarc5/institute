<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use DataTables;

class StudentController extends Controller
{
    public function studentInsertForm()
    {
        $course = DB::table('course')->orderby('name','asc')->get();
        return view('admin.student.add_student_form',compact('course'));
    }

    public function studentInsert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'father' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'caste' => 'required',
            'course' => 'required',
            'highest_qualification' => 'required',
            'reg_date' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pin' => 'required',
        ]);

        $student_insert = DB::table('student')
            ->insertGetId([
                'name' => $request->input('name'),
                'father_name' => $request->input('father'),
                'gender' => $request->input('gender'),
                'caste' => $request->input('caste'),
                'dob' => $request->input('dob'),
                'highest_qualification' => $request->input('highest_qualification'),
                'course_id' => $request->input('course'),
                'address' => $request->input('address'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
                'pin' => $request->input('pin'),
                'registration_date' => $request->input('reg_date'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        if ($student_insert) {
            $length = 5 - intval(strlen((string) $student_insert));
            $student_id = null;
                for ($i=0; $i < $length; $i++) {
                    $student_id.='0';
                }
                $student_id = "RGTM".$student_id.$student_insert;
            DB::table('student')
            ->where('id',$student_insert)
            ->update([
                'student_id' => $student_id,
            ]);

            return redirect()->back()->with('message','Student Registered Successfully');
        } else {
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }

    }

    public function studentList()
    {
        return view('admin.student.student_list');
    }

    public function studentListAjax(Request $request)
    {
        $student = DB::table('student')
            ->select('student.*','course.name as course_name')
            ->leftjoin('course','course.id','=','student.course_id');
        return datatables()->of($student->get())
        ->addIndexColumn()
        ->addColumn('action', function($row){
            $btn ='<a href="'.route('admin.student_edit_form',['id'=>encrypt($row->id)]).'" class="btn btn-warning btn-sm" target="_blank">Edit</a>';
            if ($row->result_status == '1') {
                $btn .='<a href="'.route('admin.student_add_result_form',['id'=>encrypt($row->id)]).'" class="btn btn-primary btn-sm" target="_blank">Add Result</a>';
            }else{
                $btn .='<a href="'.route('admin.student_result_edit',['id'=>encrypt($row->id)]).'" class="btn btn-warning btn-sm" target="_blank">Edit Result</a>
                <a href="'.route('admin.student_result_view',['id'=>encrypt($row->id)]).'" class="btn btn-success btn-sm" target="_blank">View Result</a>';
            }
            return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function studentEditForm($student_id)
    {
        try {
            $student_id = decrypt($student_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $course = DB::table('course')->orderby('name','asc')->get();
        $student = DB::table('student')->where('id',$student_id)->first();
        return view('admin.student.student_edit',compact('course','student'));
    }

    public function studentUpdate(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'name' => 'required',
            'father' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'caste' => 'required',
            'course' => 'required',
            'highest_qualification' => 'required',
            'reg_date' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pin' => 'required',
        ]);

        $student_update = DB::table('student')
            ->where('id',$request->input('student_id'))
            ->update([
                'name' => $request->input('name'),
                'father_name' => $request->input('father'),
                'gender' => $request->input('gender'),
                'caste' => $request->input('caste'),
                'dob' => $request->input('dob'),
                'highest_qualification' => $request->input('highest_qualification'),
                'course_id' => $request->input('course'),
                'address' => $request->input('address'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
                'pin' => $request->input('pin'),
                'registration_date' => $request->input('reg_date'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        if ($student_update) {
            return redirect()->back()->with('message','Student Update Successfully');
        } else {
            return redirect()->back()->with('error','Something Went Wrong Please Try Again');
        }

    }

    public function studentAddResultForm($id)
    {
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $student = DB::table('student')
            ->select('student.*','course.name as course_name','course.duration as course_duration')
            ->leftjoin('course','course.id','=','student.course_id')
            ->where('student.id',$id)
            ->first();
        return view('admin.result.add_result',compact('student'));
    }

    public function studentResultInsert(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            // 's_date' => 'required|date_format:Y-m-d',
            // 'e_date' => 'required|date_format:Y-m-d',
            'percentage' => 'numeric|required',
            'passing_year' => 'required|date_format:Y-m-d',
        ]);
        // $s_date = $request->input('s_date');
        // $e_date = $request->input('e_date');
        // if (Carbon::parse($s_date)->gt(Carbon::parse(Carbon::parse($e_date)))){
        //     return redirect()->back()->with('error','Please Select Exam End Date Greater Then Exam Start Date');
        // }else{
            $percentage =  $request->input('percentage');
            $result_status = '1';
            $grade = "D";
            if ($percentage >= 60) {
                $grade = "A";
            } else if ($percentage >= 45) {
                $grade = "B";
            } else if ($percentage >= 33) {
                $grade = "C";
            }else{
                $grade = "D";
                $result_status = '2';
            }

            $student = DB::table('student')
            ->select('student.*','course.name as course_name','course.duration as course_duration')
            ->leftjoin('course','course.id','=','student.course_id')
            ->where('student.id',$request->input('student_id'))
            ->first();
            if ($student) {
                $result = DB::table('student_result')
                    ->insert([
                        'student_id' => $student->id,
                        'course_name' => $student->course_name,
                        'course_duration' => $student->course_duration,
                        // 'exam_start_date' => $s_date,
                        // 'exam_end_date' => $e_date,
                        'grade' => $grade,
                        'result_status' => $result_status,
                        'percentage' => $percentage,
                        'passing_year' => $request->input('passing_year'),
                        'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                        'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                    ]);
                if ($result) {
                    $result = DB::table('student')->where('id',$student->id)->update(['result_status'=>'2']);
                    return redirect()->route('admin.student_result_view',['id'=>encrypt($student->id)]);
                } else {
                    return redirect()->back()->with('error','Something Went Wrong Please Try Again');
                }

            } else {
                return redirect()->back()->with('error','Something Went Wrong Please Try Again');
            }

        // }
    }

    public function studentResultView($id)
    {
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $student = DB::table('student_result')
            ->select('student_result.*','student.name as student_name','student.father_name as father_name','student.registration_date as registration_date','student.student_id as student_registration_id')
            ->leftjoin('student','student.id','=','student_result.student_id')
            ->where('student_result.student_id',$id)
            ->first();

        return view('admin.result.result_view',compact('student'));
    }

    public function studentResultEdit($id)
    {
        try {
            $id = decrypt($id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $student = DB::table('student_result')
            ->select('student_result.*','student.name as student_name','student.registration_date as registration_date','student.student_id as student_registration_id')
            ->leftjoin('student','student.id','=','student_result.student_id')
            ->where('student_result.student_id',$id)
            ->first();
        return view('admin.result.edit_result',compact('student'));
    }

    public function studentResultUpdate(Request $request)
    {
        $request->validate([
            'result_id' => 'required',
            // 's_date' => 'required|date_format:Y-m-d',
            // 'e_date' => 'required|date_format:Y-m-d',
            'percentage' => 'numeric|required',
            'passing_year' => 'required|date_format:Y-m-d',
        ]);
        // $s_date = $request->input('s_date');
        // $e_date = $request->input('e_date');
        // if (Carbon::parse($s_date)->gt(Carbon::parse(Carbon::parse($e_date)))){
        //     return redirect()->back()->with('error','Please Select Exam End Date Greater Then Exam Start Date');
        // }else{
            $percentage =  $request->input('percentage');
            $result_status = '1';
            $grade = "D";
            if ($percentage >= 60) {
                $grade = "A";
            } else if ($percentage >= 45) {
                $grade = "B";
            } else if ($percentage >= 33) {
                $grade = "C";
            }else{
                $grade = "D";
                $result_status = '2';
            }

            $result_update = DB::table('student_result')
                ->where('id',$request->input('result_id'))
                ->update([
                    // 'exam_start_date' => $s_date,
                    // 'exam_end_date' => $e_date,
                    'grade' => $grade,
                    'result_status' => $result_status,
                    'percentage' => $percentage,
                    'passing_year' => $request->input('passing_year'),
                    'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                ]);
            $result =  DB::table('student_result')
                ->where('id',$request->input('result_id'))
                ->first();
            if ($result_update && $result) {
                return redirect()->route('admin.student_result_view',['id'=>encrypt($result->student_id)]);
            } else {
                return redirect()->back()->with('error','Something Went Wrong Please Try Again');
            }
        // }
    }
}
