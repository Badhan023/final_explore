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
    background-color:#123456; /* #f4511e Orange */
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
      color: #ccff66 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
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
<p>visit our beautiful country</p>


<li class="active">
            <form action="{{ url('/search') }}" class="search-form">
                  <input type="text" name='search' id="search" class="search" placeholder="Search" required="">
 		  <button type="submit" id="search-submit" class="search-submit">Search</button>
                </form>
          </li>

  <br>
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="wiki_rasta.jpg" alt="Beatiful Roads" width="460" height="200">
        <div class="carousel-caption">
          <h3>Beatiful Roads</h3>
          <p>A land of exhilarating mix with fascinating history</p>
        </div>
      </div>

      <div class="item">
        <img src="wiki_horin.jpg" alt="Sundarban" width="460" height="200">
        <div class="carousel-caption">
          <h3>Sundarban</h3>
          <p>The Country of lots of natural beauty .</p>
        </div>
      </div>
    
      <div class="item">
        <img src="ahsan.jpg" alt="ahsan monjil" width="460" height="200">
        <div class="carousel-caption">
          <h3>ahsan monjil</h3>
          <p>A historical place </p>
        </div>
      </div>

      <div class="item">
        <img src="wiki.jpg" alt="Flower" width="460" height="200">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
