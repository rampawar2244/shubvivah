<?php  
session_start();
include("./config/config.php");
if($_SESSION["user"]== true){
  // echo "welcome"."". $_SESSION['user'];
  }
  else{
    ?>
    <script>
      window.location.href = "login.php";
    </script>
    <?php  }

include('includes/header.php');
include('includes/navbar.php');


  ?>
<div class="card mt-100">
  <div class="card-header bg-dark">
    <h1 class="text-center text-white">WELCOME TO INVESTOR WEB</h1>
  </div>
</div>

<?php
include('includes/script.php');
include('includes/footer.php');
?>