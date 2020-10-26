\<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  require 'connection.php';

  $id = $_GET['ID'];
  
  $update = mysqli_query($link,"SELECT * FROM reserve WHERE ID = '$id' ");
  if ($update->num_rows > 0) {
    while ($row = $update -> fetch_assoc()) {
      $id = $row['ID'];
      $var_firstname = $row['firstname'];
      $var_lastname = $row['lastname'];
      $var_mobilenumber= $row['mobile'];
      $var_email = $row['email'];
      $var_guests =$row['guest'];
	  $var_type =$row['type'];
	  $var_date =$row['date'];
	  $var_address =$row['address'];
    }
  }

  if (isset($_POST['ID'])) {
    //$booking_id = $_POST['id'];
    		$var_firstname=$_POST['firstname'];
			$var_lastname=$_POST['lastname'];
			$var_mobilenumber=$_POST['mobile'];
			$var_email=$_POST['email'];
			$var_guests=$_POST['guest'];
			$var_type=$_POST['type'];
			$var_date=$_POST['date'];
			$var_address=$_POST['address'];

    $sqlupdate = "UPDATE reserve SET firstname = '$var_firstname', lastname = '$var_lastname' , mobile = '$var_mobilenumber' , email = '$var_email' , guest = '$var_guests' , type = '$var_type', date = '$var_date', address = '$var_address', WHERE ID = '$id' ";
    if (!mysqli_query($link,$sqlupdate)) {
      echo "<script>alert('Update failed!')</script> ";
      header("refresh:0;url = tryedit.php");
    }else{
      echo "<script>alert ('Update Successfully!')</script> ";
      header("refresh:0;url = tryedit.php");
    }
  }
?>
<body>
  <center><h1><FONT COLOR = "#333">HsnaZmni Makeup Service</FONT></h1></center>
  <form class="form-horizontal" method="post" action="">
  <fieldset>
    <p align="center"><FONT COLOR = "#DAA520"><b>Update Your Booking</b></FONT></p>
    <div class="form-group" align="center">
  <table width="500" border="0">
    <tr>
      <td width="280">First Name</td>
      <td width="10">:</td>
      <td width="650">
        <input type="text" name="firstname" required value=" <?php echo $var_firstname; ?>"/>
      </td>
    </tr>
    
    <tr>
      <td>Last Name</td>
      <td>:</td>
      <td>
        <input type="text" name="lastname" required value=" <?php echo $var_lastname; ?>"/>
      </td>
    </tr>
    
    <tr>
      <td>Mobile Number</td>
      <td>:</td>
      <td>
      <input type="text" name="mobile" required value=" <?php echo $var_mobilenumber; ?>"/>
       
      </td>
    </tr>
    
    <tr>
      <td>Email</td>
      <td>:</td>
      <td>
      <input type="text" name="email" required value=" <?php echo $var_email; ?>"/>
      </td>
    </tr>
    
    <tr>
      <td>Number Of Guests</td>
      <td>:</td>
      <td>
        <input type="text" name="guest" required value=" <?php echo $var_guests; ?>"/>
      </td>
    </tr>
    
    <tr>
      <td>Type Of Treatment</td>
      <td>:</td>
      <td>
       <input type="text" name="type" required value=" <?php echo $var_type; ?>"/>
      </td>
    </tr>

    
    <tr>
      <td>Date</td>
      <td>:</td>
      <td>
        <input type = "date" name = "date" required value="<?php echo $var_date; ?>"/>
      </td>
    </tr>

      <tr>
      <td>Address</td>
      <td>:</td>
      <td>
       <input type="text" name="address" required value=" <?php echo $var_address; ?>"/>
      </td>
    </tr>

  <tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="update" id="update" value="Update Booking">
      
  </tr></td>
  </table>
</div>
</div></div>
</fieldset>
</form>
</body>
</html>
</body>
</html>