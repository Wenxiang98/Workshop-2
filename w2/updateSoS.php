 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}
</style>
</head>

<body>

<form action="" method="post">

<?php
	include ("connection.php");
	$id = $_GET['id1'];
	
	$query = "SELECT * FROM reserve where ID ='$id'";
	$result = mysqli_query ($link, $query) or die ("Select Error". mysqli_error($link));
	$row = mysqli_fetch_array($result);
	
		if (isset($_POST['btUpdate'])) {
			$var_firstname=$_POST['firstname'];
			$var_lastname=$_POST['lastname'];
			$var_mobilenumber=$_POST['mobile'];
			$var_email=$_POST['email'];
			$var_guests=$_POST['guest'];
			$var_type=$_POST['type'];
			$var_date=$_POST['date'];
			$var_address=$_POST['address'];
			
			$sql = "UPDATE reserve SET firstname='$var_firstname',lastname='$var_lastname',mobilenumber='$var_mobilenumber',email='$var_email',guests='$var_guests',type='$var_type',date='$var_date',address='$var_address' WHERE ID = $id";
			$result = mysqli_query ($link, $sql);
			
			if ($result == TRUE) {
					header ("location:showupdateSoS.php?id='$id'");}
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
				<td width="115"><tt>First Name</tt></td>
				<td width="11"><tt>:</tt></td>
				<td width="295">
					<tt>
					<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" />
					</tt></td>
					</tr>
					
					<tr>
				<td><tt>Last Name</tt></td>
				<td><tt>:</tt></td>
				<td><tt>
			    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" />
				</tt></td>
					</tr>
					
					<tr>
				<td><tt>Mobile Number</tt></td>
				<td><tt>:</tt></td>
				<td><tt>
			    <input type="text" name="mobile" value="<?php echo $row['mobilenumber']; ?>" />
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
      			<td><tt>Number Of Guests</tt></td>
      			<td><tt>:</tt></td>
      			<td><tt>
       			 <select name="guest" name="guest" value="<?php echo $row['guests']; ?>" />>
              <option>
              <option>1
              <option>2
              </option></option></option></select>
              
				</tt></td>
					</tr>
    
			    
                     
      <td><tt>Type Of Treatment</tt></td>
      <td><tt>:</tt></td>
      <td><tt>
        <select name="type" name="type" value="<?php echo $row['type']; ?>" />>
          <option></option>
          <option>The Cofee Spa</option>
          <option>Traditional Herba</option>
          <option>The Fruit Spa</option>
          <option>Balinese Aromatic Spa</option>
        </select>    
				</tt></td>
					</tr>	
                    
                    <td><tt>Date</tt></td>
				<td><tt>:</tt></td>
				<td><tt>
			    <input type="date" name="date" value="<?php echo $row['date']; ?>" />
				</tt></td>
					</tr>
                    
                    	<td><tt>Address</tt></td>
				<td><tt>:</tt></td>
				<td><tt>
			    <input type="text" name="address" value="<?php echo $row['address']; ?>" />
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
      </center>
</body>
</html>