<html>
  
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Exercises List</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="fitnessstorage.js"></script>
  </head>
    
  <body onload="showAll()"style="background-color:blue;color:black;zoom:115%;">
      <video
        src="resort2.mp4"
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
  <nav style="color:white;height:20px;"class="navbar navbar-inverse">
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
      <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking2.jpg" alt="Lights" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Exercises</p>
        </div>
     
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking3.jpg" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Staying Healthy</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking4.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Exercises</p>
        </div>
    </div>
  </div>
</div>
      <h2>Save Your Favorite Exercises in this Exercises List</h2>
    <form action="save.php" method="POST" name="exerciselist" class="form-inline" style="font-size:30px;">
        <label>Exercise: <input style="color:black;" type="text" name="name"></label>
        <br>

        <label>Resources Needed For Exercise: <input style="color:black;" type="text" name="data"></label>
        <br>
                <input style="color:black;" type="submit" value="submit" name="submit">

        <input style="color:black;" type="button" value="Save"   onclick="Save()">
        <br>
        <input style="color:black;" type="button" value="Update" onclick="Modify()">
        <br>
        <input style="color:black;" type="button" value="Delete" onclick="Remove()">
        <br>
        
    <div id="items_table" style="display:flex;flex-direction:column">
        <h2 style="font-size:30px;">Exercises List</h2>
        <br>
        <table id="list"></table>
        <br>
        <br>
        <br>
        <label><input style="color:black;" type="button" value="Delete All Items" onclick="Clear()"></label>
    </div>
   
    
</form>
<h2>Use this form to Email and Talk with Us About Your Favorite Exercises!</h2>
<form action="https://formsubmit.co/ttt559575@gmail.com" method="POST" method="post" name="form" class="form-inline" style="font-size:40px;">
    <div class="form-group" style="display:flex;flex-direction:row;">
			<label  for="name">Enter Your Name </label><br>
			<input style="color:black;" type="text" name="name" class="form-control" required><br>
			</div>
			<br>
			<div class="form-group" style="display:flex;flex-direction:row;">
			<label for="email">Enter Your Email: </label><br>
			<input style="color:black" type="email" name="email" class="form-control" required><br>
			</div>
			<br>
			<div class="form-group" style="display:flex;flex-direction:row;">
			<label style="font-size:40px;"  for="favorite exercise">What are your Favorite Exercises and Why?: </label><br>
			<input style="color:black;" type="text" name="favorite exercise" class="form-control" size="80" required><br>
				</div>
				<br>
			<input style="color:black; type="submit" name="submit" value="Submit" onclick="thing()" class="btn btn-default">
		</form>
      </div>
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
        <img src="running6.jpg" alt="Nature" style="width:100%;height:300px;">
        <div class="caption">
          <p>Staying Healthy</p>
        </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="biking62.jpg" alt="Fjords" style="width:100%;height:300px;">
        <div class="caption">
          <p>Amazing Exercises</p>
        </div>
    </div>
  </div>
</div>
      
  </body>
    
  </html>