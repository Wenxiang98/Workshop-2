<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<?php
require 'connection.php';
if(isset($_POST['login'])){

	$id=$_POST['username'];
	$password = $_POST['password'];
	
	$res = $link->query("SELECT * FROM userr where username='$id' and password='$password'");
	$row = $res->fetch_assoc();
  
	$username = $row['username'];
	$email = $row['email'];
	$mothername = $row['mothername'];
	$password = $row['password'];
	$user_type = $row['user_type'];
	$user = $row['ID'];
  
	if($username==$id && $password=$password){
	  session_start();
	  if($user_type=="admin"){
		$_SESSION['ID']=$user;
		
		$_SESSION['user_type']=$user_type;
		echo"<script>alert('You Just Logged In This System As Admin');</script>";
		echo "<script>window.location.assign('navbaradmin.php')</script>";
	  } else if($user_type=="user"){
  
		$_SESSION['mysesi']=$user;
		
		$_SESSION['user_type']=$user_type;
		echo"<script>alert('You Just Logged In The System');</script>";
		echo "<script>window.location.assign('navbaruser.php')</script>";
	  } else if($user_type=="staff"){
		  
		$_SESSION['mysesi']=$user;
		
		$_SESSION['user_type']=$user_type;
		echo"<script>alert('You Just Logged In The System As Staff');</script>";
		echo "<script>window.location.assign('navbarstaff.php')</script>";
	  }else{
  
  
		echo'<script>alert("Wrong Credential");</script>';  

	  }
	} else{

		echo '<script>alert("Enter Correct Username or Password !");</script>';
  
	}
  }


?>

</body>
</html>