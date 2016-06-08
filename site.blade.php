<!DOCTYPE html>
<html lang="en">
<head>
  <title>district</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<style>
.jumbotron { 
    background-color: #f4511e; /* Orange */
    color: #ffffff;
}
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
.navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
 

</style>
<body>
    
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="{{ url('/log')}}">Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/')}}">Home</a></li>
        <li><a href="{{ url('/district')}}">District</a></li>
        
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

 
<h1><span class="label label-default"></span></h1>
<h2><b>Site : </b><b>{{$s->S_NAME}}<b></h2>
<h1><span class="label label-default"></span></h1>
<h2></h2>

<h1><span class="label label-default"></span></h1>
<h2><b>ABOUT  </b><b>{{ $s->S_NAME}} :</b></h2>
<h1>{{ $s->S_DESC}}</h>
<h1> <span class="label label-default"></span></h1>
 <h1><span class="label label-default"></span></h1>
<h1><b>Transportation :</b><span class="label label-default"></span></h1>
         <h1>{{ $s->S_TRANS}}</h>
          <h1> <span class="label label-default"></span></h1>

<!--comment-->
<div class="container">
  <p> </p>

  <form role="form"  action="{{ url('/success') }}" class="search-form">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" name="name" class="form-control" id="usr" required="">
    </div>
 

	 <div class="form-group">
      <label for="comment">Comment:</label>

     <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required=""></textarea><br>

    </div>
 <div class="form-group">
      <button type="submit" id="search-submit" class="search-submit">Submit</button>
    </div>

 
  </form>
</div>

</body>
</body>
</html>
