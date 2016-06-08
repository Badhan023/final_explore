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
<body>
    
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="{{ url('/logout')}}">LogOut</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="{{ url('/insert')}}">Insert</a></li>
        <li><a href="{{ url('/update')}}">Update</a></li>
        
        <li><a href="{{ url('/delete') }}">Delete</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<center>
  
  <table cellpadding="10" cellspacing="5" border="1" width="1000" height="300" >
    <thead><tr>
    <th> Site</th>
    <th> Description</th>
    <th> Transportation</th>
    <th> Site Id</th>
    <th> District Id</th>
     <th> UPDATE</th>
     </tr></thead>
    <tbody>
      @foreach($site as $val)
      <tr>
        <td>{{ $val->S_NAME}}</td>
        <td> {{ $val->S_DESC }}</td>
        <td> {{  $val->S_TRANS }}</td>
        <td> {{  $val->S_ID }}</td>
        <td> {{  $val->D_ID }}</td>
        <td><a href="{{ url('/').'/edit/'.$val->S_ID}}" >Update</a></td>
      </tr>
      @endforeach
    </tbody>

  </table>
</center>




</body>
</body>
</html>
