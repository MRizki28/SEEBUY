<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\BazarModel;
use App\Models\PesananModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class PesanController extends Controller
{

    public function readDataa()
    {
        $data = PesananModel::with('Bazar')->get();

        return view('Data.pesanan')->with('data', $data);
    }



    public function cetakPesanan()
    {
        $dataCetak = PesananModel::with('Bazar')->get();

        return view('Data.cetak-pesanan')->with('dataCetak', $dataCetak);
    }

    public function edit($id)
    {
        $data = PesananModel::find($id);
        $data2 = BazarModel::all();
        // dd($data2);
        return view('Data.pesanan-edit', compact('data'))->with(['data' => $data, 'data2' => $data2]);
    }

    // update data
    public function update($id, Request $request)
    {

        $menu = BazarModel::where('id', $request->menu_id)->first();

        $validation = Validator::make(
            $request->all(),
            [
                'menu_id' => 'required',
                'nama_pemesan' => 'required',
                'jumlah_pesanan' => 'required',
                'nohp' => 'required|numeric',
                'detail' => '',
                'kode_pesanan' => '',
                'total_harga' => '$menu->harga*$request->jumlah_pesanan'
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


        $data = PesananModel::find($id);
        $data->menu_id = $request->input('menu_id');
        $data->nama_pemesan = $request->input('nama_pemesan');
        $data->jumlah_pesanan = $request->input('jumlah_pesanan');
        $data->nohp = $request->input('nohp');
        $data->detail = $request->input('detail');
        $data->kode_pesanan = mt_rand(100, 999);
        $data->total_harga = $menu->harga * $request->jumlah_pesanan;
        $data->update();

        if ($data) {
            Alert::success('Behasil', 'Data Berhasil Di Edit');
            return redirect('pesanan');
        } else {
            Alert::error('Gagal', 'Mohon periksa kembali inputan anda');
            return redirect()->back();
        }
    }



    // //   // delete data
    public function deleteDataa($id)
    {

        PesananModel::whereId($id)->delete();
        Alert::success('Behasil', 'Data Berhasil Di Hapus');
        return redirect()->back();
    }


    // public function deleteAll()
    // {
    //     PesananModel::all()->delete();
    //     Alert::success('Berhasil', 'Semua data berhasil dihapus');
    //     return redirect()->back();
    // }

    public function deleteAll()
    {
        DB::table('pesanan')->delete();
        Alert::success('Berhasil', 'Semua data berhasil dihapus');
        return redirect()->back();

        return view('Data.pesanan');
    }
}
