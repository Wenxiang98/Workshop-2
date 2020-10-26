<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<h3><tt>List of Customer Reservation</tt></h3>
<p><tt> Are you sure you want to delete this data? </tt></p>
<form method="post" action="deleteadmin.php"> 
	<table width="976" border="1">
  <tr bgcolor="00CC66">
  <th width="70"><tt>INDEX</tt></th>
  <th width="87"><tt>NAME</tt></th>
  <th width="73"><tt>EMAIL</tt></th>
  <th width="73"><tt>MOTHER'S NAME</tt></th>
  <th width="82"><tt>PASSWORD</tt></th>
  <th width="82"><tt>STATUS</tt></th>
</tr>

		
<?php
	include ("connection.php");
	$id = $_GET['id2'];
	$query = "SELECT * FROM userr where username = '$id'";
	$result = mysqli_query ($link, $query) or die("Select Error ". mysqli_error($link));
	while ($row = mysqli_fetch_array($result)) {
		$i=1;
		$hid_id = $row['username'];
	?>
		<tr>
			<td><tt><?php echo $i; ?></tt></td>
		<td><tt><?php echo $row['username']; ?>
		
		<input name="hid_id" type="hidden" value="<?php echo $row['username']; ?>" size="2">
		</tt></td>
		  <td><tt><?php echo $row['email']; ?></tt></td>
  <td><tt><?php echo $row['mothername']; ?></tt></td>
  <td><tt><?php echo $row['password']; ?></tt></td>
   <td><tt><?php echo $row['user_type']; ?></tt></td>
		</tr>
		<?php
		}
		mysqli_close ($link);
	?>
	</table><p>
	
		<tt>
		<input name="bt_delete" type="submit" value="Delete">
	    </tt>
	</form>
		 <tt><a href="adminlist.php">Back</a>
    </tt>
		<tt>
		</p>
	    </tt>
</center>
</body>
</html>