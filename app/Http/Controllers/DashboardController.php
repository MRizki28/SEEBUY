<?php

namespace App\Http\Controllers;

use App\Models\BazarModel;
use App\Models\PesananModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $dataBazar = BazarModel::count();
        $dataPesanan = PesananModel::count();
        $dataAdmin = User::count();

        return view('Data.dashboard', compact('dataBazar', 'dataPesanan', 'dataAdmin'));
    }
}
