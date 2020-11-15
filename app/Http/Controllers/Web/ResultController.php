<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use Mail;

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
            $qr_string = "Registration No : $student->student_id\nName : $student->name \nFather Name : $student->father_name \nDate Of Birth : $student->dob\n";
            if ($student) {
                $result = DB::table('student_result')->where('student_id',$student->id)->first();
                $result_status = "Fail";
                if ($result->result_status == '1'){
                    $result_status = "Pass";
                }

                $qr_string.="Course Name : $result->course_name\nCourse Duration : $result->course_duration\nResult : $result_status\nGrade : $result->grade\nPercentage : $result->percentage";
            }

            return view('web.result.result',compact('student','result','qr_string'));
        } else {
            return redirect()->route('web.result.result')->with('error','Sory Student Data Not Found !! . Please Check Result With Correct Student Details');
        }

    }

    public function sendMail(Request $request)
    {
        // $to_name = 'Rising Admin';
        // $to_email = 'ikbalahmed123@gmail.com';
        // $data = [
        //     'name' => $request->input('name'),
        //     'email'=> $request->input('email'),
        //     'phone'=> $request->input('phone'),
        //     'subject'=> $request->input('subject'),
        //     'textdata'=> $request->input('message'),
        //     ];
        // Mail::send('web.email.mail_view', $data, function($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)
        //     ->subject('Rising Globe Contact Request');
        //     $message->from('risingcontact@rgtmedu.com','Rising G');
        // });
       return redirect()->back()->with('message','ok');
    }
}
