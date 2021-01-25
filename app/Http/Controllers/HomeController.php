<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Eligibility;
use App\Models\Courses;

class HomeController extends Controller
{
    /**
     * default business page
     * itec landing page
     */
    public function index(){
        return view ('home');
    }
    
    
    /**
     * Eligibility
     */
    public function eligibity(){
        $courses = Courses::all();
        return view ('pages.eligibility', compact('courses'));
    }


    /**
     * 
     */
    public function applyNow(){
        $courses = Courses::all();
        return view ('pages.applyNow', compact('courses'));
    }
}
