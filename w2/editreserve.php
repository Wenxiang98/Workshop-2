<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Reserve</title>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}
</style>
</head>

<body>
<center><h3> <tt>Update Customer Reservation</tt></h3></center>
<center>

<table width="976" border="1">
<tr bgcolor="00CC66">
  <th width="70"><tt>INDEX</tt></th>
  <th width="26"><tt>ID</tt></th>
  <th width="87"><tt>FIRST NAME</tt></th>
  <th width="73"><tt>LAST NAME</tt></th>
  <th width="82"><tt>MOBILE</tt></th>
  <th width="78"><tt>EMAIL</tt></th>
  <th width="61"><tt>GUESTS</tt></th>
  <th width="70"><tt>TYPE</tt></th>
  <th width="58"><tt>DATE</tt></th>
  <th width="170"><tt>ADDRESS</tt></th>
  <th colspan="2"><tt>Action</tt></th>
</tr>
		
<?php
	include ("connection.php");
	$query = "SELECT * FROM reserve";
	$result = mysqli_query ($link, $query) or die ("Select Error". mysqli_error($link));
	$i = 1;
	while ($row = mysqli_fetch_array($result)) {
?>
	
	<tr>
  <td><tt><?php echo $i; ?></tt></td>
  <td><tt><?php echo $row['ID']; ?></tt></td>
  <td><tt><?php echo $row['firstname']; ?></tt></td>
  <td><tt><?php echo $row['lastname']; ?></tt></td>
  <td><tt><?php echo $row['mobilenumber']; ?></tt></td>
  <td><tt><?php echo $row['email']; ?></tt></td>
  <td><tt><?php echo $row['guests']; ?></tt></td>
  <td><tt><?php echo $row['type']; ?></tt></td>
  <td><tt><?php echo $row['date']; ?></tt></td>
  <td><tt><?php echo $row['address']; ?></tt></td>
		<td width="62"><tt><?php echo "<a
		href=updateSoS.php?id1=".$row['ID'].">". "Edit"; ?></tt></td>
		<td width="63"><tt><?php echo "<a 
		href=confirmdeleteSoS.php?id2=".$row['ID'].">". "Cancel"; ?></tt></td>
		</tr>
	
<?php
		$i++;
		}
		mysqli_close ($link);
?>

</table>
<a href="displayrecordSoS2.php"><tt>Back</tt></a>
</center>
</body>
</html>