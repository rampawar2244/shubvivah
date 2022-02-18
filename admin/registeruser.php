<?php 
session_start();
include("./database/dbconfig.php");

if(isset($_POST['register'])){	
$Name = $_POST['Name'];
$password = $_POST['password'];
$sql =" INSERT INTO `admin`(`username`, `password`) VALUES 
('$Name','$password')";
$sql_run= mysqli_query($con,$sql);
if($sql_run){
    echo "data entered successfully";
header("location: login.php");
}
else{
    echo "data not entered";
}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registration.css">
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
   

<div class="container  ">
            <form class="form-horizontal" role="form" action="" method="POST">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="Name" placeholder="Full Name" class="form-control">
                        <!-- <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span> -->
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
               
            
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="register"class="btn btn-primary btn-block">Register</button>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</body>
</html>