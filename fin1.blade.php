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
        <li><a href="/var/www/html/test/trans.html">Transportation</a></li>
        <li><a href="/var/www/html/HTML/con.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<form class="form-horizontal" action="{{ url('/').'/district' }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<fieldset>

					<!-- Form Name -->
					<center><legend>Sign Up Form</legend></center>

					

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Username">Username</label>  
					  <div class="col-md-4">
					  <input id="Username" name="Username" type="text" placeholder="Enter your preferred username" class="form-control input-md" required="">
					    
					  </div>
					</div>

					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Password</label>
					  <div class="col-md-4">
					    <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control input-md" required="">
					    
					  </div>
					</div>

					

					
					

					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for=""></label>
					  <div class="col-md-4">
					    <button id="" name="button" class="btn btn-info" type="submit">Sign Up</button>
					  </div>
					</div>

					</fieldset>
					</form>

		</div>
		<div class="col-md-1">
		</div>
		

