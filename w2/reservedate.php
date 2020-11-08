<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking  Date</title>
</head>

<body>
<?php 
  require 'connection.php';
 
?>
<body>
    <div>
      <div class="container" align="center">
        <h1>Secret Of Spa</h1><br>
        <fieldset>
        <h3><p align="center"><FONT COLOR = "#DAA520">Booking Date</FONT></p></h3>
        <table id="service" class="table table-hover" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Reservation Name</th>
                <th>Reservation Date</th>
                <th>Status</th>
               
                </tr>
                </thead>
        <tbody>

<?php
                
        $sql = "SELECT ID, firstname, date FROM `reserve` ";
        $result1 = $link->query($sql);
              if($result1->num_rows > 0){
              while($row1 = $result1->fetch_assoc()){

				$id = $row1['ID'];
                $firstname = $row1['firstname'];
                $date = $row1['date'];
            
               
?>
                
            <tr>

            <td style="text-align: center;" class="text-red"><?php echo $id; ?></td>
            <td style="text-align: center;" class="text-red"><?php echo $firstname; ?></td>
            <td style="text-align: center;" class="text-red"><?php echo $date; ?></td>
            <td style="text-align: center;" class="text-red">Booked</td>

          
            </tr>
              <?php
              }
            }
            else
              {
        
            ?>
            
           <?php

            }
            ?>
            
        </tbody>
        <tfoot>
            
        </tfoot>
      </table>
      <p>Note: Booking Date Within 1 Months Only</p>
      </div>
    </div>
    

</body></fieldset>

<center><a href="reservation.php">Back</a></center>

</html>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
         $('#vehicle').DataTable();
} );
$(document).ready(function() {
    $('#example').DataTable();
         $('#service').DataTable();
} );
    


</script>

</body>
</html>