<?php
session_start();
?>
<html>  
<head>  
  <meta charset="utf-8">
	<meta name="viewport" content="width=width-device, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7/css/font-awesome.min" media="all">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>Welcome</title>
   
</head>  
  
<body>  
	<nav class="navbar navbar-expand-md bg-dark">
		<a class="navbar-brand" href="#" style="text-decoration: none; color: white; font-size: 1.3em;">Welcome</a>
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</nav>
	<div class="container">
		<h2>Welcome</h2> 
		<?php
		$_SESSION['username']="";
		echo $_SESSION['username'];
		?>

<h3><a href="login.php">Logout here</a> </h3>  
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>  
  
</html> 