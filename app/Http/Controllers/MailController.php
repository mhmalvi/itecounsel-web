<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\ApplyNow;
use Illuminate\Http\Request;
use App\Http\Requests\Eligibility ;
use App\Http\Requests\ApplyRequest ;
use Illuminate\Support\Facades\Mail;
use App\Models\Courses;
use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUs;

class MailController extends Controller
{
    protected $mail = 'dev.quadque@gmail.com';
    // protected $mail = 'admin@itecounsel.com';
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

        Mail::to($this->mail)->send(new TestMail($details));

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
        $course = Courses::firstWhere('id', $request->cours);

        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'mail' => $request->mail,
            'place' => $request->place,
            'course_code' => $course->course_code,
            'course_name' => $course->course_name
        ];

        Mail::to($this->mail)->send(new ApplyNow($data));

        $notification = [
            'message'   =>  'Thanks for your interest! We will contact soon!',
            'alert-type'    =>  'info'
        ];

        return redirect()->back()->with($notification);
    }


    /**
     *
     */
    public function contact(ContactUsRequest $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to($this->mail)->send(new ContactUs($data));

        $notification = [
            'message'   =>  'Thanks for your interest! We will contact soon!',
            'alert-type'    =>  'info'
        ];

        return redirect()->back()->with($notification);
    }
}
