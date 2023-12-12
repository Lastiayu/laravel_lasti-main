@extends('template/master')
@section('css')
@endsection
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Table Sponsor</h3>
        </div>
        <div class="card-body">
            <div class="card-body">
                <img src="{{ Storage::url('sponsor/' . $sponsor['logo']) }}" style="width:150px" class="img-thumbnail">
                <br>
                <br>
                <h6 class="card-subtitle mb-2 text-muted"><?= $sponsor['nama'] ?> </h6>
                <div class="row">
                    <div class="col-md-4">Alamat</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $sponsor['alamat'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Email</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $sponsor['email'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">No HP</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $sponsor['no_hp'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Nama Acara</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $sponsor['nama_acara'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Kategori</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $sponsor['kategori'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Feedback</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $sponsor['feedback'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">SnK</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $sponsor['SnK'] ?></div>
                </div>
            </div>
            @endsection
            @section('js')
                <!-- DataTables & Plugins -->
                <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

                <script src="{{ url('plugins/datatables-
                    responsive/js/dataTables.responsive.min.js') }}"></script>

                <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.j') }}s"></script>
                <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
                <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
                <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
                <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
                <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
                <!-- Page specific script -->
                <script>
                    $(function() {
                        $("#example1").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    });
                </script>
            @endsection
