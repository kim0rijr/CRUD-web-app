<?php
include 'dbconn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7/css/font-awesome.min" media="all">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>View users</title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark">
		<a class="navbar-brand" href="#" style="text-decoration: none; color: white; font-size: 1.3em;">View users</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<div class="container">
    <button class= "btn btn-primary my-5"><a href="index.php" class="text-light">Add user</a></button>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    <table class="table">  
        <thead>  
  
        <tr>  
  
            <th scope="col">User Id</th>  
            <th scope="col">First name</th>  
            <th scope="col">Second name</th>  
            <th scope="col">Username</th>  
            <th scope="col">Email</th>  
            <th scope="col">Phone number</th> 
            <th scope="col">Address</th> 
            <th scope="col">Remarks</th> 
            <th scope="col">Operations</th> 
            
        </tr>  
        </thead>  
		<tbody>
        <?php
        $sql="Select * from `users`";
        $result=mysqli_query($con,$sql);
        if($result){
            while ($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $firstname=$row['firstname'];
                $secondname=$row['secondname'];
                $username=$row['username'];
                $email=$row['email'];
                $phonenumber=$row['phonenumber'];
                $address=$row['address'];
                $remarks=$row['remarks'];
                echo '
                <tr>
        <th scope="row">'.$id.'</th>
         <td>'.$firstname.'</td>
         <td>'.$secondname.'</td>
         <td>'.$username.'</td>
         <td>'.$email.'</td>
         <td>'.$phonenumber.'</td>
         <td>'.$address.'</td>
         <td>'.$remarks.'</td>
         <td>
         <button class= "btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
         <button class= "btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
         </td>
        </tr>';
            }
        }
        ?>
        </tbody>	 
  
    </table>  
    <p>Do you want to log out? <a href="adminlogin.php">Logout Here</a></p>
		</form>
	</div>

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
