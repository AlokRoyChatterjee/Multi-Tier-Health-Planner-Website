<?php
session_start();
?>

<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
	<body style="background-color:green;color:white;font-size:30px;text-align:center;display:flex;flex-direction:column;zoom:80%;">
	    <video
        src="foodtable2new2.mp4"
        muted
        loop
        autoplay
      style="position: fixed;
      left:0;
      right:0;
  top: 0;
  bottom: 0;
  min-width: 150vw;
  min-height: 100vh;
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
<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="cake.jpg" alt="Lights" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Foods</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food.jpg" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Stay Healthy</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food2.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Exercises</p>
        </div>
    </div>
  </div>
</div>
</body>
<?php
    // When form submitted, insert values into the database.
$conn = mysqli_connect("localhost", "id17693211_root", "/C0]hL@{PCxFLl-v","id17693211_fitness");
    
        
        if(isset($_SESSION['username'])){
        $user_name = $_SESSION['username'];
        }
       
    $sele = "SELECT * FROM users WHERE username='$user_name'"; 
	$res = mysqli_query($conn,$sele);
	
	$list="Food Ingredients and Food Quantities for"." ".$_SESSION['username'];
	echo $list;
	if($row = mysqli_num_rows($res) > 0){
		$row = mysqli_fetch_assoc($res);
		$string=$row['shoppinglists'];
		$string2=explode(" ",$string);
		$len=count($string2);
		$i=0;
		while($i<$len){
		    echo "<tr><td>";
		    echo $string2[$i];
		    echo "</td></tr>";
		    echo '<br>';
            $i=$i+1;
        
	
        } 
    

	}


?>
<div class="row">
  <div class="column">
    <img src="food3.jpg">
    <img src="food4.jpg">
    <img src="food5.jpg">
  </div>
  <div class="column">
    <img src="food6.jpg">
    <img src="food7.jpg">
    <img src="food8.jpg">
    <img src="food9.jpg"
  </div>
  <div class="column">
    <img src="food10.jpg">
    <img src="cake.jpg">
    <img src="cake2.jpg">
    <img src="pizza.jpg">
    <img src="pasta.jpg">
    <img src="burger.jpg">

  </div>
</div>
</html>
