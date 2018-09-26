<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ url('bootstrap/dist/css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container">
            <nav>
                <h1>Export to Excel File</h1>
            </nav>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <a
                            class="btn btn-primary"
                            href="{{ route('export_file_queue') }}">
                            Download excel sheet
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    </body>
</html>