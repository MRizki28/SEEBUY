@extends('Layouts.profil')
@section('content')

    <body class="bg-gradient-login">
        <!-- Register Content -->
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card shadow-sm my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-form">
                                        <a href="{{ url('/dashboard') }}" class="btn btn-primary"><i
                                                class="fa fa-arrow-left"></i>Kembali</a>
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Change Profil</h1>
                                        </div>
                                        <form method="post" action="{{ route('change-profil.edit') }}" id="form-input"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Name">
                                                @error('name')
                                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="New Password">
                                                @error('email')
                                                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                                            </div>
                                        </form>
                                        <hr>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
