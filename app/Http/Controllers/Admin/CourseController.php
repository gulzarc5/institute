<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class CourseController extends Controller
{
    public function CourseList()
    {
        $course = DB::table('course')->get();
        return view('admin.course.course',compact('course'));
    }

    public function CourseInsert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required|numeric',
            'total_exam' => 'required|numeric',
        ]);

        DB::table('course')
            ->insert([
                'name' => $request->input('name'),
                'duration' => $request->input('duration'),
                'total_exam' => $request->input('total_exam'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        return redirect()->back()->with('message','Course Added Successfully');
    }
}
