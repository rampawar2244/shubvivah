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
     <link rel="stylesheet" href="css/form.css">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Document</title>
     <style>
         body{
            background: #690000;
         }
     </style>
 </head>

 <body  > 
     <img src="" alt="">
     <div id="wrapper">
         <h2 id="titleRegistration"> Create Your Profile</h2>
         <form action="databasecode.php" method="POST">
             <fieldset id="userInformation">
                 <!-- <legend>User Information</legend> -->

                 <div class="divInformation">
                     <label class="label" for="">Profile Created By:</label>
                     <select name="profile_created_by" > 
                     <option value="self" id="">self</option>
                     <option value="parent" id="">Parent</option>
                     <option value="sibling" id="">Sibiling</option>
                     <option value="friend" id="">Friend</option>
                     <option value="relative" id="">Relitive</option>
                     </Select>
                     </div>
                  
            
                 <div class="divInformation">
                     <label class="label" for="firstName">Name of Groom/Bride:</label>
                     <input type="text" name="firstName" class="input" autocomplete="off" />
               
                 </div>
                 <div class="divInformation">
                     <label class="label" for="">Gender:</label>
                       <input type="radio"  name="gender" value="male">
                     <label for="">Male</label>
                       <input type="radio"  name="gender" value="female">
                     <label for="">Female</label>
                     
                   
                 </div>
                 <div class="divInformation">
                     <label class="label" for="">Marital Status:</label>
                     <select name="marital_status" id=""> 
                     <option value="unmarried" id="">unmarried</option>
                     <option value="married" id="">marriest</option>
                     <option value="widow" id="">widow</option>
                     <option value="divorce" id="">divorce</option>
                     <option value="relation" id="">Relation</option>
                     </Select>
                     </div>

                 <div class="divInformation">
                     <label class="label" for="">Date of Birth:</label>
                     <input type="date" name="date_of_birth" class="input" autocomplete="off" />
                   
                 </div>
                 <div class="divInformation">
                     <label class="label" for="">Residential Country:</label>
                     <select name="country" > 
                     <option value="india" id="">India</option>
                     <option value="pakistan" id="">Pakistan</option>
                     <option value="bangaladesh" id="">Bangaladesh</option>
                     <option value="U S" id="">U S</option>
                     <option value="U K" id="">U K</option>
                     </Select>
                     </div>
                     <div class="divInformation">
                     <label class="label" for="">State:</label>
                     <select name="state" id=""> 
                     <option name="" id="">self</option>
                     <option name="" id="">Parent</option>
                     <option name="" id="">Sibiling</option>
                     <option name="" id="">Friend</option>
                     <option name="" id="">Relitive</option>
                     </Select>
                     </div>
                     <div class="divInformation">
                     <label class="label" for="">City:</label>
                     <select name="city" id=""> 
                     <option name="" id="">self</option>
                     <option name="" id="">Parent</option>
                     <option name="" id="">Sibiling</option>
                     <option name="" id="">Friend</option>
                     <option name="" id="">Relitive</option>
                     </Select>
                     </div>
                     <div class="divInformation">
                     <label class="label" for="">Religion:</label>
                     <select name="religion" id=""> 
                     <option name="" id="">self</option>
                     <option name="" id="">Parent</option>
                     <option name="" id="">Sibiling</option>
                     <option name="" id="">Friend</option>
                     <option name="" id="">Relitive</option>
                     </Select>
                     </div>
                     <div class="divInformation">
                     <label class="label" for="">Mother Tounge:</label>
                     <select name="mother_tounge" id=""> 
                     <option name="" id="">self</option>
                     <option name="" id="">Parent</option>
                     <option name="" id="">Sibiling</option>
                     <option name="" id="">Friend</option>
                     <option name="" id="">Relitive</option>
                     </Select>
                     </div>
                     <div class="divInformation">
                     <label class="label" for="">Caste:</label>
                     <select name="caste" id=""> 
                     <option name="" id="">self</option>
                     <option name="" id="">Parent</option>
                     <option name="" id="">Sibiling</option>
                     <option name="" id="">Friend</option>
                     <option name="" id="">Relitive</option>
                     </Select>
        </div>
                 <div class="divInformation">
                     <label class="label" >Mobile No:</label>
                     <input type="tel" name="mobile_no" class="input"  autocomplete="off" />
                   
        </div>  
        <button class="btn" type="submit"name="register-btn">Next</button>
             </fieldset>
 
         </form>
     </div>


 </body>

 </html>