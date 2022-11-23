<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class ChangeProfilController extends Controller
{
    //

    public function index()
    {
        return view('/change-profil');
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email:rfc', 'confirmed'],
        ]);

        if (Hash::check($request->name, auth()->user()->email)) {
            auth()->user()->update($request->email);
            Alert::success('Change Email Success');
            return redirect('/logout');
        }


        throw ValidationException::withMessages([
            'old_password' => 'Your old password dosnt not match with our record'
        ]);
    }
}
