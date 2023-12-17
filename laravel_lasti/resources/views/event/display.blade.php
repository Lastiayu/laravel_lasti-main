<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <div class="jumbotron">

            <table class="table table-striped table-bordered table-hover">
                <thead class="thead">
                    <tr class="warning">
                        <th> Id </th>
                        <th> Title </th>
                        <th> Color </th>
                        <th> Start Date</th>
                        <th> End Date</th>
                        <th> Update / Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                @foreach ($events as $event)
                    <tbody>
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->color }}</td>
                            <td>{{ $event->start_date }}</td>
                            <td>{{ $event->end_date }}</td>
                            <th><a href="{{ action('EventController@edit', $event['id']) }}" class="btn btn-success">
                                    Edit </a>
                            </th>
                            <th>
                                <form method="POST" action="{{ action('EventController@destroy', $event['id']) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger"> Delete </button>
                                </form>
                            </th>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

</body>

</html>
