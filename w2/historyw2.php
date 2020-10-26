<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>History</title>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}
</style>
</head>

<body>
<center>
<h3> <tt>History</tt></h3>

<table width="976" border="1">
<tr bgcolor="00CC66">
  <th width="70"><tt>INDEX</tt></th>
  <th width="26"><tt>ID</tt></th>
  <th width="87"><tt>PLATE NUMBER</tt></th>
  <th width="73"><tt>DURATION TIME</tt></th>
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
 
		
<?php
		$i++;
		}
		mysqli_close ($link);
?>

</table>

	<p>&nbsp;</p>
	<tt><a href="navbaradminw2.php">Back</a>
    </tt>
</center>
</body>
</html>