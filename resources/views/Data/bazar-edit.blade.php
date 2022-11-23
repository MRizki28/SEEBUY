@extends('Layouts.Base')

@section('content')
    <form method="post" action="{{ route('bazar.update', $data->id) }}" id="form-input" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img id="gambar" src="{{ asset('uploads/menu/') }}/{{ $data->gambar }}" alt=""
                style="height: auto; width: 50%; padding-bottom: 30px;  ">
        </div>
        </div>
        <div class=" form-group">
            <label for="nama_menu">Nama Menu</label>
            <input value="{{ $data->nama_menu }}" id="nama_menu" type="text" class="form-control" name="nama_menu"
                aria-describedby="emailHelp" placeholder="Masukan Nama.." required>
        </div>
        <div class="form-group">
            <label for="nim">Harga</label>
            <input value="{{ $data->harga }}" id="harga" type="text" class="form-control" name="harga"
                placeholder="Masukan NIM" required>
        </div>
        @if ($data)
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" value="{{ $data->gambar }}" name="gambar" id="gambar" class="form-control"  
                    placeholder="Upload file" required>
            </div>
        @endif

        <div class="form-group">
            <label for="description">description</label>
            <input value="{{ $data->description }}" id="description" name="description" type="text" class="form-control"
                placeholder="Masukan Alamat" required>

        </div>
        </div>

        <div class="modal-footer">
            <a href="{{ url('data-bazar') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>

        </div>
    </form>
@endsection
