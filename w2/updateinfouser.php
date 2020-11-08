<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">

<?php
	include ("connection.php");
	$id = $_GET['id1'];
	
	$query = "SELECT * FROM userr where ID ='$id'";
	$result = mysqli_query ($link, $query) or die ("Select Error". mysqli_error($link));
	$row = mysqli_fetch_array($result);
	
		if (isset($_POST['btUpdate'])) {
			$var_username=$_POST['username'];
			$var_email=$_POST['email'];
			$var_mothername=$_POST['mothername'];
			$var_password=$_POST['password'];
			
			$sql = "UPDATE userr SET username='$var_username',email='$var_email',mothername='$var_mothername',password='$var_password' WHERE ID = $id";
			$result = mysqli_query ($link, $sql);
			
			if ($result == TRUE) {
					header ("location:showupdateinfouser.php?id='$id'");}
			else
					echo "Update Error  :". mysqli_error($link);
				}
				
		if (isset($_POST['btIndex'])){
				header("location:navbaruser.php");
				}
				if (isset($_POST['btUpdate_Another'])) {
				header("location:editreserve.php");
				}
			?>
			
		<center>
		<p><tt>Edit Customer Reservation</tt></p>
		<form id="form1" name="form1" method="post" action="">
			<table width="443" border="0">
			<tr>
				<td width="115"><tt>User Name</tt></td>
				<td width="11"><tt>:</tt></td>
				<td width="295">
					<tt>
					<input type="text" name="username" value="<?php echo $row['username']; ?>" />
					</tt></td>
			  </tr>
					
					<tr>
				<td><tt>Email</tt></td>
				<td><tt>:</tt></td>
				<td><tt>
			    <input type="text" name="email" value="<?php echo $row['email']; ?>" />
				</tt></td>
					</tr>
					
					<tr>
				<td><tt>Mother Name</tt></td>
				<td><tt>:</tt></td>
				<td><tt>
			    <input type="text" name="mothername" value="<?php echo $row['mothername']; ?>" />
				</tt></td>
					</tr>
                    
                    <tr>
                 <td><tt>Password</tt></td>
				<td><tt>:</tt></td>
				<td><tt>
			    <input type="text" name="password" value="<?php echo $row['password']; ?>" />
				</tt></td>
					</tr>
                 
                    
					<tr>
						<td><tt></tt></td>
						<td><tt></tt></td>
					  <td><p><tt>
				      <input type="submit" name="btUpdate" value="Update" />
					  </tt></p></td>
			  </tr>
					<tr>
						<td><tt></tt></td>
						<td><tt></tt></td>
					  <td><p><tt>
				      <input type="submit" name="btUpdate_Another" value="Update Another" />
					  </tt></p></td>
			  </tr>
					<tr>
						<td><tt></tt></td>
						<td><tt></tt></td>
					  <td><p><tt>
				      <input type="submit" name="btIndex" value="Home Page" />
				      </tt></p>
					    <a href="editreserve.php"><tt>Back</tt></a></td>
			  </tr>
					
		  </table>
				<p></p>
</form>
<p>&nbsp;</p>
</body>
</html>