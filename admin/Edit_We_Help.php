<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('./database/dbconfig.php');

      if($_SESSION["user"]== true){
  // echo "welcome"."". $_SESSION['user'];
  }
  else{
      header('location: Login.php');
  }
  
  $user=$_SESSION["user"];

  if(isset($_POST['update'])){
      $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $update = "UPDATE `we_help` SET `id`=$id,`title`='$title',`description`='$description' WHERE `id` = $id";
    $update_run= mysqli_query($con, $update);
    if($update_run){
        ?>
        <script>alert("data update successfully");
window.location.href = "we_help.php";

    </script>
        <?php
    }
    else{
        ?>
         <script>alert("data not updated");
window.location.href = "Edit_We_Help.php";

    </script>
        <?php

    }
  }
  $query = "SELECT * FROM we_help";
  $query_run = mysqli_query($con , $query);
while($row = mysqli_fetch_array($query_run)){
    
?>
<div class="card-body">
    
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-center text-white "> We Help </h1>
</div>
</div><br><br>
<hr>
<div class="card-body">
<form action="" method="POST">
<table align="center">
  <tr>
    <td> Title</td><td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
  </tr>
  <tr>
    <td>Description</td><td><textarea name="description"  id="" cols="30" rows="10">
    <?php echo $row['description']; ?></textarea></td>
  </tr>
  <tr><td><button type="submit" name="update">Submit</button></td></tr>
</table>
  </form>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</div>

<?php

}
include('includes/script.php');
include('includes/footer.php');
?>