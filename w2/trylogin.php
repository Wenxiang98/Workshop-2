<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php session_start();
if(isset($_POST['Submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	if($username == "")
	$error = "error : Please enter your username.";
	
	elseif($password == "")
	$error = "error : Please enter your password.";
	
	else
	{
		include('connection.php');
		$row = mysqli_query ($link, "SELECT * FROM userr WHERE username = '$username' and password = '$password'")or die ("Couldn't connect to database". mysqli_error($link));
		
		if (mysqli_num_rows($row) > 0){
			while ($res = mysqli_fetch_assoc($row)){
				$_SESSION['username'] = $res['username'];
				$_SESSION['user_type'] = $res['user_type'];
			}
			if ($_SESSION['user_type'] == 'admin')
			header("location : adminSoS.php");
			
			if ($_SESSION['user_type'] == 'user')
			header("location : userSoS.php");
		}
		else{
			$error = 'error : You are not registered to this websitee';}}}?>
            
            
<?php if (isset($error)) { echo "<font color ='#FF0000'><center><b>". $error. "</b></center></font>";}?>
<form method = "post" action = "">
<table border="0" align="center">
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="text" name="password" /></td>
</tr>
<tr>
<td><input type="submit" name="Submit" value="Submit" /></td>
</tr>
</table>
</form>
</body>
</html>