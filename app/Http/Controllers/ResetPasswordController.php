<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ResetPasswordController extends Controller
{
    //

    public function index()
    {
        return view('Data.reset-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:rfc'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        $updatePassword = DB::table('users')
            ->where([
                'email' => $request->email,
                'password' => $request->password
            ])
            ->first();


        $user = User::where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);

        Alert::success('Change Password Success');
        return redirect('/login');
    }
}
