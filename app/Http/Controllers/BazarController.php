<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\BazarModel;
use App\Models\PesananModel;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class BazarController extends Controller
{
    //
    public function index()
    {
        $data = BazarModel::all();

        return view('Data.bazar')->with('data', $data);
    }

    public function store(Request $request)
    {


        $validation = Validator::make(
            $request->all(),
            [
                'nama_menu' => 'required|min:3',
                'harga' => 'required|numeric',
                'gambar' => '',
                'description' => 'required',
            ],
            [
                'required' => 'data tidak boleh kosong',
            ]
        );

        if ($validation->fails()) {
            $msg = $validation->errors()->first();
            Alert::error('Gagal', $msg);
            return redirect()
                ->back();
        }

        $data = new BazarModel();
        $data->nama_menu = $request->input('nama_menu');
        $data->harga = $request->input('harga');
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move('uploads/menu/', $filename);
            $data->gambar = $filename;
            $data->description = $request->input('description');
        }
        $data->save();


        if ($data) {
            Alert::success('Behasil', 'Data Berhasil Di Tambahkan');
            return back();
        } else {
            Alert::error('Gagal', 'Mohon periksa kembali inputan anda');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $data = BazarModel::find($id);
        // dd($data);
        return view('Data.bazar-edit', compact('data'));
    }

    // public function edit($id)
    // {
    //     $respon = BazarModel::find($id);
    //     return response()->json($respon);
    // }

    // update data

    public function update(Request $request)
    {

        $validation = Validator::make(
            $request->all(),
            [
                'nama_menu' => 'required|min:3',
                'harga' => 'required|numeric',
                'gambar' => 'required',
                'description' => 'required',
            ],
            [
                'required' => 'Data Tidak Boleh Kosong',
            ]
        );


        if ($validation->fails()) {
            $msg = $validation->errors()->first();
            Alert::error('Gagal', $msg);
            return redirect()->back();
        }



        $data = BazarModel::find($request->id);
        $data->nama_menu = $request->input('nama_menu');
        $data->harga = $request->input('harga');
        
        if ($request->hasfile('gambar')) {
            $destination = 'uploads/menu/' . $data->gambar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move('uploads/menu/', $filename);
            $data->gambar = $filename;
        }

        $data->description = $request->input('description');

        $data->update();

        if ($data) {
            Alert::success('Behasil', 'Data Berhasil Di Diperbaharui');
            return redirect('data-bazar');
        } else {
            Alert::error('Gagal', 'Mohon periksa kembali inputan anda');
            return redirect()->back();
        }
    }



    //   // delete data

    public function deleteData($id)
    {

        try {
            //code...
            $data = BazarModel::find($id);
            $destination = 'uploads/menu/' . $data->gambar;


            BazarModel::whereId($id)->delete();
            Alert::success('Behasil', 'Data Berhasil Di Hapus');


            if (File::exists($destination)) {
                File::delete($destination);
            }

            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Gagal', 'Silahkan Hapus Pesanan Terlebih Dahulu');
            return redirect()->back();
        }
    }
}
