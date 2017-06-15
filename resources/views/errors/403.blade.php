<!DOCTYPE html>
<html>
    <head>
        <title>No access.</title>

        <link href="https://fonts.googleapis.com/css?family=source+sans+pro:300" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 300;
                font-family: 'Source sans Pro';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">:(</div>
                <p>Maaf, Anda tidak Memiliki akses untuk fitur ini.</p>
                <p><a href="{{ url('/') }}">Kembali ke halaman Awal.</a></p>
            </div>
        </div>
    </body>
</html>