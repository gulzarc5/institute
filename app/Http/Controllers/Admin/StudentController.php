<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function studentInsertForm()
    {
        $course = DB::table('course')->get();
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

        
    }
}
