<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUA-BS: HsnaZmni</title>
</head>
<?php
require 'dbconnect.php';
if(isset($_POST['login'])){

	$id=$_POST['email'];
	$password = $_POST['password'];
	
	$res = $link->query("SELECT * FROM user where email='$id' and password='$password'");
	$row = $res->fetch_assoc();
  
	$user = $row['user_id'];
	$name = $row['username'];
	$pass = $row['password'];
	$email = $row['email'];
	$type = $row['status'];
	$mothername = $row['mothername'];
  
	if($email==$id && $pass=$password){
	  session_start();
	  if($type=="admin"){
		$_SESSION['id']=$user;
		
		$_SESSION['mytype']=$type;
		echo"<script>alert('Just Logged In This System As Admin');</script>";
		echo "<script>window.location.assign('userlist.php')</script>";
	  } else if($type=="user"){
  
		$_SESSION['mysesi']=$user;
		
		$_SESSION['mytype']=$type;
		echo"<script>alert('You Just Logged In The System');</script>";
		echo "<script>window.location.assign('userbook.php')</script>";
	  } else{
  
  
		echo'<script>alert("Wrong Credential");</script>';  

	  }
	} else{

		echo '<script>alert("Enter Correct Username or Password !");</script>';
  
	}
  }


?>
<style>
body
{
	
	margin:0;
	padding:0;
	background:none;
	background-size:cover;
	font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #F08080;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .loginbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .loginbtn {
     width: 100%;
  }
}
</style>
<body>
<form class="form-horizontal" method="post" action="" style="max-width:500px;margin:auto">
<div class="container">
    <div style="display: flex; justify-content: center;">  
	  <img src="theeyes.jpg" class="user"></div>
    <h2><center>HsnaZmni MUA Booking System</center></h2>
    <p><center>Please Log In To Your Account.</center></p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" name="email" required>

    <label for="pasword"><b>Password</b></label>
    <input type="password" name="password" required>

    <center>Don't have an account? <a href="register.php"> Register Here!</a></center>
    
    <br>
    <div class="clearfix">
      <button type="submit" name="login" class="loginbtn">Log In</button>
      <button type="reset" class="cancelbtn">Reset</button>    
    </div>
  </div>
</form>

</body>
</html>
