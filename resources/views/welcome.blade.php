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
    <link href="{{ asset('css/core_css/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css"/>
  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core_css/custom.css')}}">

   
     <link href="{{ asset('css/core_css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    
    </head>
    <body>
        @include('dashboard.layouts.nav')
      <div class="jumbotron" >
          <div class="container">
            <h1>{{ config('app.name') }} Helpdesk</h1>      
            <p>A place to find solution to your question</p>
            <p>
              <a class="btn btn-primary btn-lg" href="/category" role="button">Knowledge Base</a>
              <a class="btn btn-success btn-lg" href="/login" role="button">Login</a>
              <a class="btn btn-warning btn-lg" href="/register" role="button">Register</a>
            </p>
          </div>
      </div>
            
    
       
    </body>
</html>