@extends('Layouts.Base')

@section('content')
    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Data Bazar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dataBazar }}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-success mr-2"><i class="fas fa-arrow-down"></i> </span>
                                <a href="/data-bazar"><span>Detail</span></a>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-sharp fa-solid fa-envelope-circle-check fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Data Pesanan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dataPesanan }}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-danger mr-2"><i class="fa fa-arrow-up"></i></span>
                                <a href="/pesanan"><span>Detail</span></a>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-sharp fa-solid fa-envelope-open-text fa-2x text-danger"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dataAdmin }}</div>
                            <div class="mt-2 mb-0 text-muted text-xs">
                                <span class="text-danger mr-2"><i class="fa-solid fa-users"></i></span>
                                <a href="/data-admin"><span>Detail</span></a>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-users fa-2x text-info"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang Di Dashboard 🎉</h5>
                            <p class="mb-4">{{ auth()->user()->name }} | <b>{{ auth()->user()->level }}</b></p>
                            <i class="fa-sharp fa-solid fa-face-smile text-warning"></i>
                            <a href="javascript:;" class="">Enjoy your work !!!</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/assets/img/illustrations/man-with-laptop-light.png"
                                height="350" alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
