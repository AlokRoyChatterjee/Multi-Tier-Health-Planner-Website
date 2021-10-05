
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
	<body style="background-color:green;color:white;font-size:30px;text-align:center;display:flex;flex-direction:column;zoom:100%;overflow-x:hidden;">
	    <video
        src="resort6.mp4"
        muted
        loop
        autoplay
      style="position: fixed;
      left:0;
      display:flex;
      margin:auto;
      right:0;
  top: 0;
  bottom: 0;
  min-width: 1000px;
  max-height:1000px;
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
</body>
<html>
<?php
$conn = mysqli_connect("localhost", "id17693211_root", "/C0]hL@{PCxFLl-v","id17693211_fitness");
if($_REQUEST['submit']){
$calories = $_POST['calories'];
if(empty($calories)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM  exercises WHERE calories <= '$calories'";
	$result = mysqli_query($conn,$sele);
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		    	echo '<html>';
		echo '<head>';
		echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'>";
  echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js'></script>";
  echo '<head>';
  echo "<div class='card' style='margin-left:300px;width:800px;'>";
  $s=$row['image'];
  echo '<img src="'.$s.'" class="card-img-top" alt="Exercise Image" ">';
    echo "<div class='card-body' style='color:black'>";
		echo "<h4 class='card-title'>Id						: ".$row['id'];
		echo '</h4>';
		echo "<br><p class='card-text'>Exercise Name						:".$row['name'];
		echo '<br> Calories Burned						: '.$row['calories'];
		echo '</p>';
		echo '</div>';
		echo '</div>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>