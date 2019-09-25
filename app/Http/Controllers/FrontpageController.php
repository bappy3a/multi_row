<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
    	return view('front_page.frontpage');	
    }
}
