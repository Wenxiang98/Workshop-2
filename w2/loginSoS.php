<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$username=$_POST['user'];
$password=$_POST['password'];
	
	$con = mysqli_connect("localhost","root","","dbw1");
	$result = mysqli_query($con,"SELECT * FROM user WHERE username='$username' && password='$password' ");
	$count = mysqli_num_rows($result);
	if ($count==1)
	{
	echo "Correct Info";
	header("location:userSoS.php");
}
else

	echo "Incorrect Info";
	header("refresh:2;url=webSoS.php");
		?>
</body>
</html>