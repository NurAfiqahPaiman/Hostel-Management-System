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
        <input type="text" class="input" name="mailuid" placeholder="Username">
      </div>
      <div class="input-fields">
        <input type="text" class="input"name="pwd" placeholder="Password">
      </div>
      <div class="btn">
        Log In
        <button type="submit" name="login-submit">Login</button>
      </div>
      <div class="forgot">
        <a href="#">Forgot Password?</a>
      </div>

        <a href="signup.php" >Signup</a>
        <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</buttom>
        </form>

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
