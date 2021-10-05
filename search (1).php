<?php
  session_start();
        
?>
<html>
<title>Health/Meal Planner Website App</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body style="background-color:aqua;zoom:125%;overflow-x:hidden;color:black">
     <video
        src="foodtable6.mp4"
        muted
        loop
        autoplay
      style="position: fixed;
      left:-10;
      right:-10;
  top: 0;
  bottom: 0;
  min-width: 20vw;
  max-width:90vw;
  max-height: 100vh;
  opacity: 0.99;
  z-index: -1;"></video>
<nav style="color:white"class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white" href="search.php">Health/Meal Planner Website App</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a style="margin-right:10px;color:white;" href="shoppinglist.php">Shopping List</a></li>
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
<?php
 if(isset($_SESSION['username'])){
  echo '<h2> Hello, This Health App Account is for this User: '.$_SESSION['username'];
  }
  ?>
<h1>Enter your Diet Nutrition Preferences for the Best Foods for you!</h1>
<div style="display:flex;flex-direction:column;">
 <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food2.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="cake.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
    </div>
  </div>
</div>
<div style="background-color:grey;margin:auto;width:600px;height:1000px;">
<div style="flex:1;font-size:20px;margin:auto;">

<form class="form-horizontal" action="result.php" method="POST" style="display:flex; flex-direction: column;align-items: center;">
<div class="form-group" style="margin-top:20px;">
    <label class="control-label col-sm-2" for="fats">Search max fats amount:</label>
    <div class="col-sm-10">
	<input  style="margin-top:20px;"type="number" class="form-control" step="any" name="fats" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="saturatedfats">Search max saturated fats amount:</label>
    <div class="col-sm-10">
	<input style="margin-top:20px;" type="number" class="form-control" step="any" name="saturatedfats" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="carbs">Search max carbs amount</label>
    <div class="col-sm-10">
	<input style="margin-top:20px;" type="number" class="form-control" step="any" name="carbs" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sugar">Search max sugar amount</label>
    <div class="col-sm-10">
	<input style="margin-top:20px;" type="number" class="form-control" step="any" name="sugar" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="salt">Search max salt amount</label>
    <div class="col-sm-10">
	<input style="margin-top:20px;" type="number" class="form-control" step="any" name="salt" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="sodium">Search max sodium amount</label>
    <div class="col-sm-10">
	<input style="margin-top:20px;" type="number" class="form-control" step="any" name="sodium" style="width:300px;">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="protein">Search max proteins amount</label>
    <div class="col-sm-10">
	<input style="margin-top:20px;" type="number" class="form-control" step="any" name="protein" style="width:300px;">
    </div>
    <input style="margin-top:20px;" style="margin-bottom:20px;"type="submit" name="submit" style="width:200px;height:40px;font-size:20px;">
	<button style="font-size:20px;width:200px;height:60px;margin-bottom:20px;"><a href="storageclear.php">Sign Out of Your Account</a></button>
  </div>
	

</form>
</div>
</div>
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="burger.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="pizza.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="pasta.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
    </div>
  </div>
</div>

</body>

</html>