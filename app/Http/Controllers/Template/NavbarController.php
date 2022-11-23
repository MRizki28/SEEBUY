<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    //

    public function index()
    {
       
        $dataAdmin = User::count();

        return view('Layouts.Navbar', compact('dataAdmin'));

    }
}
