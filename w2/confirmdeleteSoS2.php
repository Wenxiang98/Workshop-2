<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cornfirm Delete</title>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}
</style>
</head>

<body>
<center>
<h3><tt>List of Customer Reservation</tt></h3>
<p><tt> Are you sure you want to delete this data? </tt></p>
<form method="post" action="deleteSoS.php"> 
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
		</tr>
		
<?php
	include ("connection.php");
	$id = $_GET['id2'];
	$query = "SELECT * FROM reserve where ID = '$id'";
	$result = mysqli_query ($link, $query) or die("Select Error ". mysqli_error($link));
	while ($row = mysqli_fetch_array($result)) {
		$i=1;
		$hid_id = $row['ID'];
	?>
		<tr>
			<td><tt><?php echo $i; ?></tt></td>
		<td><tt><?php echo $row['ID']; ?>
		
		<input name="hid_id" type="hidden" value="<?php echo $row['ID']; ?>" size="2">
		</tt></td>
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
		}
		mysqli_close ($link);
	?>
	</table><p>
	
		<tt>
		<input name="bt_delete" type="submit" value="Delete">
	    </tt>
	</form>
		<form method="post" action="navbaradmin.php">
		  <tt>
		  <input type="submit" value="Home Page">
	      </tt>
	</form>
		<tt>
		</p>
	    </tt>
</center>
</body>
</html>