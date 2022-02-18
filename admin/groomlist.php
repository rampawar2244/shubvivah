<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('./config/config.php');
?>


<div class="card-body">
  
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-center text-white "> Groom LIST</h1>
</div>
</div><br><br>
<hr>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
  <th>Id</th>
  <th>username</th>
  <th>User Id</th>
<th>Gender </th><th>
  action
</th>
</tr>
</thead>
<tbody>

<?php 
$query = "SELECT * FROM `user` WHERE user_data_type='register' ORDER BY id DESC";
$query_run = mysqli_query($con,$query);
if (mysqli_num_rows($query_run) > 0) {

    while ($row = mysqli_fetch_assoc($query_run)) {
        $data = json_decode($row['user_data'], true);
         $data['gender']; 

    if($data ['gender']== 'male'){
    ?>
<tr>
<td> <?php  echo $row['id'];  ?> </td>
<td> <?php $data = json_decode($row['user_data'], true); echo $data['firstName'];  ?> </td>
<td> <?php  echo $row['user_id'];  ?> </td>
<td>  <?php $data = json_decode($row['user_data'], true); echo $data['gender'];  ?></td>


<td><button class="btn btn-primary"><a href="view_user_detailes.php?user_id=<?php echo $row['user_id']; ?>" class="text-white">View User Details</a></button></td>







</tr>
<?php 
}
else{

}
    }
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