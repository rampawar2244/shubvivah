<?php
session_start();
include("./database/dbconfig.php");
$id=$_GET['id'];

$q= " DELETE  FROM `we_help` WHERE id=$id";
$query= mysqli_query($con, $q);
if($query){
header  ('location:we_help.php');
}
?>

