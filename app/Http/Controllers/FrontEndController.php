<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    	return view ('web.index');
    }

    public function about()
    {
    	return view ('web.about');
    }
    public function services()
    {
    	return view ('web.services');
    }
}
