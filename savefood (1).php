<?php
session_start();


    // When form submitted, insert values into the database.
$conn = mysqli_connect("localhost", "id17693211_root", "/C0]hL@{PCxFLl-v","id17693211_fitness");
    if($_REQUEST['submit']) {
        // removes backslashes
        $name = stripslashes($_POST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($conn, $name);
        $data = stripslashes($_POST['data']);
        $data = mysqli_real_escape_string($conn, $data);
        $val1="Food Ingredient:"."".$name;
        $val2="Quantity:"."".$data;
        $val=$val1." ".$val2;
        if(isset($_SESSION['username'])){
        $user_name = $_SESSION['username'];
        }
        $query    = "UPDATE users SET shoppinglists=CONCAT(shoppinglists,' $val') WHERE username='$user_name'";
        $result   = mysqli_query($conn, $query);
        header('Location: shoppinglist.php');
    
}