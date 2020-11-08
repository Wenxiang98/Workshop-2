<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	include ('connection.php');

//assign variable
$var_username = $_POST['username'];
$var_email = $_POST['email'];
$var_mothername = $_POST['mothername'];
$var_password = $_POST['password'];


//insert data
$result = mysqli_query ($link, "INSERT INTO userr (username,email,mothername,password,user_type) VALUES ('$var_username','$var_email','$var_mothername','$var_password','user')");

//checking success or not
if ($result) {
	
echo '<script>alert("Registration Successful, Please Log In Your Account. ");</script>';
	header
	("location:webSoS.php?msg='Success'");
	
}

	echo '<script>alert("Registration Unsuccessful, Please Try Again");</script>';
mysqli_close($link);
?>
</body>
</html>