@extends('template/admin')

@section('css')

@endsection

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <br>
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Admin</h3>
            </div>
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label for="exampleInputFile">Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="exampleInputFile">Masukkan Foto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Role</label>
                            <input type="text" class="form-control" id="role" name="role" placeholder="Masukkan Role (1)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                        </div>
                    </div>
                </div> <!-- Missing closing div tag -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
