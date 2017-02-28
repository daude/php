<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{asset('assets/admin/css/dashboard.css')}}" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Coffee Break</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
        
            <li><a href="#">{{ucfirst(Auth::User()->name)}}</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         
          <ul class="nav nav-sidebar" >
            <li class="active"><a href="">Dashboard</a>
              
            </li>
            <li><a href="">Home Secion</a>
            <ul>
                <li><a href="#">Banner</a></li>
                <li><a href="#">Feature Image</a></li>
              </ul>
            </li>
            <li><a href="{{route('post.index')}}">Posts </a></li>
            <li><a href="#">Category</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="#">About</a></li>
            <li><a href="">Contact</a></li>
           
          </ul>
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">@yield('page-title')</h1>
          <div class="section-content">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>
