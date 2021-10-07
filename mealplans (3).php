<!DOCTYPE html>
<html>
    <head>
        <title>Meal Plans</title>
        <meta name="description" content="This is the description">
        <script src="store.js" async></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
    </head>
    <body style="background-color:LightSkyBlue;">
        <video
        src="foodtable2new.mp4"
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
    <ul class="nav navbar-nav" style="margin-left:5px;font-size:20px;">
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
    <ul class="nav navbar-nav navbar-right" style="justify-content:space-between;margin-left:20px;font-size:20px;">
      <li style="color:white;"><a href="register.php" style="color:white"><span class="glyphicon glyphicon-user" style="color:white;"></span> Register</a></li>
      <li style="color:white;"><a href="storageclear.php" style="color:white;"><span class="glyphicon glyphicon-log-in" style="color:white;"></span> Logout</a></li>
    </ul>
    </div>
  </div>
</nav>
        <section style="display:flex;flex-direction:column;align-items:center;color:blue;"class="container content-section">
            <h2 style="font-size:60px;">Weekly Meal Plan Nutrition</h2>
            <div class="shop-items"style="font-size:40px;" >
                <div class="panel panel-default" style="background-color:YellowGreen;">
                    <span class="shop-item-title" >Delicious Meal Plan 1-High Fats, High Carbs, High Proteins</span>
                    <div class="panel-body"><img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/000/000/000/0017/front_fr.4.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/000/000/000/1328/front_fr.4.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00012881/front_fr.4.400.jpg">
                    </div>
                    <div class="panel-body">200 calories</div>
                    </div>
                
                <div class="panel panel-default" style="background-color:Violet;">
                <div class="shop-item">
                    <span class="shop-item-title">Healthy Meal Plan 2-No Fats, No Carbs</span>
                    <div class="panel-body" style="display:flex;flex-direction:row;"><img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/000/000/000/0031/front_fr.3.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/000/112/810/70/front_fr.8.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00014977/front_en.5.400.jpg">
                    </div>
                    <div class="panel-body">400 calories</div>
                        </div>
                </div>
                <div class="panel panel-default" style="background-color:Tan;">
                <div class="shop-item">
                    <span class="shop-item-title">Meal Plan 3-Delicious Deserts</span>
                    <div class="panel-body"><img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00011730/front_fr.24.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00011686/front_fr.8.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00011747/front_fr.14.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/000/142/000/0441/front_fr.10.400.jpg">
                    </div>
                    <div class="panel-body">300 calories</div>
                        </div>
                </div>
                <div class="panel panel-default" style="background-color:GreenYellow;">
                <div class="shop-item">
                    <span class="shop-item-title">Meal Plan 4-Healthy Salads</span>
                    <div class="panel-body"><img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/000/000/000/2257/front_fr.4.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/000/000/000/2219/front_fr.4.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00012218/front_fr.4.400.jpg">
                    </div>
                    <div class="panel-body">600 calories</div>
                        </div>
                </div>
                <div class="panel panel-default" style="background-color:BlueViolet;color:yellow;display:flex;width=1200px;">
                <div class="shop-item">
                    <span class="shop-item-title">Meal Plan 5</span>
                    <div class="panel-body" style="display:flex;flex-direction:row;"><img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00014724/front_fr.14.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00013628/front_fr.5.400.jpg">
                    <img class="shop-item-image" src="https://static.openfoodfacts.org/images/products/00014700/front_fr.4.400.jpg">
                    </div>
                    <div class="panel-body">800 calories</div>
                        </div>
                </div>
            </div>
        </section>
    <table  style="margin:auto;width:200px;height:200px;font-size:30px;background-color:grey;color:black;border-color:blue;border-spacing:20px;padding=10px;font-size:200%" border="20"cellpadding="20">
        <div style="background-color:grey;width:800px;height:90px;margin:auto;">
     <h2 style="text-align:center;color:black;">Your Weekly Meal Plans Total Calories</h2>
    <h2 style="text-align:center;color:black;">Add Plans Below to Estimate Total Weekly Calories</h2>
   
    </div>
     <br>
  <tr >
    <th style="padding:10px;">Sunday<br></th>
    <th style="padding:10px;">Monday<br></th>
    <th style="padding:10px;">Tuesday<br></th>
    <th style="padding:10px;">Wednesday<br></th>
    <th style="padding:10px;">Thursday<br></th>
    <th style="padding:10px;">Friday<br></th>
    <th style="padding:10px;">Saturday<br></th>
  </tr>
  <tr>
    <td style="padding:10px;"><button class="btn btn-primary button1" type="button">ADD plan 1</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button1" type="button">ADD plan 1</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button1" type="button">ADD plan 1</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button1" type="button">ADD plan 1</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button1" type="button">ADD plan 1</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button1" type="button">ADD plan 1</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button1" type="button">ADD plan 1</button></td>


  </tr>
  <tr>
   <td style="padding:10px;"><button class="btn btn-primary button2" type="button">ADD plan 2</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button2" type="button">ADD plan 2</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button2" type="button">ADD plan 2</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button2" type="button">ADD plan 2</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button2" type="button">ADD plan 2</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button2" type="button">ADD plan 2</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button2" type="button">ADD plan 2</button></td>

  </tr>
  <tr style="font-size:20px;">
    <td style="padding:10px;font-size:20px;"><button class="btn btn-primary button3" type="button">ADD plan 3</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button3" type="button">ADD plan 3</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button3" type="button">ADD plan 3</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button3" type="button">ADD plan 3</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button3" type="button">ADD plan 3</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button3" type="button">ADD plan 3</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button3" type="button">ADD plan 3</button></td>

  </tr>
  <tr>
    <td style="padding:10px;"><button class="btn btn-primary button4" type="button">ADD plan 4</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button4" type="button">ADD plan 4</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button4" type="button">ADD plan 4</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button4" type="button">ADD plan 4</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button4" type="button">ADD plan 4</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button4" type="button">ADD plan 4</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button4" type="button">ADD plan 4</button></td>

  </tr>
  <tr>
    <td style="padding:10px;"><button class="btn btn-primary button5" type="button">ADD plan 5</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button5" type="button">ADD plan 5</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button5" type="button">ADD plan 5</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button5" type="button">ADD plan 5</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button5" type="button">ADD plan 5</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button5" type="button">ADD plan 5</button></td>
    <td style="padding:10px;"><button class="btn btn-primary button5" type="button">ADD plan 5</button></td>
  </tr>
</table>
<div style="background-color:grey;color:black;width:800px;margin:auto;">
<h2 class="cart-total-title" style="color:black;font-size:30px;">Estimated Weekly Meal Plan Total Calories Amount Shown Below: </h2>
        <h2 id="totalprice"style="color:black;font-size:30px;" >0<span style="margin-left:5px;">calories</span></h2>
</div>
<div>
    <h2 style="color:black;">Listen to this Music!</h2>
    </div>
    <div style="display:flex;flex-direction:row;">
    <div style="width:25%;">
    <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DX0b1hHYQtJjp" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
    <div style="width:25%;">
        <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DXcBWIGoYBM5M" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
    <div style="width:25%;">
    <iframe src="https://open.spotify.com/embed/playlist/3ZgmfR6lsnCwdffZUan8EA"  height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
     <div style="width:25%;">
    <iframe src="https://open.spotify.com/embed/playlist/0K8DNHMwJaZmERK4FeaAOJ" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
    </div>
    </div>
    </body>
</html>