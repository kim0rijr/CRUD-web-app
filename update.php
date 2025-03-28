<?php
include 'dbconn.php';
$id=$_GET['updateid'];
$sql="Select * from `users`where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$secondname=$row['secondname'];
$username=$row['username'];
$email=$row['email'];
$phonenumber=$row['phonenumber'];
$address=$row['address'];
$password=$row['password'];
$remarks=$row['remarks'];

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
  $sql="update `users` set id=$id, firstname='$firstname',secondname='$secondname',username='$username',email='$email',
  phonenumber='$phonenumber',address='$address',password='$password',remarks='$remarks' where id=$id ";
  $result=mysqli_query($con,$sql);
  if($result){
    header( 'location:viewusers.php');

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
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark">
		<a class="navbar-brand" href="#" style="text-decoration: none; color: white; font-size: 1.3em;">Update</a>
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
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname" value=<?php echo $firstname;?>>
                 
                </div>
                <div class="col-md-6 form-group">
                	<label>Second Name</label>
                  <input type="text" class="form-control" name="secondname" id="secondname" placeholder="Secondname" value=<?php echo $secondname;?>>
                  
                </div>
                <div class="col-md-6 form-group">
                	<label>Username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username"value=<?php echo $username;?> >
                  
                </div>
                <div class="col-md-6 form-group">
                	<label>Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" value=<?php echo $email;?> >
                 
                </div>
                  <div class="col-md-6 form-group">
                	<label>Phone number</label>
                  <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="phone number"value=<?php echo $phonenumber;?>  >
                  <div class="validate"></div>
                </div>
                  <div class="col-md-6 form-group">
                	<label>Address</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="Address" value=<?php echo $address;?>>
                  <div class="validate"></div>
                </div>
                  <div class="col-md-6 form-group">
                	<label>Password</label>
                  <input type="text" class="form-control" name="password" id="password" placeholder="Password" value=<?php echo $password;?>>
                  <div class="validate"></div>
                </div>
                  
              <div class="col-md-6 form-group">
              	<label>Remarks</label>
                <input type="text" class="form-control" name="remarks" rows="2" data-rule="required" data-msg="Enter your remarks" placeholder="Remarks"value=<?php echo $remarks;?>>
                <div class="validate"></div>
              </div>
              
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    
  </form>
	</div>	

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
