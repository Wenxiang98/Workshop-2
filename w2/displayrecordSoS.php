<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reservation</title>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}
</style>
</head>

<body>
<center>
<?php
	if (isset ($_GET['msg']))
		echo "Insert Successful<br>";
		?>
        
<h3> <tt>RESERVATION DETAILS </tt></h3>
<table width="977" border="1">
<tr bgcolor="00CC66">
  <th width="58"><tt>INDEX</tt></th>
  <th width="32"><tt>ID</tt></th>
  <th width="92"><tt>FIRST NAME</tt></th>
  <th width="78"><tt>LAST NAME</tt></th>
  <th width="94"><tt>MOBILE</tt></th>
  <th width="115"><tt>EMAIL</tt></th>
  <th width="64"><tt>GUESTS</tt></th>
  <th width="82"><tt>TYPE</tt></th>
  <th width="106"><tt>DATE</tt></th>
  <th width="192"><tt>ADDRESS</tt></th>
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
</tr>

<?php
$i++;
	}
	mysqli_close ($link);
	?>
    </table>
	<p>&nbsp;</p>

  
 		<a href="navbaruser.php"><tt>Back</tt></a>
</center>
</body>
</html>