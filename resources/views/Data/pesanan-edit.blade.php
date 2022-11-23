@extends('Layouts.Base')

@section('content')
    </div>
    <h5>Edit Data</h5>
    <form method="post" action="{{ route('pesan.update', $data->id) }}" id="form-input" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="menu_id" id="menu_id" value="{{ $data->menu_id }}">
        <div class="form-group ">
            <select name="menu_id" id="menu_id" class="form-control">
                <option>Pilih</option>
                @foreach ($data2 as $menus)
                    <option value="{{ $menus->id }}"{{ $menus->id == $data->menu_id ? 'selected' : '' }}>
                        {{ $menus->nama_menu }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nama_pemesan">Nama Pemesan</label>
            <input value="{{ $data->nama_pemesan }}" id="nama_pemesan" type="text" class="form-control"
                name="nama_pemesan" placeholder="Nama Pemesan">
        </div>

        <div class="form-group">
            <label for="jumlah_pesanan">Jumlah</label>
            <input value="{{ $data->jumlah_pesanan }}" id="jumlah_pesanan" type="text" class="form-control"
                name="jumlah_pesanan" placeholder="Jumlah">
        </div>

        <div class="form-group">
            <label for="nohp">No Handphone</label>
            <input type="text" class="form-control" value="{{ $data->nohp }}" name="nohp" id="nohp"
                placeholder="No Handphone">
        </div>

        <div class="form-group">
            <label for="alamat">alamat</label>
            <input value="{{ $data->alamat }}" id="alamat" name="alamat" type="text" class="form-control"
                placeholder="Alamat">
        </div>

        <div class="modal-footer">
            <a href="{{ url('pesanan') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
        </div>
    </form>
@endsection
