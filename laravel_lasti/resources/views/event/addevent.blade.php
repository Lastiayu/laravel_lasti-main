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
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: #2e6da4; color: white;">
                        Add Event To Calender

                    </div>

                    <div class="panel-body">

                        <h1> Task: Add Data </h1>
                        <form method="POST" action="{{ action('EventController@store') }}">

                            {{ csrf_field() }}
                            <label for="">Enter Name of Event</label>
                            <input type="text" class="form-control" name="title"
                                placeholder="Enter the Name" /><br /><br />
                            <label for=""> Enter Color</label>
                            <input type="color" class="form-control" name="color"
                                placeholder="Enter the color" /><br /><br />
                            <label for=""> Enter Start Date of Event</label>
                            <input type="date" class="form-control" name="start_date" class="date"
                                placeholder="Enter Start Date" /><br /><br />
                            <label for=""> Enter End Date of Event</label>
                            <input type="date" class="form-control" name="end_date" class="date"
                                placeholder="Enter End Date" /><br /><br />

                            <input type="submit" name="submit" class="btn btn-primary" value="Add Event Data" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
