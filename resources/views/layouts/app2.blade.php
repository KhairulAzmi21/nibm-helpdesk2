<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Bootstrap -->
    <!-- global css -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    @yield('page_lvl_css')
    
    <!--end page level css-->

    <!-- Scripts -->
   
</head>
<body class="bg-slider">
    <div id="app">   
                    @yield('content') 
    </div>

    <!-- Scripts -->
    <!-- global js -->
<script src="{{asset('js/core_js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core_js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core_js/backstrech.js')}}"></script>
<!-- end of global js -->
<!-- page level js -->
@yield('page_lvl_js')

<!-- end of page level js -->

    @yield('footer')
</body>
</html>
