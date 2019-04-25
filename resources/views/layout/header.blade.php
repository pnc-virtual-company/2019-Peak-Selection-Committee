
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selecttion Committee</title>
    <link rel="icon" href="images/title.png">
    
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/plugins/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/plugins/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/plugins/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">

</head>
<body>
    
    <body id="mimin" class="dashboard">
        <!-- start: Header -->
          <nav class="navbar navbar-default header navbar-fixed-top">
            <div class="col-md-12 nav-wrapper">
              <div class="navbar-header" style="width:100%;">
                <div class="opener-left-menu is-open">
                  <span class="top"></span>
                  <span class="middle"></span>
                  <span class="bottom"></span>
                </div>
                <a href="index.html" class="navbar-brand"> 
                  <b>MIMIN</b>
                </a>
                <ul class="nav navbar-nav navbar-right user-nav">
                  <li><a href="#"><span class="fa fa-sign-out"></span></a></li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- end: Header -->
  
        <div class="container-fluid mimin-wrapper">
    
          {{--  include leftside bar  --}}
          @include('layout.leftSideBar')
  
            <!-- start: Content -->
            <div id="content">
                <div class="panel-body">