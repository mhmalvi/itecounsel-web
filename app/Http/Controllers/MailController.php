<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ApplyNow;
use Illuminate\Http\Request;
use App\Http\Requests\Eligibility ;
use App\Http\Requests\ApplyRequest ;
use Illuminate\Support\Facades\Mail;
use App\Models\Courses;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    /**
     * Eligibility Form
     */
    public function eligibility(Eligibility $request){
        $course = Courses::firstWhere('id', $request->course);

        $details = [
            'fullname' => $request->fullname,
            'contact' => $request->contact,
            'email' => $request->email,
            'nationality' => $request->nationality,
            'course_code' => $course->course_code,
            'course_name' => $course->course_name,
            'work' => $request->work,
            'designation' => $request->designation,
            'experience_one' => $request->experience_one,
            'live' => $request->live,
            'question' => $request->question,
        ];

        Mail::to('admin@itecounsel.com')->send(new TestMail($details));

        $notification = [
            'message'   =>  'Thanks for your interest! We will contact soon!',
            'alert-type'    =>  'info'
        ];

        return redirect()->back()->with($notification);
    }


    /**
     * 
     */
    public function ApplyNow(ApplyRequest $request){
        $course = Courses::firstWhere('id', $request->course);
        
        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'mail' => $request->mail,
            'place' => $request->place,
            'course_code' => $course->course_code,
            'course_name' => $course->course_name
        ];
        
        Mail::to('admin@itecounsel.com')->send(new ApplyNow($data));

        $notification = [
            'message'   =>  'Thanks for your interest! We will contact soon!',
            'alert-type'    =>  'info'
        ];

        return redirect()->back()->with($notification);
    }
}
