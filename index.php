<?php
	// landing/index page

include('functions/common_function.php');
	
getLinks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab 1</title>
</head>
<body>
	

<div class="container">
  <div class="row">
    <div class="Absolute-Center is-Responsive">
      <div id="logo-container"></div>
      <div class="col-sm-12 col-md-10 col-md-offset-1">
		
        <form action="" id="loginForm">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name='username' placeholder="username"/>          
          </div>
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="password"/>     
          </div>
          
          <div class="p-2">
		  <a href="#"><button type="button" class="btn btn-def btn-block form-control">Login</button>
          </div>

		  <div class="p-2">
		  <a href="Login/register.php"><button type="button" class="btn btn-def btn-block form-control">Register</button>
          </div>
		  
          <div class="form-group text-center">
            <a href="#">Forgot Password</a>&nbsp;
          </div>
        </form>        
      </div>  
    </div>    
  </div>
</div>

</body>
</html>