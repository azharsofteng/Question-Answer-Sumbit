<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Software Templete | @yield('title')</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        
        @include('partials.navbar')

        <div id="layoutSidenav">
            
            @include('partials.sidebar')

            <div id="layoutSidenav_content">

                @yield('main-content') 
                
                @include('partials.footer')
            
            </div>
        </div>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src=" {{ asset('js/all.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/simple-datatables@latest.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
