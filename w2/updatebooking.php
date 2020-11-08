<!DOCTYPE html>
<html>
<head>
  <title>MUA-BS: Update Booking</title>
</head>
<?php
  require 'dbconnect.php';
  include 'include/navbaruser.php';

  $id = $_GET['update'];
  
  $update = mysqli_query($link,"SELECT * FROM booking WHERE bID = '$id' ");
  if ($update->num_rows > 0) {
    while ($row = $update -> fetch_assoc()) {
      $booking_id = $row['bID'];
      $fullname = $row['fullname'];
      $phone = $row['phone'];
      $date = $row['date'];
      $time = $row['time'];
      $payment =$row['payment'];
    }
  }

  if (isset($_POST['update'])) {
    //$booking_id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    //$payment =$_POST['payment'];

    $sqlupdate = "UPDATE booking SET fullname = '$fullname', phone = '$phone' , date = '$date' , time = '$time' , payment = '$payment' WHERE bID = '$id' ";
    if (!mysqli_query($link,$sqlupdate)) {
      echo "<script>alert('Update failed!')</script> ";
      header("refresh:0;url = mybooking.php");
    }else{
      echo "<script>alert ('Update Successfully!')</script> ";
      header("refresh:0;url = mybooking.php");
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
      <td width="280">Full Name</td>
      <td width="10">:</td>
      <td width="650">
        <input type="text" name="fullname" required="" value=" <?php echo $fullname; ?>"/>
      </td>
    </tr>
    
    <tr>
      <td>Phone Number</td>
      <td>:</td>
      <td>
        <input type="Number" name="phone" 
        required onInvalid="setCustomValidity('Please Enter Your Phone Number')"onInput="setCustomValidity('')" value="<?php echo $phone; ?>"/>
      </td>
    </tr>
    
    <tr>
      <td>Booking Date</td>
      <td>:</td>
      <td>
        <input type = "date" name = "date" required="" value="<?php echo $date; ?>" />
      </td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td>
        <label class="col-md-4 control-label" >Please Check Booked Date <a href="#" onClick="MyWindow=window.open('bookingdate.php','MyWindow',width =700,height=300); return false;"><u><i>Here</i><u></a>
      </td>
    </tr>
    
    <tr>
      <td>Time to be ready</td>
      <td>:</td>
      <td>
        <input type = "time" name = "time" required="" value="<?php echo $time; ?>"/>
      </td>
    </tr>

     <tr>
      <td>Deposit Pay</td>
      <td>:</td>
      <td>
        RM <?php echo $payment; ?>
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