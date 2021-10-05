
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
	<body style="background-color:green;color:white;font-size:30px;text-align:center;display:flex;flex-direction:column;zoom:100%;overflow-x:hidden;">
	     <video
        src="foodtable66.mp4"
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
	    
	<nav style="color:white;"class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white" href="search.php">Health/Meal Planner Website App</a>
    </div>
    <ul class="nav navbar-nav" style="display:flex;flex-direction:row;>
      <li><a style="margin-right:10px;color:white;" href="shoppinglist.php">Shopping Cart List</a></li>
      <li><a href="exerciselist.php" style="color:white">Exercises List</a></li>
      <li><a href="#" style="color:white">Weekly Meal Plans</a></li>
      <li><a href="fitness.php" style="color:white">Exercise Recommendations</a></li>
      <li><a href="savedexercises.php" style="color:white">Your Saved Exercises</a></li>
      <li><a href="savemeals.php" style="color:white">Your Saved Shopping List</a></li>
      <li style="color:white;"><a href="register.php" style="color:white"><span class="glyphicon glyphicon-user" style="color:white;"></span> Register</a></li>
      <li style="color:white;"><a href="storageclear.php" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Logout</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      
    </ul>
  </div>
</nav>
</body>
<html>
<?php
$conn = mysqli_connect("localhost", "id17693211_root12", "1acI8?|QC|t&&X{L","id17693211_food");
if($_REQUEST['submit']){
$fats = $_POST['fats'];
$saturatedfats = $_POST['saturatedfats'];
$carbs = $_POST['carbs'];
$sugar = $_POST['sugar'];
$salt = $_POST['salt'];
$sodium = $_POST['sodium'];
$protein=$_POST['protein'];
if(empty($fats) || empty($saturatedfats)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM  product WHERE fat_amount <= '$fats' 
	AND saturated_fats <= '$saturatedfats' AND carbohydrate <= '$carbs' AND sugar <= '$sugar' AND salt <='$salt' AND sodium <= '$sodium' AND protein <='$protein'";
	$result = mysqli_query($conn,$sele);
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<html>';
		echo '<head>';
		echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'>";
  echo "<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js'></script>";
  echo '<head>';
  echo "<div class='card' style='margin-left:300px;width:800px;margin:auto;'>";
    $s=$row['product_image'];
   		echo '<img src="'.$s.'" class="card-img-top" alt="Food Image" ">';
  echo "<div class='card-body' style='color:black'>";
		echo "<h2 class='card-title'> Id						: ".$row['id'];
		echo '</h2>';
		echo "<br><p class='card-text'>Product Name						: ".$row['product_name'];
		$t6=$row['ingredients'];
		if(empty($t6)|| $t6==''){
		    echo "<br>Meal Ingredients						: ".$row['product_name'];
		}
		else{
		echo "<br>Meal Ingredients						: ".$row['ingredients'];
		}
		$t=$row['fat_amount'];
		if(empty($t) || $t=='0'){
		echo "<br>Fat Amount						: Very Low";
		}
		else{
		echo "<br>Fat Amount						: ".$row['fat_amount'];
		}
		$t1=$row['saturated_fats'];
		if(empty($t1) || $t1=='0'){
		   echo "<br>Saturated Fats						: Very Low";
		}
		else{
		echo "<br>Saturated Fats						: ".$row['saturated_fats'];
		}
		$t2=$row['carbohydrate'];
		if(empty($t2) || $t2=='0'){
		    echo "<br>Carbohydrates						: Very Low";

		}
		else{
		echo "<br>Carbohydrates						: ".$row['carbohydrate'];
		}
		$t3=$row['sugar'];
		if(empty($t3) || $t3=='0'){
		   echo "<br>Sugar Amount						: Very Low";
		}
		else{
		    echo "<br>Sugar Amount						: ".$row['sugar'];
		}
		$t4=$row['salt'];
		if(empty($t4) || $t4=='0'){
		    echo "<br>Salt Amount						: Very Low";
		}
		else{
		   echo "<br>Salt Amount						: ".$row['salt'];
		}
		$t5=$row['sodium'];
		if(empty($t5) || $t5=='0'){
		    echo "<br>Sodium Amount						: Very Low";
		}
		else{
		    echo "<br>Sodium Amount						: ".$row['sodium'];
		}
		$t7=$row['protein'];
		if(empty($t7) || $t7=='0'){
		    echo "<br>Proteins Amount						: Very Low";
		}
		else{
		    echo "<br>Proteins Amount						: ".$row['protein'];
		}
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