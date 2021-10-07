<?php
    session_start();
    ob_start();
    ?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="zoom:100%;overflow:hidden;">
    <video
        src="https://designsupply-web.com/samplecontent/vender/codepen/20181014.mp4"
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
<nav style="color:white;background-color:black;display:inline-block;white-space:wrap;" class="navbar navbar-inverse">
  <div class="container-fluid">
      <div style="display:flex;
  justify-content:space-between;">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white" href="#">Health/Meal Planner Website App</a>
    </div>
    <ul class="nav navbar-nav" style="margin-left:5px;font-size:20px;">
      <li><a style="margin-right:10px;color:white;" href="#">Shopping List</a></li>
      <li><a href="#" style="color:white">Exercises List</a></li>
      <li><a href="#" style="color:white">Weekly Meal Plans</a></li>
      <li><a href="#" style="color:white">Exercise Recommendations</a></li>
      <li><a href="#" style="color:white">Health Recommendations</a></li>
      <li><a href="#" style="color:white">Your Saved Exercises</a></li>
      <li><a href="#" style="color:white">Your Saved Shopping List</a></li>
      <li><a href="#" style="color:white">Map Search</a></li>
      <li><a href="#" style="color:white">Healthy Foods Twitter</a></li>
      <li><a href="#" style="color:white">Healthy Foods Facebook</a></li>
      <li><a href="#" style="color:white">Your Doctor's Appointments</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right" style="justify-content:space-between;margin-left:20px;font-size:20px;">
      <li style="color:white;"><a href="register.php" style="color:white"><span class="glyphicon glyphicon-user" style="color:white;"></span> Register</a></li>
      <li style="color:white;"><a href="index.php" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Login</a></li>
    </ul>
    </div>
  </div>
</nav>

</body>
</html>
    <?php
$con = mysqli_connect("localhost", "id17693211_root", "/C0]hL@{PCxFLl-v","id17693211_fitness");
    
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            $url='search.php';
            // Redirect to user dashboard page
            header('Location: '.$url);
        } else {
            echo "<div style='width:600px;height:600px;margin:auto;'>";
            echo "<div style='margin-top:100px;background-color:black;display:flex;flex-direction:column;align-items:center;color:white;font-size:30px;opacity:.99;width=600px;height=600px' >
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
            echo "</div>";
        }
    } else {
?>
    
    <form class="form-group" method="post" name="login" style="margin-top:30px;display:flex;flex-direction:column;align-items:center;font-size:30px;">
        <div style="background-color:black;color:white;opacity:0.99;width=600px;height=600px">
        <h1 style=font-size:50px;margin-left:10px;">Login</h1>
        <div class="form-group">
        <label for="username" style="padding:10px;">Enter Username:</label>
        <input type="text" style="color:black;padding:10px;width:300px;height:50px;margin-right:10px;"; class="login-input" name="username" placeholder="Username"/>
        </div>
        <div class="form-group">
        <label for="password" style="padding:10px;">Enter Password:</label>
        <input type="password" style="color:black;width:300px;height:50px;margin-right:10px;"; class="login-input" name="password" placeholder="Password"/>
        </div>
        <input type="submit" style="color:black;margin-left:10px;margin-bottom:10px;"value="Login" name="submit" class="login-button"/>
        <button><a href="register.php" style="color:black;margin-bottom:10px;" >Or Sign up for New User Account</a></button>
        </div>
  </div>
<?php
    }
    
?>
