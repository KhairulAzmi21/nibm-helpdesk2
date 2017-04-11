<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
         <!-- global css -->
     <link href="{{ asset('css/core_css/app.css')}}" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{ asset('css/core_css/dashboard.css')}}" rel="stylesheet" type="text/css"/>
     <link href="{{ asset('css/flag-icon.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/core_css/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css"/>
  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core_css/custom.css')}}">

   
     <link href="{{ asset('css/core_css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    
    </head>
    <body>
      @include('dashboard.layouts.nav')
      <div class="jumbotron" >
          <div class="container">
            <h1>{{ config('app.name') }} {{ trans('helpdesk.helpdesk')}}</h1>      
            <p>{{ trans('helpdesk.header')}}</p>
         
            <p>
              <a class="btn btn-primary btn-lg" href="/knowledgebases" role="button">{{ trans('helpdesk.knowledgebase')}}</a>
              <a class="btn btn-success btn-lg" href="/login" role="button">{{ trans('helpdesk.login')}}</a>
              <a class="btn btn-warning btn-lg" href="/register" role="button">{{ trans('helpdesk.register')}}</a>
            </p>
          </div>
      </div>
            
        <script src="{{ asset('js/core_js/app.js') }}" type="text/javascript"></script>
        <!-- end of global js -->
        <!-- begining of page level js -->
        <script src="{{ asset('js/core_js/backstrech.js')}}"></script>
        <!--sales tiles-->
        <script src="{{ asset('js/core_js/jquery.countupcircle.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/core_js/granim.min.js')}}" type="text/javascript"></script>

        <script src="{{ asset('js/core_js/dashboard.js')}}" type="text/javascript"></script>
       
    </body>
</html>