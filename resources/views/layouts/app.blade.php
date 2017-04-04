<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('page') - {{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
     <link href="{{ asset('css/core_css/app.css')}}" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{ asset('css/core_css/dashboard.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/core_css/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css"/>
  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core_css/custom.css')}}">

   
     <link href="{{ asset('css/core_css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>
<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('img/loading.gif')}}" alt="loading..." height="64" width="64"></div>
</div> 
            @include('dashboard.layouts.nav')
            <div class="wrapper row-offcanvas row-offcanvas-left">
            @if(!Auth::guest())
            @include('dashboard.layouts.leftsidebar')
            <aside class="right-side">
                    <!-- Content Header (Page header) -->
                    {{-- @include('dashboard.layouts.header') --}}
                    <!--section ends-->
            @endif
                @yield('content')
            @if(!Auth::guest())
                <!-- /#right  </section>-->
                <!-- /.content --> </aside>
            <!-- /.right-side --> </div>
            @endif

<!-- global js -->
<div id="qn"></div>
<script src="{{ asset('js/core_js/app.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="{{ asset('js/core_js/backstrech.js')}}"></script>
<!--sales tiles-->
<script src="{{ asset('js/core_js/jquery.countupcircle.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/core_js/granim.min.js')}}" type="text/javascript"></script>

<script src="{{ asset('js/core_js/dashboard.js')}}" type="text/javascript"></script>

@yield('footer')

</body>

</html>