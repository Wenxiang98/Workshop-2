<!DOCTYPE html>
<html>
<head>
	<title>SoS Edit Reservation</title>
</head>
<?php session_start();
	require 'connection.php';

	if(isset($_GET['username'])){

    $booking_id = $_GET['username'];
  
    $sql = "DELETE FROM `dbw1`.`reserve` WHERE `reserve`.`username`=$booking_id;";
  
   
   if($link->multi_query($sql) === TRUE){

       echo"<script>alert('Your Booking Updated');</script>";
       echo "<script>window.location.assign('tryedit2.php')</script>";
   }
   else{
       echo"<script>alert('Your Booking Is Cancel !')</script> ";
   }
}

?>

<body>
	<div>
		<div class="container" align="center">
			<h1>HsnaZmni Makeup Service</h1>
			<fieldset>
				<h3><p align="center"><FONT COLOR = "#DAA520">My Booking</FONT></p></h3>

				<table class="active" id="mybooking" style="width: 100%">
						<tr>
							<th>ID</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th>Guests</th>
							<th>Type</th>
                            <th>Date</th>
                            <th>Address</th>

							<?php 

							$sql = "SELECT * FROM  `reserve` WHERE ID = '$_SESSION[mysesi]'" ;
							$result = $link->query($sql);
							if ($result->num_rows > 0) {
								while ($row = $result -> fetch_assoc()) {
									  $booking_id = $row['ID'];
									  $var_firstname = $row['firstname'];
									  $var_lastname = $row['lastname'];
									  $var_mobilenumber= $row['mobile'];
									  $var_email = $row['email'];
									  $var_guests =$row['guest'];
									  $var_type =$row['type'];
									  $var_date =$row['date'];
									  $var_address =$row['address'];
							?>

						</tr>
					
						<tr>
							<td style="text-align: center;"><?php echo $booking_id; ?></td>
							<td style="text-align: center;"><?php echo $var_firstname; ?></td>
							<td style="text-align: center;"><?php echo $var_lastname; ?></td>
							<td style="text-align: center;"><?php echo $var_mobilenumber; ?></td>
							<td style="text-align: center;"><?php echo $var_email; ?></td>
							<td style="text-align: center;"><?php echo $var_guests; ?></td>
                            <td style="text-align: center;"><?php echo $var_type; ?></td>
                            <td style="text-align: center;"><?php echo $var_date; ?></td>
                            <td style="text-align: center;"><?php echo $var_address; ?></td>
							<td style="text-align: center;">
								<a class="btn btn-success" href="tryedit.php?update=<?php echo $booking_id; $update=$booking_id; ?>">Update</a>
								<a href="tryedit.php?bID=<?php echo $booking_id; ?>" class="button button4 button-sm">Cancel Booking</a></td>
						</tr>

						<?php

              				}
              			}
              			else{
            			?>
            			<?php
            				}

            ?>

				</table>
			</fieldset>
			
		</div>
	</div>
</body>
<style>
	table, th {
    border: 2px solid black;
}		
</style>
</html>