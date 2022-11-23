<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class UpdatePasswordController extends Controller
{
    //
    public function edit()
    {
        return view('Data.change-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'old_password' => ['required'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        if (Hash::check($request->old_password, auth()->user()->password)) {
            auth()->user()->update(['password' => bcrypt($request->password)]);
            Alert::success('Change Password Success');
            return redirect('/logout');
          
        }


        throw ValidationException::withMessages([
            'old_password' => 'Your old password dosnt not match with our record'
        ]);
    }
}
