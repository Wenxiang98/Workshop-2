<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
 <?php
	
if(isset($_POST['login'])){

	$username=$_POST['username'];
	$password = $_POST['password'];
	
	if($username == "")
	$error= "error : Please enter your name.";
	
	else if($password == "")
	$error= "error : Please enter your password.";
	else 
	{
	  include ('connection.php');
	  $row = mysqli_query ($link, "SELECT * FROM userr WHERE username = '$username' and password = '$password'") or die
	  ("Couldn't connect to database". mysqli_error($link));
	  
	  if (mysqli_num_rows($row) >0) {
		  while ($res = mysqli_fetch_assoc($row)){
			  $_SESSION['username'] = $res['username'];
			  $_SESSION['user_type'] = $res['user_type'];
		  }
		  
		  if ($_SESSION['user_type']== 'admin')
		 echo"<script>alert('You Just Logged In This System As Admin');</script>";
		echo "<script>window.location.assign('navbaradmin.php')</script>";
		
			  if ($_SESSION['user_type']== 'user')
		 		  echo"<script>alert('You Just Logged In The System');</script>";
		echo "<script>window.location.assign('navbaruser.php')</script>";
		  
		  
	  }
	  
	  else {
		  echo '<script>alert("You are not register in this website !");</script>';
		  
	  }
	}
  }


?>

	<div class="box">
	<h2>Admin Login</h2>
    <form class="form-horizontal" method="post" action="">
<form>
	<div class="inputBox">
    	<input type="text" name="username" required="required" />
        <label>Name</label>
    </div>
     <div class="inputBox">
    	<input type="password" name="password" required="required" />
        <label>Password</label>
    </div>
    <center>
      <p>
        <input type="submit" name="login" class="btn btn-success" value="Login" />
      </p>
      <p>&nbsp; </p>
    </center>
    