@extends('template.master')
@section('content')
    <br>
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Sponsor</h3>
            </div>
            <form action="{{ route('sponsor.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label for="exampleInputFile">Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto">
                                    <label class="custom-file-label" for="exampleInputFile">Masukkan Logo</label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama Brand">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                placeholder="Masukkan Alamat Brand">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukkan Email Brand">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                placeholder="Masukkan No Hp Brand">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Nama Acara</label>
                            <input type="text" class="form-control" id="nama_acara" name="nama_acara"
                                placeholder="Masukkan Nama Acara">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori"
                                placeholder="Masukkan Kategori Acara">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Feedback</label>
                            <input type="text" class="form-control" id="feedback" name="feedback"
                                placeholder="Masukkan Feedback">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>S&K</label>
                            <input type="text" class="form-control" id="SnK" name="SnK"
                                placeholder="Masukkan S&K">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('js')
    <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(functi $('#deskr    ipsimernote()
        })
    </script>
@endsection
