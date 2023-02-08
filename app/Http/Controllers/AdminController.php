<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //
    public function index()
    {
        $data = User::all();

        return view('Data.admin')->with('data', $data);
    }

    public function store(Request $request)
    {

        $validation = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3',
                'level' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'konfirmasi_password' => 'required|same:password',
            ],
            [
                'required' => 'data tidak boleh kosong',
            ]

        );

        if ($validation->fails()) {
            $msg = $validation->errors()->first();
            Alert::error('Gagal', $msg);
            return redirect()->back();
        }

        $random = Str::random(5);

        try {
            //code...
            $data = new User();
            $data->name = $request->name;
            $data->level = $request->level;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);;
            $data->remember_token = $random;
            $data->save();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Gagal', 'Email tidak boleh sama');
            return redirect()->back();
        }



        if ($data) {
            Alert::success('Behasil', 'Admin berhasil ditambahkan ');
            return redirect('/data-admin');
        } else {
            Alert::error('Gagal', 'Mohon periksa kembali inputan anda');
            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view('Data.admin-edit', compact('data'));
    }

    public function update(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'name' => 'required|min:3',
                'email' => 'required',
            ],
            [
                'required' => 'data tidak boleh kosong',
            ]

        );

        if ($validation->fails()) {
            $msg = $validation->errors()->first();
            Alert::error('Gagal', $msg);
            return redirect()->back();
        }

        $random = Str::random(5);

        try {
            $data = User::find($request->id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->remember_token = $random;
            $data->update();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Gagal', 'Email tidak boleh sama');
            return redirect()->back();
        }
        if ($data) {
            Alert::success('Behasil', 'Admin berhasil Diedit ');
            return redirect('/data-admin');
        } else {
            Alert::error('Gagal', 'Mohon periksa kembali inputan anda');
            return redirect()->back();
        }
    }


    public function deleteData($id)
    {

        User::whereId($id)->delete();
        Alert::success('Behasil', 'Data Berhasil Di Hapus');
        return redirect()->back();
    }

}
