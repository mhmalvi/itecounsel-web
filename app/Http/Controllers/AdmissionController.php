<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Study in australia
     */
    public function australia(){
        return view('pages.australia');
    }
    /**
     * Study in australia
     */
    public function canada(){
        return view('pages.canada');
    }
    /**
     * Study in australia
     */
    public function europe(){
        return view('pages.europe');
    }
    /**
     * Study in australia
     */
    public function malaysia(){
        return view('pages.malaysia');
    }
}
