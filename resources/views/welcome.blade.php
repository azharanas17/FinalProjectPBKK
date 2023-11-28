<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sistem Manajemen Perpustakaan | @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
        <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script> 
    </head>

    <body>
        <div style="background:#ccc">

            @include('layouts/menu')
            @include('layouts/banner')
            <div class="col-md-12">
                <div class="row" style="background:#ccc">
                    @include('layouts/konten')
                </div>
            </div>
            @include('layouts/footer')

        </div>
    </body>
</html>