<!DOCTYPE html>
<html>
    <head>
        <title>Volunteer Database</title>

        <!-- Bootstrap styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" crossorigin="anonymous">

        <!-- Custom styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        @include('partials/header')

        <section class="content container-fluid">
            @if(Session::has('success'))
                <div class="general-alert alert alert-success" role="alert">
                    <b>Success!</b> {{ Session::get('success') }}
                </div>
            @endif

            @yield('content')
        </section>
    </body>
</html>