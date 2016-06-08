<!DOCTYPE html>
<html lang="en">
<head>
  <title>main_page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
     .jumbotron { 
    background-color: #99ff66; /* Orange */
    color: #ffffff;
     padding: 100px 25px;
     }
   .bg-grey {
    background-color: #99ff66;
     }
  </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="http://localhost/project/public/index.php/log">Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/')}}">Home</a></li>
        <li><a href="{{ url('/district') }}">District</a></li>
        
        <li><a href="{{ url('/con') }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
       <h1>Exploring Bangladesh</h1> 
       <p>Visit our beautiful country</p> 
    <li class="active">
            <form action="{{ url('/search') }}" class="search-form">
                  <input type="text" name='search' id="search" class="search" placeholder="Search" required="">
 		  <button type="submit" id="search-submit" class="search-submit">Search</button>
                </form>
          </li>
    </div>





<div class="container">
  <h2>Site List</h2>
  <p>Please choose a Site</p>
  <div class="dropup">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Site List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
       @foreach($s as $dists)
           
           <li><a href="{{ url('/').'/sites/'.$dists->S_NAME}}">{{$dists->S_NAME}}</a></li>
        @endforeach
    </ul>
  </div>
</div> 
