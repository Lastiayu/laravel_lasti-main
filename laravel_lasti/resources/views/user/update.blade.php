@extends('template/admin')
@section('css')
@endsection
@section('content')
    <br>
    <div class="col">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ubah Data Admin</h3>
            </div>
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                            <input type="text" class="form-control" id="name" name="name"
                            value="{{ $user->name }}"placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                            value="{{ $user->email }}"placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Role</label>
                            <input type="text" class="form-control" id="role" name="role"
                            value="{{ $user->role }}"placeholder="Masukkan Role (1)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12 form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" id="password" name="password"
                            value="{{ $user->password }}"placeholder="Masukkan Password">
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
