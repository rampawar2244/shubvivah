<?php
session_start();
include("./config/config.php");

if(isset($_POST['submit'])){
 $gotra = $_POST['gotra'];
 
 $sql = "INSERT INTO demo(`gotra`)VALUES('$gotra')";
 $sql_run = mysqli_query($con,$sql);
}
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
    <form action="" method="post">

    <select name="gotra" >
                
<?php

$query = "SELECT `gotra` FROM demo";
$query_run= mysqli_query($con,$query);
while($row = mysqli_fetch_array($query_run)){
    

?>
<label for=""> Select Gotra</label>
    <option value="<?php echo $row['gotra']; ?>"><?php echo $row['gotra']; ?></option>
    <?php
}
?>
    </select><br>
    
  
    <input type="text" name="gotra" placeholder="enter gotra manually if above not available"><br>
    <button type="submit" name="submit" >Submit</button>
    </form>

    <h1>hiii</h1>
</body>
</html>