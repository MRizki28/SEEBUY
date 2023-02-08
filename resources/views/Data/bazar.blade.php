@extends('Layouts.Base')

@section('content')
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Bazar</h6>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BazarModal" id="#myBtn">
                    Tambah Data
                </button>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Description</th>
                            <th style="width:200px ;">Aksi</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;

                    @endphp

                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->nama_menu }}</td>
                            <td>Rp. {{ number_format($d->harga) }}</td>
                            <td>{{ $d->gambar }}</td>
                            <td>{{ $d->description }}</td>
                            <td>
                                <a href="/bazar-edit/{{ $d->id }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a href="{{ route('deleteData.bazar', $d->id) }}" class="btn btn-danger delete-confirm"><i
                                        class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="BazarModal" tabindex="-1" role="dialog" aria-labelledby="BazarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="BazarModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('readData.bazar') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class=" form-group">
                            <label for="nama_menu">Nama Menu</label>
                            <input type="text" class="form-control" name="nama_menu" aria-describedby="emailHelp"
                                placeholder="Input Here.." required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" name="harga" placeholder="Input Here">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" name="description"  placeholder="Input Here"></textarea>
                          </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Create Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
