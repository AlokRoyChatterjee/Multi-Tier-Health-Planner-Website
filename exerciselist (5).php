<html>
  
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Exercises List</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="fitnessstorage.js"></script>
  </head>
    
  <body onload="showAll()"style="background-color:blue;color:black;overflow-x:hidden;zoom:105%;">
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
  <nav style="color:white;background-color:black;display:inline-block;white-space:wrap;" class="navbar navbar-inverse">
  <div class="container-fluid">
      <div style="display:flex;
  justify-content:space-between;">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white" href="search.php">Health/Meal Planner Website App</a>
    </div>
    <ul class="nav navbar-nav" style="margin-left:5px;">
      <li><a style="margin-right:10px;color:white;" href="shoppinglist.php">Shopping List</a></li>
      <li><a href="exerciselist.php" style="color:white">Exercises List</a></li>
      <li><a href="mealplans.php" style="color:white">Weekly Meal Plans</a></li>
      <li><a href="fitness.php" style="color:white">Exercise Recommendations</a></li>
      <li><a href="health.html" style="color:white">Health Recommendations</a></li>
      <li><a href="savedexercises.php" style="color:white">Your Saved Exercises</a></li>
      <li><a href="savemeals.php" style="color:white">Your Saved Shopping List</a></li>
      <li><a href="maps.html" style="color:white">Map Search</a></li>
      <li><a href="media.html" style="color:white">Healthy Foods Twitter</a></li>
      <li><a href="media2.html" style="color:white">Healthy Foods Facebook</a></li>
      <li><a href="media6.html" style="color:white">Your Doctor's Appointments</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right" style="justify-content:space-between;margin-left:20px;">
      <li style="color:white;"><a href="register.php" style="color:white"><span class="glyphicon glyphicon-user" style="color:white;"></span> Register</a></li>
      <li style="color:white;"><a href="storageclear.php" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Logout</a></li>
    </ul>
    </div>
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
      <h2><b></b>Save Your Favorite Exercises in this Exercises List</b></h2>
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
    <div>
        <h2>Listen to this Music While Playing Sports!</h2>
    </div>
    <div style="display:flex;flex-direction:row;">
    <div style="width:25%;" >
    <iframe src="https://open.spotify.com/embed/artist/7oIlt9LQTwmunh1CS7jxpC" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
    <div style="width:25%;">
        <iframe src="https://open.spotify.com/embed/artist/5njMahLKD1tLJ5bejvqseV" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
    <div style="width:25%;">
    <iframe src="https://open.spotify.com/embed/playlist/4hOKQuZbraPDIfaGbM3lKI" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
     <div style="width:25%;">
    <iframe src="https://open.spotify.com/embed/playlist/1KNl4AYfgZtOVm9KHkhPTF" width="250" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
    </div>
   
    
</form>
<h2><b>Use this form to Email yourself Reminders of your Recommended Exercises!</b></h2>
<form action="mail.php" method="POST" name="form" class="form-inline" style="font-size:40px;">
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
			<label style="font-size:40px;"  for="message">Enter Your Recommended Exercises Reminders: </label><br>
			<textarea style="color:black;font-size:30px;" type="text" name="message" class="form-control" cols="60" required></textarea><br>
				</div>
				<br>
			<input type="submit" name="submit" value="Submit" style="color:black;" class="btn btn-default">
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
  <div>
      <h2 style="color:black;margin-top:350px;">Find Your Favorite Hiking Trails!</h2>
  </div>
  <div>
      <!-- BEGIN Hiking Project -->
<iframe style="width:100%;margin-left:150px;max-width:1000px; height:550px;" frameborder="0" scrolling="no" src="https://www.hikingproject.com/widget/map?favs=1&location=ip&x=-8222992&y=5012377&z=8.5&h=550"></iframe>
<!-- END Hiking Project -->
  </div>
  <div>
      <h2 style="color:black;margin-top:20px;margin-left:30px;">Popular Hiking Trail Conditions Shown Below</h2>
  </div>
  <div style="margin-left:30px;"><!-- BEGIN Hiking Project -->
<iframe style="width:100%; max-width:1000px; height:400px;" frameborder="0" scrolling="no" src="https://www.hikingproject.com/widget/conditions?v=3&x=-12311592&y=5436616&z=5&height=400"></iframe>
<!-- END Hiking Project --></div>
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