<?php

session_start();
include("./config/config.php");
if ($_SESSION["user"] == true) {
} else {
    header('location: login.php');
}
$user = $_SESSION["user"];
$sql = "SELECT * FROM `login` WHERE `username`='$user'";
$sql_run = mysqli_query($con, $sql);

$row = mysqli_fetch_array($sql_run);
$id = $row['id'];
echo $id;

$profile_query = "SELECT * FROM `user` WHERE user_id= $id && user_data_type = 'upload'";
$profile_query_run = mysqli_query($con,$profile_query);
$prow = mysqli_fetch_array($profile_query_run);

    ?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="profile.css">
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>JayParshuram</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>Welcome User</h1></div>

    	<!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div> -->
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">

     
      <img src="./profile/<?php $data = json_decode($prow['user_data'], true);
                                                    echo $data['profile'];  ?>"  width="100" height="100px">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <!-- <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div> -->
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                 <li><a data-toggle="tab" href="#edit_profile">Edit Profile</a></li>
                <li><a  href="search.php">Search Your Partner</a></li>
              </ul>
<!-- HOME DATA FETCH -->
<?php
  $sql = "SELECT * FROM user WHERE user_id=$id && user_data_type='register' ";
  $sql_run = mysqli_query($con,$sql);
  if (mysqli_num_rows($sql_run) > 0) {

      while ($row = mysqli_fetch_assoc($sql_run)) {
?>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                        
                          <h1 class="text-black text-center">USER DETAILS</h1>
                          <div class="col-xs-6">
                              <label for="first_name"><h4>username</h4></label>
                              <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['firstName'];  ?></p>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>gender</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['gender'];  ?></p>                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>marital_status</h4></label>
                              <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['marital_status'];  ?></p>                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>date_of_birth</h4></label>
                             <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['date_of_birth'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>country</h4></label>
                              <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['country'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>state</h4></label>
                              <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['state'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>city</h4></label>
                              <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['city'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>religion</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['religion'];  ?></p>                          </div>
                      </div>

                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>mother_tounge</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['mother_tounge'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>caste</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['caste'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>mobile_no</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['mobile_no'];  ?></p>                          </div>
                      </div>
                      
                    <?php
      }}

      $sql = "SELECT * FROM user WHERE user_id=$id && user_data_type='education_profession' ";
      $sql_run = mysqli_query($con,$sql);
      if (mysqli_num_rows($sql_run) > 0) {
    
          while ($row = mysqli_fetch_assoc($sql_run)) {
    
                    ?>
                      <div class="form-group">
                      <div class="col-xs-12">
<br>
<hr>
<h1 class="text-center">EDUCATION & ASTROLOGY DETAILS</h1>
</div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>highesteducation</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['highesteducation'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>specialization</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['specialization'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>other specialization</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['other'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>occupation</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['occupation'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>inudstry</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['inudstry'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>designation</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['designation'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>annualincome</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['annualincome'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>familyincome</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['familyincome'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>manglik</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['manglik'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>gotra</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['gotra'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>feet</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['feet'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>inches</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['inches'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>body_type</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['body_type'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>smoking</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['smoking'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>drinking</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['drinking'];  ?></p>                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>food_habits</h4></label>
                            <p> <?php $data = json_decode($row['user_data'], true);
                                    echo $data['food_habits'];  ?></p>                          </div>
                      </div>

                          

                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Home</button>
                              	<button class="btn btn-lg btn-success" type="submit"><a href="logout.php"><i class="glyphicon glyphicon-ok-sign"></i>LogOut</a></button>
                                  
                               	<!-- <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             
               

               <?php
  }
}
?>


<!-- EDIT PROFILE -->
</div><!--/tab-pane-->
             <div class="tab-pane" id="edit_profile">
               
               <h2></h2>
               <hr>
               <?php
                $sql = "SELECT * FROM user WHERE user_id=$id && user_data_type='register' ";
                $sql_run = mysqli_query($con,$sql);
                if (mysqli_num_rows($sql_run) > 0) {
              
                    while ($row = mysqli_fetch_assoc($sql_run)) {

               ?>
               <h1 class="text-center">USER DETAILS</h1>
                  <form class="form" action="##" method="post" id="registrationForm">
                      
                  <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['firstName'];  ?>"  >
                          </div>
                      </div>

                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>gender</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['gender'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>marital_status</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['marital_status'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>date_of_birth</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['date_of_birth'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>country</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['country'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>state</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['state'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>city</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['city'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>religion</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['religion'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>mother_tounge</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['mother_tounge'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>caste</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['caste'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>mobile_no</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['mobile_no'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>

             <?php
                    }
                }

                $sql = "SELECT * FROM user WHERE user_id=$id && user_data_type='education_profession' ";
                $sql_run = mysqli_query($con,$sql);
                if (mysqli_num_rows($sql_run) > 0) {
              
                    while ($row = mysqli_fetch_assoc($sql_run)) {

?>
<div class="form-group">
    <div class="col-xs-12">
        <hr>
<h1 class="text-center">EDUCATION & PROFESSION DETAILS</h1></div>
</div>

<hr>
<br>
                  <form class="form" action="##" method="post" id="registrationForm">
                      
                  <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>highesteducation</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['highesteducation'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>specialization</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['specialization'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>other occupation</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['other'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>occupation</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['occupation'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>inudstry</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['inudstry'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>designation</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['designation'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>annualincome</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['annualincome'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>familyincome</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['familyincome'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>manglik</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['manglik'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>gotra</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['gotra'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>feet</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['feet'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>inches</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['inches'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>body_type</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['body_type'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>smoking</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['smoking'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>drinking</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['drinking'];  ?>"  >
                          </div>
                      </div>
                      <div class="form-group">  
                          <div class="col-xs-6">
                              <label for="first_name"><h4>food_habits</h4></label>
                              <input type="text" class="form-control" name="firstName" 
                              value="<?php $data = json_decode($row['user_data'], true);
                                    echo $data['food_habits'];  ?>"  >
                          </div>
                      </div>

                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
<?php
                    }
                }
                $sql = "SELECT * FROM user WHERE user_id=$id && user_data_type='upload' ";
                $sql_run = mysqli_query($con,$sql);
                if (mysqli_num_rows($sql_run) > 0) {
              
                    while ($row = mysqli_fetch_assoc($sql_run)) {

?>


    <div class="form-group">
        <div class="col-xs-12">
            <h1 class="text-center"> EDIT PICTURE</h1>
        </div>
    </div>
                  <form class="form" action="##" method="post" id="registrationForm">
                      
                      <div class="form-group">  
                              <div class="col-xs-12">
                                  <label for=""><h4>profile</h4></label>
                                  <img src="./profile/<?php $data = json_decode($row['user_data'], true);
                                                    echo $data['profile'];  ?>"  width="100" height="100px">

                              </div>
                          </div>

                          <div class="form-group">  
                              <div class="col-xs-12">
                                  <label for=""><h4>adhar_card</h4></label>
                                  <img src="./adhar_card/<?php $data = json_decode($row['user_data'], true);
                                                    echo $data['adhar_card'];  ?>"  width="100" height="100px">

                              </div>
                          </div>
                          <div class="form-group">  
                              <div class="col-xs-12">
                                  <label for=""><h4>voter_id</h4></label>
                                  <img src="./voter_id/<?php $data = json_decode($row['user_data'], true);
                                                    echo $data['voter_id'];  ?>"  width="100" height="100px">

                              </div>
                          </div>
                          <div class="form-group">  
                              <div class="col-xs-12">
                                  <label for=""><h4>pan_card</h4></label>
                                  <img src="./pan_card/<?php $data = json_decode($row['user_data'], true);
                                                    echo $data['pan_card'];  ?>"  width="100" height="100px">

                              </div>
                          </div>
                          <div class="form-group">  
                              <div class="col-xs-12">
                                  <label for=""><h4>passport</h4></label>
                                  <img src="./passport/<?php $data = json_decode($row['user_data'], true);
                                                    echo $data['passport'];  ?>"  width="100" height="100px">

                              </div>
                          </div>
                          
                          <div class="form-group">  
                              <div class="col-xs-12">
                                  <label for=""><h4>divers_license</h4></label>
                                  <img src="./divers_license/<?php $data = json_decode($row['user_data'], true);
                                                    echo $data['divers_license'];  ?>"  width="100" height="100px">

                              </div>
                          </div>
                          <div class="form-group">
                               <div class="col-xs-12">
                                    <br>
                                      <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                       <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </div>
                          </div>
                      </form>
                  <?php
}
}
                  ?>
</div>
             
             
             <!-- ### -->
             <!--/tab-pane-->

             <!-- SEARCh GROOM OR BRIDE -->
             <div class="tab-pane" id="search">
            		
               	
                  

                  <!-- EDIT DETAIL PHASE 2  -->
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
    
   <script>      
    $(document).ready(function() {
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
</script>    
</body>