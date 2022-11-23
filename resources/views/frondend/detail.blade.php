@extends('Layouts.page')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <input type="hidden" name="menu_id" id="menu_id" value="{{ $menu->id }}">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('uploads/menu') }}/{{ $menu->gambar }}" class="rounded mx-auto d-block"
                                    alt="">
                            </div>
                            <div class="col-md-6 mt-4">
                                <h3>{{ $menu->nama_menu }}</h3>
                                <table class="table">
                                    <form method="post" action="{{ url('pesan') }}/{{ $menu->id }}">
                                        <tbody>
                                            <tr>
                                                <td>Harga</td>
                                                <td>:</td>
                                                <input type="hidden" name="harga" id="harga">
                                                <td>Rp. {{ number_format($menu->harga) }}</td>
                                            </tr>
                                            <tr>
                                                @csrf
                                                <td>Nama Kamu</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="nama_pemesan" id="nama_pemesan"
                                                        class="form-control">
                                                </td>

                                            <tr>
                                                <td>Jumlah Pesan</td>
                                                <td>:</td>
                                                <td>
                                                    @csrf
                                                    <input type="number" name="jumlah_pesanan" id="jumlah_pesanan"
                                                        class="form-control">

                                                </td>
                                            </tr>
                                            <td>No whatsapp</td>
                                            <td>:</td>
                                            <td>
                                                @csrf
                                                <input type="text" name="nohp" id="nohp" class="form-control">

                                            </td>
                                            </tr>
                                            <tr>

                                                @csrf
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="alamat" id="alamat"
                                                        class="form-control">
                                                    <button type="submit" class="btn btn-primary mt-2"><i
                                                            class="fa fa-shopping-cart"></i>Pesan</button>
                                                </td>
                                    </form>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
