<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Responsive Login Form</title>
	<link rel="stylesheet" href="Login-page.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <h1>Hostel Management System</h1>
    
<form action="includes/login.inc.php" method="post">
<div class="container">

  <div class="sub-container">

    <div class="login-form">
      <div class="title">
          Welcome
      </div>
      <div class="input-fields">
        <input type="text" class="input" placeholder="Username">
      </div>
      <div class="input-fields">
        <input type="password" class="input" placeholder="Password">
      </div>
      <div class="btn">
    
        <a href="student_page.php">Log In</a>
      </div>
      <div class="forgot">
        <a href="#">Forgot Password?</a>
      </div>
      
        <a href="signup.php" >Signup</a>
        
     
    </div>
    <div class="banner-img">
        <picture>
          <source media="(max-width: 400px)" srcset="marcus-loke-WQJvWU_HZFo-unsplash.jpg">
          <img src="asset/marcus-loke-WQJvWU_HZFo-unsplash.jpg" 
          alt="Photo by Marcus Loke on Unsplash">
        </picture>
      </div>
  </div>
</div>
</fom>	
	
</body>
</html>