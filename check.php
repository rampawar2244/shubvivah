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


 $query="SELECT user_id FROM user WHERE user_id='$id' &&  user_data_type='register' ";
      $result=mysqli_query($con,$query);

      if(mysqli_num_rows($result) ==1){
    
echo "<script>alert('profile already exists') <script>";
header("location: profile.php");
        }
        else{
                
echo "<script>alert('Please create profile') <script>";
header("location: registration.php");
        }
?>