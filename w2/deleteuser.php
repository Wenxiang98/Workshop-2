<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include ('connection.php');
$delete_id = $_POST['hid_id'];
$result = mysqli_query ($link, "DELETE FROM userr WHERE ID = '$delete_id'") or die ('Delete Error' .mysqli_error($link));

if ($result)
	header ("location:navbaradmin.php");
	
?>
</body>
</html>