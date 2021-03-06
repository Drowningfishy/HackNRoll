<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class pageController extends Controller
{
    public function home() {
    	return Auth::guest() ? view('initial')->withname('there')
    		: redirect('/home'); 
    }

    public function aboutUs() {
    	return view('about');
    }

    public function homeForm() {
    	return view('homeForm');
    }

    public function testForm() {
        return view('user/testform');
    }

    public function editBackground() {
        return view('user/editbackground');
    }

    public function editPhoto() {
        return view('user/editphoto');
    }
}

