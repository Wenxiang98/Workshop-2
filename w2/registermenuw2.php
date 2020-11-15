<?php
	include ('connection.php');

//assign variable
$var_name = $_POST['name'];
$var_car_plate = $_POST['carplatenumber'];
$var_account_no = $_POST['accountnumber'];
$var_customer_phone = "0123456789";
$var_password = "123";
#afiqah pls put additional input for phone no in registration customer page

//insert data
$result = mysqli_query ($link, "INSERT INTO registercustomer (customer_name,customer_phone, car_plate,customer_account,customer_password) VALUES ('$var_name','$var_customer_phone','$var_car_plate','$var_account_no','$var_password')");

//checking success or not
if ($result) {
	
echo '<script>alert("Registration Successful, Please Log In Your Account. ");</script>';
	header
	("location:webSoS.php?msg='Success'");
	
}

	echo '<script>alert("Registration Unsuccessful, Please Try Again");</script>';
mysqli_close($link);