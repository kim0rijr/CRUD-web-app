<?php
include 'dbconn.php';
if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from users where username='".$username."' AND password='".$password."'
	limit 1";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)==1){
		header( 'location:welcome.php');
		exit();
	}else{
		die(mysqli_error($con));
		exit();

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7/css/font-awesome.min" media="all">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Login</title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark">
		<a class="navbar-brand" href="#" style="text-decoration: none; color: white; font-size: 1.3em;">User Login</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<div class="container">
		<h2></h2>
		<form method="POST">
			<div class="form-group">
				<label>Userame</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Login">
			</div>
			<p>Not a member yet? <a href="index.php">Register Here</a></p>
			<p>Are you an Admin? <a href="adminlogin.php">Login Here</a></p>
		</form>
	</div>

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

  
