@extends('template/user')
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
        <div class="card-header">
            <h3 class="card-title"></h3>
        </div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <!-- Profil Pengguna -->
                <div class="col-md-12">
                    @foreach ($profile as $profile )


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ Storage::url('profile/' . $profile['gambar']) }}" style="width:150px" class="img-thumbnail">
                            </div>
                            <div class="col-md-9">
                                <h5 class="card-title">
                                    {{ $profile->nama }}
                                </h5>
                                <p class="card-text">
                                    {{ $profile->email }}
                                </p>
                                <p class="card-text"><small class="text-muted">Admin Sejak {{ $profile->created_at }} </small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endsection
