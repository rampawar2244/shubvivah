<?php
session_start();
include("./config/config.php");
if($_SESSION["user"]== true){
  echo "welcome"."". $_SESSION['user'];
  }
  else{
      header('location: login.php');
  }
  
  $user=$_SESSION["user"];
$sql="SELECT * FROM `login` WHERE `username`='$user'";
$sql_run = mysqli_query($con,$sql);
$row = mysqli_fetch_array($sql_run);
$id=$row["id"];

 echo $id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Welcome to Home</h1>  
  <button><a href="registration.php">CREATE PROFILE</a></button>
  <button><a href="profile.php">Profile</a></button>
</body>
</html>