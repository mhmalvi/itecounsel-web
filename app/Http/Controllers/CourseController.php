<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{
    /**
     * RPL
     */
    public function index()
    {
        return view('pages.rpl');
    }
    /**
     * RPL Diploma Courses
     */
    public function diploma()
    {
        return view('pages.course_diploma');
    }
    /**
     * RPL Diploma Courses
     */
    public function ADdiploma()
    {
        return view('pages.course_advanced');
    }
    /**
     * RPL certificate iii Courses
     */
    public function certificate3()
    {
        return view('pages.course_iii');
    }
    /**
     * RPL certificate iv Courses
     */
    public function certificate4()
    {
        return view('pages.course_iv');
    }

    /**
     * Get all courses
     */
    public function getCourses()
    {
        $data = Courses::create([
            'course_type_id' => '12',
            'course_code' => 'SIT60316',
            'course_name' => 'Advanced Diploma',
            'course_category_id' => '112',
            'course_category' => 'RTL',
            'course_descriptions' => 'This is the description of this course',
            'course_thumbnail' => 'Course Thumbnail',
        ]);

        dd($data);
    }

    public function getCategory()
    {
        $data = Category::create([
            'category'=>'Diploma',
            'description'=>'This is the Category Description',
        ]);

        dd($data);
    }
}
