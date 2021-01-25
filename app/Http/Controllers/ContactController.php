<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * contact us page default
     */
    public function index(){
        return view ("pages.contact");
    }
}
