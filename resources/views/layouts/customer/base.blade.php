<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@section('title'){{env('APP_NAME')}}@show</title>
        <!-- Theme Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- Theme Styles -->
        <link href="{{ asset('css/theme/paper-kit.css') }}" rel="stylesheet">    
        <link href="{{ asset('css/theme/bootstrap.min.css') }}" rel="stylesheet">    
        <!-- End Theme Styles/Fonts -->
        @stack('css')    
    </head>
    <body>
        @section('navbar')
                @include('layouts.customer.navbar')
        @show
        <div class="container">
            @yield('content')
        </div>
        <!-- Theme scripts -->        
        
        <script src="{{ asset('js/theme/core/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/theme/core/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/theme/core/bootstrap.min.js') }}" type="text/javascript"></script>       

        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="{{ asset('js/theme/plugins/bootstrap-switch.js') }}"></script>

        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('js/theme/plugins/nouislider.min.js') }}"></script>

        <!--  A lightweight JavaScript date library for parsing, validating, manipulating, and formatting dates : https://github.com/moment/moment -->
        <script src="{{ asset('js/theme/plugins//moment.min.js') }}"></script>

        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="{{ asset('js/theme/plugins//bootstrap-datepicker.js') }}"></script>



        <script src="{{ asset('js/theme/paper-kit.js') }}"></script>

        <!-- End Theme -->

        
        @stack('scripts')
    </body>
</html>