<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generate report</title>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}
</style>
<body>    
<center>
<h3> <tt>Generate Report</tt></h3>
<?php
include ('connection.php');

$var_firstname=$_POST['firstname'];
$var_lastname=$_POST['lastname'];

if ($var_firstname == ""){
	$var_firstname = '%';
}
if ($var_lastname == ""){
	$var_lastname = '%';
}
$result = mysqli_query ($link, "SELECT * FROM reserve WHERE firstname LIKE '$var_firstname%' AND lastname LIKE '$var_lastname'") or die (mysqli_error($link));

$num_rows = mysqli_num_rows ($result);
	echo "There are <u> $num_rows </u> records.<P>";
	
	if ($row = mysqli_fetch_row($result))
	{ echo "<table width=976 border=1>";
	
	
	echo "<th width=87><tt>First Name</tt></th>";
	echo "<th width=87><tt>Last Name</tt></th>";
	echo "<th width=70><tt>Mobile Number</tt></th>";
	echo "<th width=87><tt>Email</tt></th>";
	echo "<th width=50><tt>Guests</tt></th>";	
	echo "<th width=70><tt>Type</tt></th>";	
	echo "	<th width=50><tt>Date</tt></th>";	
	echo "<th width=87><tt>Address</tt></th>";
	echo "<th width=50><tt>ID</tt></th>";
	
	echo"</tr>";
	
	do{
		echo "<tr>\n";
		foreach ($row as $field)
		echo "\t<td>$field</td>\n";
		echo "</tr>\n";
		}
		while($row = mysqli_fetch_row($result));
		echo "</table>";
}
else {
	echo "Sorry, no records found";
}
	
	mysqli_close($link);?>
    <form action="navbaradmin.php" method = "POST">
    <input type="submit" name="submit" value="Home" /> </form>
    <div align="center"><tt><a href="searchreserve.html">Back</a></tt></div>
    </center>
   
</body>
</html>