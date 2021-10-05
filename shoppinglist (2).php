<html>
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Shopping List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="storage.js"></script>
</head>
  
<body onload="doshowAll()" style="background-color:GreenYellow;overflow-x:hidden;color:yellow;zoom:135%;">
    <video
        src="foodtable.mp4"
        muted
        loop
        autoplay
      style="position: fixed;
  top: 0;
  bottom: 0;
  min-width: 100vw;
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
    <div class="container mt-5">
        <h1 style="font-size:40px;background-color:black">Save the Food Ingredients for your healthy meals</h1>
        <br>
        <br>
    <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food3.jpg" alt="Lights" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Foods</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food4.jpg" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Stay Healthy</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food5.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Foods</p>
        </div>
    </div>
  </div>
</div>

    <form action="savefood.php" method="POST" name="ShoppingList" class="form-inline" style="font-size:30px;display:flex;align-items:center;width:700px;height:600px;>
   
        <div style="margin-left:20px;display:flex;background-color:black;color:white;opacity:0.99;width:780px;height:600px;margin:auto;">
         <div class="form-group" style="background-color:black;color:white;opacity:0.99;width:780px;height:600px;">
         <div class="form-group" >
        <label >Food Ingredient: <input class="form-control" type="text" name="name"></label>
        </div>
        <label>Quantity: <input class="form-control" type="text" name="data"></label>
        <input type="submit" style="color:black;" value="submit" name="submit" class="login-button">
        <br>
        <input type="button" style="color:black;" value="Save" class="login-button"  onclick="SaveItem()">
        <br>
        <input type="button" style="color:black;" value="Update" class="login-button" onclick="ModifyItem()">
        <br>
        <input type="button" style="color:black;" value="Delete" class="login-button" onclick="RemoveItem()">
        <br>
        </div>
        
        <div id="items_table" style="margin-left:20px;display:flex;background-color:black;color:white;opacity:0.99;width:780px;height:600px;align-items:flex-start;">
        <h2 style="font-size:30px;padding-left:20px;height:30px;">Shopping List Reminders Shown Below</h2>
        <table id="list" style="font-size:30px;"></table>
        <br>
        <br>
        <label><input type="button" style="color:black;margin-left:10px;width:250px;height:80px;font-size:20px;"value="Delete All Food Notes" onclick="ClearAll()"></label>
    </div>
        <br>
        </div>
        
    
</form>
<h2><b>Use this form to Email yourself Reminders of your Recommended Foods!</b></h2>
<form action="mail2.php" method="POST" name="form" class="form-inline" style="font-size:40px;">
    <div class="form-group" style="display:flex;flex-direction:row;">
			<label  for="name">Enter Your Name: </label><br>
			<input style="color:black;font-size:30px;margin-left:20px;margin-top:10px;width:600px;height:40px;" type="text" name="name" class="form-control" required><br>
			</div>
			<br>
			<div class="form-group" style="display:flex;flex-direction:row;">
			<label for="email">Enter Your Email: </label><br>
			<input style="color:black;font-size:30px;margin-left:20px;margin-top:10px;width:600px;height:40px;" type="email" name="email" class="form-control" required><br>
			</div>
			<br>
			<div class="form-group" style="display:flex;flex-direction:row;">
			<label style="font-size:40px;"  for="message">Enter Your Recommended Foods Reminders: </label><br>
			<textarea style="color:black;font-size:30px;margin-right:60px;" type="text" name="message" class="form-control" cols="65" required></textarea><br>
				</div>
				<br>
			<input type="submit" name="submit" value="Submit" style="color:black;" class="btn btn-default">
		</form>
    </div>
    
    <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food6.jpg" alt="Lights" style="width:100%;height:300px;">
        <div class="caption">
          <p>Stay Healthy</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food7.jpg" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Foods</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="food8.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Stay Healthy</p>
        </div>
    </div>
  </div>
</div>
</body>
  
</html>