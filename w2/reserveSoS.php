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
$var_firstname=$_POST['firstname'];
$var_lastname=$_POST['lastname'];
$var_mobilenumber=$_POST['mobile'];
$var_email=$_POST['email'];
$var_guests=$_POST['guest'];
$var_type=$_POST['type'];
$var_date=$_POST['date'];
$var_address=$_POST['address'];


//insert data
$result = mysqli_query ($link, "INSERT INTO reserve (firstname,lastname,mobilenumber,email,guests,type,date,address) VALUES ('$var_firstname','$var_lastname','$var_mobilenumber','$var_email','$var_guests','$var_type','$var_date','$var_address')");

//checking success or not
if ($result) {
	
	echo"<script>alert('Reservation Successful');</script>";
		echo "<script>window.location.assign('displayrecordSoS2.php')</script>";
		
}

	echo '<script>alert("Reservation Unsuccessful, Please Try Again");</script>';
mysqli_close($link);
?>

</body>
</html>