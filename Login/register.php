<?php
	// landing/index page

include('../functions/common_function.php');
include('../controllers/customer_controller.php');
	
getLinks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab</title>
</head>
<body>

<div class="container">
	<form action="" method="post">

<form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Full Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>




<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Email</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="email" placeholder="Email" class="form-control"  type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="user_password" placeholder="Password" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Confirm Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Country</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="country" placeholder="Enter country" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">City</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="city" placeholder="Enter city" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Contact No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="contact_no" placeholder="(639)" class="form-control" type="text">
</div>
</div>
</div>

<!-- Select Basic -->



<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
<button type="submit" name="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>

<?php
if (empty($_POST['first_name'])||
empty($_POST['email'])||
empty($_POST['user_password'])||
empty($_POST['confirm_password'])||
empty($_POST['country'])||
empty($_POST['city'])||
empty($_POST['contact_no'])) {
	die('Please fill all fields!'); }
	if($_POST['user_password'] != $_POST['confirm_password']) {
		die('Password does not match!');
	}
else{

if(isset($_POST['submit'])){
	$name = $_POST['first_name'];
	$email = $_POST['email'];
	$user_password = $_POST['user_password'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$contact_no = $_POST['contact_no'];

	insertCustomer_ctr();
	$customer = new customerClass();
	$customer->submitRec();

	echo "<script>alert('Sign up Successful')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
}
}


?>

</div>
</div>

</fieldset>
</form>
</div>
</div>
<!-- /.container -->
</form>
</body>
</html>

	