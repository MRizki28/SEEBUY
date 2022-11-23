<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    //
    public function index()
    {
        return view('Layouts.base');
    }

  
}
