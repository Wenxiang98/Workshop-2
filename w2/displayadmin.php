<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	if (isset ($_GET['msg']))
		echo "Insert Successful<br>";
		?>
        
<h3> <tt>RESERVATION DETAILS </tt></h3>
<table width="977" border="1">
<tr bgcolor="00CC66">
  <th width="58"><tt>INDEX</tt></th>
  <th width="32"><tt>NAME</tt></th>
  <th width="92"><tt>PASSWORD</tt></th>
  <th width="78"><tt>STATUS</tt></th>
</tr>
<?php
	include ("connection.php");
	$query = "SELECT * FROM admin";
	$result = mysqli_query ($link, $query) or die ("Select Error". mysqli_error($link));
	$i = 1;
	while ($row = mysqli_fetch_array($result)) {
?>

<tr>
  <td><tt><?php echo $i; ?></tt></td>
  <td><tt><?php echo $row['name']; ?></tt></td>
  <td><tt><?php echo $row['password']; ?></tt></td>
  <td><tt><?php echo $row['status']; ?></tt></td>
</tr>

<?php
$i++;
	}
	mysqli_close ($link);
	?>
    </table>
	<p>&nbsp;</p>
	<form method="post" action="updatelistSoS.php">
	  
	  <input type="submit" value="Update">
  </form>
  
 		<a href="userSoS.php"><tt>Back</tt></a>
</center>
</body>
</html>