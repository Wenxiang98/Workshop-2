<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center>
<table width="976" border="1">
<tr bgcolor="00CC66">
  <th width="70"><tt>INDEX</tt></th>
  <th width="87"><tt>NAME</tt></th>
  <th width="73"><tt>EMAIL</tt></th>
    <th width="73"><tt>MOTHER'S NAME</tt></th>
  <th width="82"><tt>PASSWORD</tt></th>
   <th width="82"><tt>STATUS</tt></th>
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
  <td><tt><?php echo $i; ?></tt></td>
  <td><tt><?php echo $row['username']; ?></tt></td>
  <td><tt><?php echo $row['email']; ?></tt></td>
  <td><tt><?php echo $row['mothername']; ?></tt></td>
   <td><tt><?php echo $row['password']; ?></tt></td>
    <td><tt><?php echo $row['user_type']; ?></tt></td>
		<td width="63"><tt><?php echo "<a 
		href=confirmdeleteadmin.php?id2=".$row['username'].">". "Delete"; ?></tt></td>
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
</body></center>
</html>