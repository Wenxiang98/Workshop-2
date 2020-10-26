<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SoS Management</title>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}
</style>
</head>

<body>
<center>
<h3> <tt>Spa Management</tt></h3>
<table width="977" border="1">
<tr bgcolor="00CC66">
  <th width="70" height="29"><tt>INDEX</tt></th>
  <th width="87"><tt>USERNAME</tt></th>
  <th width="73"><tt>EMAIL</tt></th>
  <th width="82"><tt>MOTHERNAME</tt></th>
  <th width="78"><tt>PASSWORD</tt></th>
  <th width="61"><tt>USER TYPE</tt></th>
  <th colspan="2"><tt>ACTION</tt></th>
</tr>

<?php
	include ("connection.php");
	$query = "SELECT * FROM userr";
	$result = mysqli_query ($link, $query) or die ("Select Error". mysqli_error($link));
	$i = 1;
	while ($row = mysqli_fetch_array($result)) {
?>
	
  <tr>
  <td height="29"><tt><?php echo $i; ?></tt></td>
  <td><tt><?php echo $row['username']; ?></tt></td>
  <td><tt><?php echo $row['email']; ?></tt></td>
  <td><tt><?php echo $row['mothername']; ?></tt></td>
  <td><tt><?php echo $row['password']; ?></tt></td>
  <td><tt><?php echo $row['user_type']; ?></tt></td>
  <td width="63"><tt><?php echo "<a 
		href=confirmdeleteuser.php?id2=".$row['ID'].">". "Delete"; ?></tt></td>
		</tr>
	
<?php
		$i++;
		}
		mysqli_close ($link);
?>

</table>

	<p>&nbsp;</p>
	<tt><a href="navbaradmin.php">Back</a>
    </tt>
    </center>
</body>
</html>