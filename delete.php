<?php
include 'dbconn.php';

if (isset($_GET['deleteid'])) {
	$id=$_GET['deleteid'];
	$sql="delete from `users` where id=$id";
	$result=mysqli_query($con,$sql);
	if ($result) {
		header( 'location:viewusers.php');

	}else
	{
		die(mysqli_error($con));
	}
}
?>