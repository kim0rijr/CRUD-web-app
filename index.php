<?php
include 'dbconn.php';
if(isset($_POST['submit'])){
  $firstname=$_POST['firstname'];
  $secondname=$_POST['secondname'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $phonenumber=$_POST['phonenumber'];
  $address=$_POST['address'];
  $password=$_POST['password'];
 // $comfirmpassword=$_POST['comfirmpassword'];
  $remarks=$_POST['remarks'];
  $sql="insert into `users` (firstname,secondname,username,email,phonenumber,address,password,remarks) values 
  ('$firstname','$secondname','$username','$email','$phonenumber','$address','$password','$remarks')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Data inserted successfully";
  }else{
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Registration</title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark">
		<a class="navbar-brand" href="#" style="text-decoration: none; color: white; font-size: 1.3em;">Registration</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<div class="container">
  <form method="post">
		<h2></h2>
		<div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                	<label>First Name</label>
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname">
                 
                </div>
                <div class="col-md-6 form-group">
                	<label>Second Name</label>
                  <input type="text" class="form-control" name="secondname" id="secondname" placeholder="Secondname" >
                  
                </div>
                <div class="col-md-6 form-group">
                	<label>Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username" >
                  
                </div>
                <div class="col-md-6 form-group">
                	<label>Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" >
                 
                </div>
                  <div class="col-md-6 form-group">
                	<label>Phone number</label>
                  <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="phone number"  >
                  <div class="validate"></div>
                </div>
                  <div class="col-md-6 form-group">
                	<label>Address</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Address" >
                  <div class="validate"></div>
                </div>
                  <div class="col-md-6 form-group">
                	<label>Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
                  <div class="validate"></div>
                </div>
                  
              </div>
        
              <div class="col-md-6 form-group">
              	<label>Remarks</label>
                <input type="text" class="form-control" name="remarks" rows="2" data-rule="required" data-msg="Enter your remarks" placeholder="Remarks">
                <div class="validate"></div>
              </div>
              <p>Already have an account? <a href="login.php">Login here</a></p>
			<!--<div class="form-group">
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
				<input type="submit" name="reset" class="btn btn-default" value="Reset">
			</div>-->
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <button type="reset" class="btn btn-primary" name="reset">Reset</button>
  </form>
	</div>	

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

