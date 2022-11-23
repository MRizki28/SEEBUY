@extends('Layouts.Base')

@section('content')
    <form method="post" action="{{ route('admin.update', $data->id) }}" id="form-input" enctype="multipart/form-data">
        @csrf
        </div>
        <div class=" form-group">
            <label for="name">Nama</label>
            <input value="{{ $data->name }}" id="name" type="text" class="form-control" name="name"
                aria-describedby="emailHelp" placeholder="Masukan Nama..">
        </div>
        <div class="form-group">
            <label for="email">New Email</label>
            <input value="{{ $data->email }}" id="email" type="text" class="form-control" name="email"
                placeholder="Input here">
        </div>
        </div>
        <div class="modal-footer">
            <a href="{{ url('data-bazar') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>

        </div>
    </form>
@endsection
