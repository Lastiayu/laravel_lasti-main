@extends('template.master')

@section('css')
    <!-- Tambahkan link CSS yang diperlukan jika ada -->
@endsection

@section('content')
    <br>
    <br>
    <div class="container">
        <br>
        <h1>Completed Tasks</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completion Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($completedTasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->completed_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
    @endsection
