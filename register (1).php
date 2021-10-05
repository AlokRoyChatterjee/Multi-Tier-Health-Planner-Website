<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="zoom:120%;overflow:hidden;">
    <video
        src="resort.mp4"
        muted
        loop
        autoplay
      style="position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height:100%;
  overflow:hidden;
  object-fit: cover;
  opacity: 0.99;"></video>
<nav style="color:white"class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white" href="#">Health/Meal Planner Website App</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="margin-right:10px;color:white;" href="#">Shopping Cart List</a></li>
      <li><a href="#" style="color:white">Exercises List</a></li>
      <li><a href="#" style="color:white">Weekly Meal Plans</a></li>
      <li><a href="#" style="color:white">Exercise Recommendations</a></li>
      <li><a href="#" style="color:white">Your Saved Exercises</a></li>
      <li><a href="#" style="color:white">Your Saved Shopping List</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li style="color:white;"><a href="register.php" style="color:white"><span class="glyphicon glyphicon-user" style="color:white;"></span> Register</a></li>
      <li style="color:white;"><a href="index.php" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Login</a></li>
    </ul>
  </div>
</nav>
<?php
    // When form submitted, insert values into the database.
$conn = mysqli_connect("localhost", "id17693211_root", "/C0]hL@{PCxFLl-v","id17693211_fitness");

    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $created_at = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password,exercises,shoppinglists)
                     VALUES ('$username', '" . md5($password) . "','','')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div style='width:600px;height:600px;margin:auto;'>";
            echo "<div class='form' style='margin-top:100px;background-color:black;display:flex;flex-direction:column;align-items:center;color:white;font-size:30px;opacity:.99;width=600px;height=600px'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
                  echo "</div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form-group" action="" method="post" style="width:700px;height:600px;margin:auto;">
    
<div style="background-color:black;color:white;opacity:0.99;width=700px;height=600px;">
    <h1 style="margin-bottom:30px;font-size:60px;style=font-size:50px;margin-left:10px;">Registration</h1>
        <div class="form-group">
        <label style="font-size:20px;margin-left:20px;" for="username">Enter a new account username:</label>
        <input type="text" style="color:black;padding:10px;width:500px;height:60px;margin-right:10px;width:300px;height:40px;"class="login-input" name="username" placeholder="Username" style="margin-left:10px;"required />
        </div>
        <br>
        <div class="form-group">
        <label style="font-size:20px;margin-left:20px;" for="password">Enter a new account password:</label>
        <input style="color:black;width:300px;height:40px;"type="password" class="login-input" name="password" placeholder="Password">
        </div>
        <input type="submit" style="margin-left:20px;color:black;font-size:35px;margin-bottom:10px;"name="submit" value="Sign Up for New User Account" class="login-button">
        <button style="margin-left:20px;color:black;font-size:35px;margin-bottom:10px;"<a href="index.php">Or Login</a></button>
        </div>
    </form>
<?php
    }
?>
</body>
</html>