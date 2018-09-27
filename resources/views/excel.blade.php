<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ url('bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
    </head>
    <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">Export to Excel File</a>
    </nav>

    <div class="container">
        <div class="row button-pos">
            <div class="col-sm-4" style="margin-left: 15px">
                <a
                    class="btn btn-primary"
                    href="{{ route('export_file_multiple_sheets') }}">
                    Download excel sheet
                </a>
            </div>
            <div class="col-sm-6" style="margin-left: -130px; margin-top: 8px">
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar"
                         aria-valuenow="70" aria-valuemin="0"
                         aria-valuemax="100" style="width:70%">
                        70%
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-sm-12">
                <div class="col-sm-9 col-sm-offset-2">
                    <div class="table table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Country</th>

                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->mobile_number }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->country }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>