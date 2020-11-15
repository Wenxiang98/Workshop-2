<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 10%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 90%;
  border-left: none;
  height: 300px;
}

.header {
  padding: 8px;
  text-align: center;
  background: #1abc9c;
  color: black;
  font-size: 20px;
}
</style>
</head>
<body>


<div class="header">
  <h1>Welcome To MegaDream Mall</h1>
  <p>Car Plate Recognition</p>
</div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'History')">History</button>
</div>

<div id="Profile" class="tabcontent">
  <style>
body{
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
<title>Profile</title>
</head>

<body>

<H3 align="center"><FONT COLOR = "#333333"><strong>Profile Staff</strong> </FONT></H3>
<form class="form-horizontal" method="post" action="">

<div align="center">
  <table width="550" border="0">
    <tr>
      <td width="72"> Name</td>
      <td width="8"><tt>:</tt></td>
      <td width="597">
        <tt>
        </tt></td>
      </tr>
    
    <tr>
      <td>Staff ID</td>
      <td><tt>:</tt></td>
      <td><tt>
      </tt></td>
      </tr>
 
    <tr>
      <td>Phone Number</td>
      <td><tt>:</tt></td>
      <td></td>
      </tr>
    
    <tr>
      <td>IC</td>
      <td><tt>:</tt></td>
      <td><tt>
      </tt></td>
      </tr>
    
    </table>
  <div style="margin-top: 40px">
  <div align="center">
</div></div>
</div></form>
</div>

<div id="History" class="tabcontent">
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for carplate..">
  <p> All Recognition History </p>
<table id="myTable">
  <tr class="header">
    <th style="width:15%;">Car Plate</th>
    <th style="width:15%;">Date</th>
    <th style="width:15%;">Time In</th>
    <th style="width:15%;">Time Out</th>
    <th style="width:18%;">Duration</th>
    <th style="width:15%;">Fee</th>
  </tr>
  <tr>
    <td>JTS 1220</td>
    <td>22/09/2020</td>
    <td>12pm</td>
    <td>3pm</td>
    <td>3 hrs</td>
    <td>RM 3</td>
  </tr>
  <tr>
    <td>PNG 3278</td>
    <td>12/10/2020</td>
    <td>3.30pm</td>
    <td>5pm</td>
    <td>1 hrs 30 min</td>
    <td>RM 2</td>
 
</table>

<style>
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
ADVERTISEMENT


Step 3) Add JavaScript:
Example
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</style>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
