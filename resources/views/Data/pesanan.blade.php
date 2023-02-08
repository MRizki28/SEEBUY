@extends('Layouts.Base')

@section('content')
    <div class="col-lg-12">
        <div class="card mb-4">

            <a href="{{ route('cetak-pesanan') }}" target="blank" class="btn btn-primary">Cetak Data <i class="fa-solid fa-print"></i></a>
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
                {{-- <a href="{{ route('deleteAll.pesanan') }}" class="btn btn-danger delete-confirm"><i
                    class="fa fa-trash"></i>
            </a> --}}
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#BazarModal" id="#myBtn"><i class="fa fa-trash"></i>
                Delete All Data
            </button>
            {{-- <a href="{{ route('delete-all-pesanan') }}" target="blank" class="btn btn-danger">Delete Semua Data <i class="fa fa-trash"></i></a> --}}
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Nama Pemesan</th>
                            <th>Jumlah</th>
                            <th>No Hp</th>
                            <th>Detail</th>
                            <th>Kode</th>
                            <th>Total Harga </th>
                            <th style="width:200px ;">Aksi</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;

                    @endphp

                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->bazar->nama_menu }}</td>
                            <td>{{ $d->nama_pemesan }}</td>
                            <td>{{ $d->jumlah_pesanan }}</td>
                            <td>{{ $d->nohp }}</td>
                            <td>{{ $d->detail }}</td>
                            <td>{{ $d->kode_pesanan }}</td>
                            <td>Rp. {{ number_format($d->total_harga) }}</td>
                            <td>
                                <a href="/pesanan-edit/{{ $d->id }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a href="{{ route('deleteData.pesanan', $d->id) }}" class="btn btn-danger delete-confirm"><i
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

    <div class="modal fade" id="BazarModal" tabindex="-1" role="dialog" aria-labelledby="BazarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="BazarModalLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card w-75 mx-auto">
                        <div class="container">
                        <img src="{{ asset('assets/image/delete.png') }}" class="card-img-top " alt="...">
                          <h5 class="title">Delete Semua Data</h5>
                          <p class="text">Pastikan anda sudah membackup data.jika anda mengklik tombol delete dibawah maka otomatis data anda tidak akan bisa di recovery.</p><br>
                        </div>
                        </div>
                        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                    <a href="{{ route('deleteAll.pesanan') }}" class="btn btn-outline-danger">Delete</a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
