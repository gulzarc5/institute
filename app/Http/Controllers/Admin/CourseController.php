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
        ]);

        DB::table('course')
            ->insert([
                'name' => $request->input('name'),
                'duration' => $request->input('duration'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        return redirect()->back()->with('message','Course Added Successfully');
    }

    public function CourseEdit($course_id)
    {
        try {
            $course_id = decrypt($course_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }
        $course = DB::table('course')->where('id',$course_id)->first();
        return view('admin.course.course_edit',compact('course'));
    }

    public function CourseUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'duration' => 'required|numeric',
            'course_id' => 'required',
        ]);

        DB::table('course')
            ->where('id',$request->input('course_id'))
            ->update([
                'name' => $request->input('name'),
                'duration' => $request->input('duration'),
                'created_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
                'updated_at' => Carbon::now()->setTimezone('Asia/Kolkata')->toDateTimeString(),
            ]);
        return redirect()->back()->with('message','Course Added Successfully');

    }
}
