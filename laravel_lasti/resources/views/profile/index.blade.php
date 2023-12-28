@extends('template/master')
@section('css')
@endsection
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">
            <?= $judul; ?>
        </h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <!-- Profil Pengguna -->
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img" alt="Profile Image">
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title">
                                    <?= $user['nama_lengkap']; ?>
                                </h5>
                                <p class="card-text">
                                    <?= $user['email']; ?>
                                </p>
                                <p class="card-text"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
