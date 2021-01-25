<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * tourist
     */
    public function tourist(){
        return view ('pages.tourist_visa');
    }
    /**
     * PTE
     */
    public function pte(){
        return view ('pages.pte');
    }
    /**
     * ielts
     */
    public function ielts(){
        return view ('pages.ielts');
    }
}
