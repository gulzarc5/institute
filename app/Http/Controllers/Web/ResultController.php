<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class ResultController extends Controller
{
    public function resultFormView()
    {
        return view('web.result.result');
    }

    public function resultView(Request $request)
    {
        $this->validate($request, [
            'student_id'   => 'required',
            'dob' => 'required',
        ]);

        $student_id = $request->input('student_id');
        $dob = $request->input('dob');

        $student_check = DB::table('student')->where('student_id',$student_id)->where('dob',$dob)->count();
        if ($student_check > 0) {
            $student = DB::table('student')->where('student_id',$student_id)->first();
            $result = null;
            if ($student) {
                $result = DB::table('student_result')->where('student_id',$student->id)->first();
            }
            return view('web.result.result',compact('student','result'));
        } else {
            return redirect()->route('web.result.result')->with('error','Sory Student Data Not Found !! . Please Check Result With Correct Student Details');
        }
        
    }
}
