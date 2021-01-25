<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MigrationController extends Controller
{
    /**
     * default migration page
     * itec landing page
     */
    public function index(){
        return view ('pages.migration');
    }
}
