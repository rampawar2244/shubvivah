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

  if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

  $query = "INSERT INTO we_help(`title`,`description`) VALUES('$title','$description')";
  $query_run = mysqli_query($con , $query);
  if($query_run){
    ?>
    <script>alert("Data Entered successfully");
  window.location.replace("we_help.php");
  </script>
    <?php
    
    }
    else{
      echo " data no entered";
  }
  }

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
    <td> Title</td><td><input type="text" name="title" placeholder="Enter Title"></td>
  </tr>
  <tr>
    <td>Description</td><td><textarea name="description" id="" cols="30" rows="10"></textarea></td>
  </tr>
  <tr><td><button type="submit" name="submit">Submit</button></td></tr>
</table>
  </form>
</div>
<hr style="height:2px;border-width:0;color:gray;background-color:gray">

<div class="card-header bg-dark" >
  <h1  class="text-white text-center">We Help List</h1>
</div>
<div class="card-body">
<form action="" method="POST">
  <table class="table" border="01">
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>
    <?php
    $sql = "SELECT * FROM we_help";
    $sql_run = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($sql_run)){
    ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['description']; ?></td>
  <td><button class="btn btn-danger"><a href="Edit_We_Help.php?id=
  <?php echo $row['id']; ?>"class="text-white">Edit We Help</a></button></td>
  <td><button class="btn btn-danger"><a href="Delete_We_Help.php?id=
  <?php echo $row['id']; ?>"class="text-white">Delete We Help</a></button></td>

    </tr>
    <?php
    }
    ?>
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
include('includes/script.php');
include('includes/footer.php');
?>