<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Core + Admin Template | Core + Admin Template </title>
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
    <link href="vendors/toastr/css/toastr.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="vendors/chartist/css/chartist.min.css">
    <link href="vendors/nvd3/css/nv.d3.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/morrisjs/morris.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/core_css/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css"/>
    <link href="vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core_css/custom.css')}}">

    <link href="{{ asset('css/core_css/dashboard.css')}}" rel="stylesheet" type="text/css"/>
     <link href="{{ asset('css/core_css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>
<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="{{ asset('img/loading.gif') }}" alt="loading..." height="64" width="64"></div>
</div> 
@include('dashboard.layouts.nav')
     <div class="wrapper row-offcanvas row-offcanvas-left">
            
            @include('dashboard.layouts.leftsidebar')
            <aside class="right-side">
                <section class="content sec-mar">
                    <!-- Content Header (Page header) -->
                    {{-- @include('dashboard.layouts.header') --}}
                    <!--section ends-->
                @yield('content')
                <!-- /#right --> 
                </section><!-- /.content --> 
            </aside><!-- /.right-side --> 
    </div>

<!-- global js -->
<div id="qn"></div>
<script src="{{ asset('js/core_js/app.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="{{ asset('js/core_js/backstrech.js')}}"></script>
<!--sales tiles-->
<script src="{{ asset('js/core_js/jquery.countupcircle.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/core_js/granim.min.js')}}" type="text/javascript"></script>
<!-- end of sales tiles -->
<!-- Flot tab2-->
{{-- <script src="vendors/flotchart/js/jquery.flot.js" type="text/javascript"></script>
<script src="vendors/flotchart/js/jquery.flot.resize.js" type="text/javascript"></script>
<script src="vendors/flotchart/js/jquery.flot.time.js" type="text/javascript"></script>
<script src="vendors/flotchart/js/jquery.flot.symbol.js" type="text/javascript"></script>
<script src="vendors/flotchart/js/jquery.flot.pie.js" type="text/javascript"></script>
<script src="vendors/flotchart/js/jquery.flot.stack.js" type="text/javascript"></script>
<script src="vendors/flot.tooltip/js/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="vendors/flotspline/js/jquery.flot.spline.min.js" type="text/javascript"></script> --}}
<!-- end of flot tab2 -->
{{-- <script type="text/javascript" src="vendors/chartist/js/chartist.min.js"></script> --}}
<!--morris donut-->
{{-- <script type="text/javascript" src="vendors/morrisjs/morris.min.js"></script>
<script type="text/javascript" src="js/raphael-min.js"></script>
<script type="text/javascript" src="vendors/d3/d3.min.js"></script>
<script type="text/javascript" src="vendors/nvd3/js/nv.d3.min.js"></script>
<script type="text/javascript" src="js/custom_js/stream_layers.js"></script> --}}
<!--maps-->
{{-- <script src="vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js"></script> --}}
<!-- end of maps -->
<script src="{{ asset('js/core_js/dashboard.js')}}" type="text/javascript"></script>
<!-- end of page level js -->
@yield('footer')

</body>

</html>