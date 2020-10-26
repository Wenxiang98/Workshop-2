<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body{
	background-image: url("bg7.jpg");
	background-size:cover;
}

	h1 {
		font-size: 44p;
		color: darkred;
	}
	input{
		 border-radius: 10px;
		 width: 250px;
		 height: 20px;
		 text-indent: 5px;
	}
	input:focus{
		outline: none;
	}
	input:focus{
		outline: none;
	}
	input:focus{
		outline: none;
	}
	fieldset{
		width: 50%;
		height: 600%;
		background-color: khaki;
		border-radius: 5px;
		outline: none;
	}
	</style>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reservation</title>
</head>

<body>

<H3 align="center"><FONT COLOR = "#333333"><tt><strong>Fill The Reservation Form</strong> </tt></FONT></H3>
<form class="form-horizontal" method="post" action="reserveSoS.php">

<div align="center">
  <table width="550" border="0">
    <tr>
      <td width="72"><tt>First Name</tt></td>
      <td width="8"><tt>:</tt></td>
      <td width="597">
        <tt>
        <input type="text" name="firstname" required/>
        </tt></td>
      </tr>
    
    <tr>
      <td><tt>Last Name</tt></td>
      <td><tt>:</tt></td>
      <td><tt>
        <input type="text" name="lastname" required/>
      </tt></td>
      </tr>
 
    <tr>
      <td><tt>Mobile Number</tt></td>
      <td><tt>:</tt></td>
      <td><tt>
      <input type="number" placeholder="0127810956" class="form-control input-md" name="mobile" required="required"/>
      </tt></td>
      </tr>
    
    <tr>
      <td><tt>Email</tt></td>
      <td><tt>:</tt></td>
      <td><tt>
       <input type="email" placeholder="" class="form-control input-md" name="email" required="required"/>
      </tt></td>
      </tr>
    
    <tr>    
      <td><tt>Number Of Guests</tt></td>
      <td><tt>:</tt></td>
      <td><tt>
        <select name="guest" required>
          <option>
          <option>1
          <option>2
         </option></option></option></select>
      </tt></td>
      </tr>
    
    <tr> 
      <td><tt>Type Of Treatment</tt></td>
      <td><tt>:</tt></td>
      <td><tt>
        <select name="type" required>
          <option></option>
          <option>The Cofee Spa</option>
          <option>Traditional Herba</option>
          <option>The Fruit Spa</option>
          <option>Balinese Aromatic Spa</option>
        </select>
      </tt></td>
      </tr>	    
    <tr>
      <td><tt>Date</tt></td>
      <td><tt>:</tt></td>
      <td><p><tt>
        <input type = "date" name = "date" required/>
        </tt></p>
        <p><tt>Please check the available date <a href="reservedate.php">Here</a> 
        </tt></p></td>
      </tr>
    
    <tr> 
      <td><tt>Address</tt></td>
      <td><tt>:</tt></td>
      <td><tt>
        <input name="address" type="text" required="required" size="50" oninvalid="setCustomValidity('Please Enter Address')" oninput="setCustomValidity('')" />
      </tt></td>
    </tr>
    
    </table>
  <div style="margin-top: 40px">
  <div align="center">
  <input type="submit" name="lgn" class="btn btn-success " value="Submit">
  <input type = "reset" name = "reset" value = "Reset" />
</div></div>
</div></form>
<div align="center"><tt><a href="navbaruser.php">Back</a></tt></div>
</body>
</html>