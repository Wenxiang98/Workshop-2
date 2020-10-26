<!doctype html>
<html>
	<head>
    <meta charset="utf-8" />
    <title>Welcome Secret Of Spa</title>
    <link rel="stylesheet" href="style3.css">
    </head>

<body>
	<div class="box">
	<h2>Register Your Account Here</h2>
    
		<form class="form-horizontal" method="post" action="registrationSoS.php">
<form>
	<div class="inputBox">
    <input type="text" name="username" required="required"/>
               <label>Username</label>
                </div>
                
	<div class="inputBox">
    <input type="email" name="email" required="required"  placeholder="" class="form-control input-md" name="email" />
               <label>Email</label>
			   </div>
               
	<div class="inputBox">
			   <input type="text" name="mothername" required="required"/>
               <label>Mother's Name</label>
			  </div>
              
	<div class="inputBox">
			   <input type="password" placeholder="" class="form-control input-md"  name="password" required="required"/>
               <label>Password</label>
			</div>
            <p>
            <center>
				<input type="submit" name="lgn" class="btn btn-success " value="Register!">
		    </center>  </p>
			
		</form>
		<font color="grey">Already have an acount?</font> <a href="webSoS.php">Login here </a>
	
    </div>
</body>
</html>