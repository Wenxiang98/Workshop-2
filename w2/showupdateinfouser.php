<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
		if (isset ($_GET['id1']))
			echo "Update Successful<br>";
	?>
	</p>
	<p>&nbsp; </p>
	<table width="1018" border="1">
	<tr bgcolor="00CC66">
 	<th width="54"><tt>INDEX</tt></th>
  	<th width="37"><tt>ID</tt></th>
  	<th width="79"><tt>USER NAME</tt></th>
  	<th width="79"><tt>EMAIL</tt></th>
  	<th width="108"><tt>MOTHER NAME</tt></th>
  	<th width="136"><tt>PASSWORD</tt></th>
</tr>
	<?php
		include ("connection.php");
		$query = "SELECT * FROM userr where ID = $_GET[id]";
		$result = mysqli_query ($link, $query) or die("Select Error ". mysqli_error($link));
		$i = 1;
		while ($row = mysqli_fetch_array($result)) {
		?>
		<tr>
  	<td><tt><?php echo $i; ?></tt></td>
  	<td><tt><?php echo $row['ID']; ?></tt></td>
  	<td><tt><?php echo $row['username']; ?></tt></td>
  	<td><tt><?php echo $row['email']; ?></tt></td>
  	<td><tt><?php echo $row['mothername']; ?></tt></td>
  	<td><tt><?php echo $row['password']; ?></tt></td>
		</tr>
        
		<?php
			$i++;
			}
			mysqli_close ($link);
			
	?>
	</table>
	<p><tt>
    </form>
	</tt>
	<form method="post" action="navbaruser.php">
	  <p><tt>
      <input type="submit" value="Home Page">
	  </tt></p>
	</form>

        </center>
</body>
</html>