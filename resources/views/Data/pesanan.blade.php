@extends('Layouts.Base')

@section('content')
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
               <a href="{{ route('cetak-pesanan') }}" target="blank" class="btn btn-primary">Cetak Data <i class="fa-solid fa-print"></i></a>
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
@endsection
