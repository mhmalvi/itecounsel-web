<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{
    /**
     * RPL
     */
    public function index(){
        return view('pages.rpl');
    }
    /**
     * RPL Diploma Courses
     */
    public function diploma(){
        return view('pages.course_diploma');
    }
    /**
     * RPL Diploma Courses
     */
    public function ADdiploma(){
        return view('pages.course_advanced');
    }
    /**
     * RPL certificate iii Courses
     */
    public function certificate3(){
        return view('pages.course_iii');
    }
    /**
     * RPL certificate iv Courses
     */
    public function certificate4(){
        return view('pages.course_iv');
    }

    /**
     * Get all courses
     */
    public function getCourses(){
        $courses = Courses::all();

        return response()->json($courses);
    }
}
