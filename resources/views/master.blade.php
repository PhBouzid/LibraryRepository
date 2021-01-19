<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Электронная библиотека @yield('title','Главная')</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/simple-sidebar.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>

    <body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        @include('sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            @include('navbar')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    @section('footscript')


    @section('footscript')
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.bundle.min.js')}}"></script>
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    @show

    </body>

    </html>
