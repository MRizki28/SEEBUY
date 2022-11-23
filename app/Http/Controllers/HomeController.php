<?php

namespace App\Http\Controllers;

use App\Models\BazarModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $menu = BazarModel::paginate(20);
        return view('frondend/index', compact('menu'));
    }
}
