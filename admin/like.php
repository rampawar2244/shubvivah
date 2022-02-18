<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                <small class="error_email" style="color: red;"></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->

<div class="card shadow mb-4">

<div class="card-header py-3">

<h6 class="e-0 font-weight-bold text-primary">Admin Profile

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
       Add Admin Profile 
</button>



</h6>

</div>

<div class="card-body">
  <?php
  if(isset($_SESSION['success']) && $_SESSION['success'] !=''){

    echo '<h2>'. $_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
  }

  if(isset($_SESSION['status']) && $_SESSION['status'] !=''){

    echo '<h2 class="big-info">'. $_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
  }
  
?>
<div class="cintainer mt-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-dark">
          <h4 class="text-white text-center"> PHP CRUD IMAGE FETCH </h4>
        </div>
        <div class="card-body">
          <?php
          $con = mysqli_connect("localhost","root","","crudimage");
          $query = "SELECT * FROM `imagetable`";
          $query_run = mysqli_query($con, $query);

          ?>
          <center>
              <div class="main">
              <form action="" method="POST" enctype="multipart/form-data">
                  <label for="">Name</label>
                  <input type="text" name="name" placeholder="Enter your name"><br>
                  <label for="">Price</label>
                  <input type="text" name="price" placeholder="Enter price"><br>
                  <label for="">Image</label>
                  <input type="file" name="image" placeholder="Insert image">
                  <button type="submit" name="upload">Upload</button>
              </form> 
              </div>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
<?php



if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    print_r($_FILES['image']);

    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_desc = $img_name;
    move_uploaded_file($img_loc,'../uploadimage/'.$img_name);
    $query="INSERT INTO `imagetable`(`name`, `price`, `image`) 
    VALUES ('$name','$price','$img_desc')";
    $query_run = mysqli_query($con, $query);
    header("loaction: happystories.php");
}

?>

<!-- !-- /.container-fluid --> 


<?php
include('includes/script.php');
include('includes/footer.php');
?>
<!-- <---
name  
contact 
email 
age 
gender  
city  
state 
withfamily  
maritalstatus 
child 
diet  
height  
weight  
religion  
community 
subcommunity  
qualification 
clg 
workswith 
company 
aas 
income  
about 
image

 -->