<?php

namespace App\Http\Controllers;

use App\Models\BazarModel;
use App\Models\PesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class detailController extends Controller
{
    //
    //
    public function index($id)
    {
        $menu = BazarModel::where('id', $id)->first();
        return view('frondend/detail', compact('menu'));
    }


    public function pesan(Request $request, $id)
    {
        $menu = BazarModel::where('id', $id)->first();

        $validation = Validator::make(
            $request->all(),
            [
                'menu_id' => '$menu->id',
                'nama_pemesan' => 'required',
                'jumlah_pesanan' => 'required',
                'nohp' => 'required|numeric',
                'alamat' => 'required',
                'kode_pesanan' => '',
                'total_harga' => '$menu->harga*$request->jumlah_pesanan',
            ],
            [
                'required' => 'Data Tidak Boleh Kosong',

            ]
        );

        if ($validation->fails()) {
            $msg = $validation->errors()->first();
            Alert::error('Gagal', $msg);
            return redirect()
                ->back();
        }

        $pesanan = new PesananModel();
        $pesanan->menu_id = $menu->id;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->nohp = $request->nohp;
        $pesanan->alamat = $request->alamat;
        $pesanan->kode_pesanan = mt_rand(100, 999);
        $pesanan->total_harga = $menu->harga * $request->jumlah_pesanan;
        $pesanan->save();


        if ($pesanan) {

            Alert::success('Behasil', 'Pesanan anda sedang diproses ');
            return redirect('/');
        } else {
            Alert::error('Gagal', 'Mohon periksa kembali inputan anda');
            return redirect()->back();
        }
    }


    //  public function testimoni(Request $request)
    //  {
    //      $menu = PesananModel::all();
    //      return view ('frondend/testimoni', compact('menu'));
    //  }

}
