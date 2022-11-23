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
                            <th>Level</th>
                            <th>Email</th>
                            <th>Remember Token</th>
                            <th style="width:200px ;">Aksi</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;
                        
                    @endphp

                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->level }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->remember_token }}</td>
                            <td>
                                <a href="/admin-edit/{{ $d->id }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a href="{{ route('deleteData.admin', $d->id) }}" class="btn btn-danger delete-confirm"><i
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
                    <h5 class="modal-title" id="BazarModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('readData.admin') }}" method="POST">
                        @csrf

                        <div class=" form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                                placeholder="Input Here.." required>
                        </div>
                        <div class="form-group">
                            <label for="level">level</label>
                            <select class="form-control" name="level">
                                <option>Super Admin</option>
                                <option>Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Input Here">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="konfirmasi_password">
                        </div>
                        <input type="hidden" id="remember_token" name="remember_token">

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
