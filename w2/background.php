<div class="header">
  <h1>Welcome To MegaDream Mall</h1>
  <p>Car Plate Recognition</p>
</div>


  <form action="/action_page.php" class="container">
    <h1>Login</h1>

    <label for="email"><b>IC Number</b></label>
    <input type="text" placeholder="Enter IC" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
  </form>
  <div>
  
  <h2>CAR RECOGNITION</h2>
	<div class="div1">
	<p>Technology that uses optical character recognition on images to read car plates to keep vehicle transaction of entrance.</p>
	</div>

	<h2>MEGA DREAM MALL</h2>
	<div class="div2">
	<p>Used to store the images captured by the cameras as well as the text from the license plate, with some configurable to store a photograph of the driver. </p>
	</div>


<style>
body {
  background-image: url("bgdesert.jpg");
}

body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("bckg.jpg");

  /* Control the height of the image */
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.header {
  padding: 8px;
  text-align: center;
  background: #1abc9c;
  color: black;
  font-size: 20px;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.div1 {
  border: 1px solid black;
  height: 150px;
  width: 800px;
  background: url(car.jpg);
  background-repeat: no-repeat;
  background-size: contain;

}

.div2 {
  border: 1px solid black;
  height: 150px;
  width: 800px;
  background: url(car.jpg);
  background-repeat: no-repeat;
  background-size: contain;
 
}



</style>