@extends('template/admin')
@section('css')
    <!-- DataTables -->

    <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col">
    </div>
</div>
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

            <a href="{{ route('sponsor.create') }}"><button type="submit" class="btn btn-primary"><i
                        class="fa fa-plus"></i> Tambah</button></a>

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nama</th>
                        <th>Nama Acara</th>
                        <th>Kategori</th>
                        <th>Tanggal Event</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sponsor as $data)
                        <tr>
                            <td><img src="{{ Storage::url('sponsor/' . $data->logo) }}" style="width:150px"
                                    class="img-thumbnail">

                            </td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nama_acara }}</td>
                            <td>{{ $data->kategori }}</td>
                            <td>{{ $data->start_date }}</td>
                            <td>
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('sponsor.destroy', $data->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i
                                            class="fa fa-trash"></i></button>
                                </form>

                                <a href="{{ route('sponsor.edit', $data->id) }}" class="btn btn-outline-warning btn-sm"><i
                                        class="fa fa-edit"></i>Edit</a>

                                <a href="{{ route('sponsor.detail', $data->id) }}"
                                    class="btn btn-outline-success btn-sm"><i class="fa fa-info-circle"></i>Detail</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('js')
    <!-- DataTables & Plugins -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <script
        src="{{ url('plugins/datatables-
                                                        responsive/js/dataTables.responsive.min.js') }}">
    </script>

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
@endsection
