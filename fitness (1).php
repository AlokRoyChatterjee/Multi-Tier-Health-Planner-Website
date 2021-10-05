
<html>
<title>Health/Meal Planner Website App</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-color:Pink;zoom:130%;color:black;overflow-x:hidden;zoom:112%;">
     <video
        src="resort3.mp4"
        muted
        loop
        autoplay
      style="position: fixed;

  top: 0;
  bottom: 0;
  min-width:20vw;
  max-width: 110vw;
  min-height:50vh;
  max-height: 110vh;
  opacity: 0.99;
  z-index: -1;"></video>
<nav style="color:white"class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white" href="search.php">Health/Meal Planner Website App</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="margin-right:10px;color:white;" href="shoppinglist.php">Shopping Cart List</a></li>
      <li><a href="exerciselist.php" style="color:white">Exercises List</a></li>
      <li><a href="mealplans.php" style="color:white">Weekly Meal Plans</a></li>
      <li><a href="fitness.php" style="color:white">Exercise Recommendations</a></li>
      <li><a href="savedexercises.php" style="color:white">Your Saved Exercises</a></li>
      <li><a href="savemeals.php" style="color:white">Your Saved Shopping List</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li style="color:white;"><a href="register.php" style="color:white"><span class="glyphicon glyphicon-user" style="color:white;"></span> Register</a></li>
      <li style="color:white;"><a href="storageclear.php" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<h1 style="margin-left:60px;">Enter Calories to find the Best Exercises!</h1>
<div class="container mt-5" >
      <h2 style="font-size:40px;">Save Your Favorite Exercises in this Exercises List</h2>
       <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking6.jpg" alt="Lights" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Exercises</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking7.jpg" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Stay Healthy</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking8.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Exercises</p>
        </div>
    </div>
  </div>
</div>
<form action="exercises.php" method="POST" style="margin-left:60px;">
<div class="form-group">
    <label  for="calories" style="margin-top:20px;font-size:20px;">What maximum number of calories do you want to burn? (Answer Below with values between 250 and 650):</label>
	<input type="number" class="form-control" step="any" name="calories" style="width:600px;margin-left:60px;">
    <input type="submit" name="submit" style="margin-top:15px;margin-left:80px;width=100px;height:60px;font-size:40px;" >
  </div>
	
</form>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking9.jpg" alt="Lights" style="width:100%;height:300px;">
        <div class="caption">
          <p>Stay Healthy</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="running6.jpg" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Exercises</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking62.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Stay Healthy</p>
        </div>
    </div>
  </div>
</div>
</body>

</html>