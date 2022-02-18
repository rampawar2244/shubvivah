<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('./config/config.php');
?>


<div class="card-body">
  
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-center text-white "> USER LIST</h1>
</div>
</div><br><br>
<hr>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
  <th>Id</th>
<th>username</th>
<th>email </th><th>
  action
</th>
</tr>
</thead>
<tbody>

<?php 
$query = "SELECT * FROM `login` ORDER BY id DESC";
$query_run = mysqli_query($con,$query);
  while($row=mysqli_fetch_array($query_run))
  {
    ?>
<tr>
<td> <?php  echo $row['id'];  ?> </td>
<td> <?php  echo $row['username'];  ?> </td>
<td>  <?php   echo $row['email'];  ?></td>


<td><button class="btn btn-primary"><a href="editprofile.php?id=<?php echo $row['id']; ?>" class="text-white">EDIT PROFILE</a></button></td>








</tr>
<?php 
  }
?>
</tbody>
</table>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
<!-- !-- /.container-fluid --> 

<?php
include('includes/script.php');
include('includes/footer.php');
?>