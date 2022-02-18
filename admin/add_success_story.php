<?php  
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('./database/dbconfig.php');

?>
<div class="card-body">
    
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-center text-white "> Comment Lst</h1>
</div>
</div><br><br>
<hr>
<div class="card-body">
<form action="" method="GET">
  <table class="table" border="02">
<tr>
  <th>ID</th>
  <th>User Id</th>
  <th>Comment</th>
  <th>Comment By</th>
  <th>Post Type</th>
  <th>action</th>
</tr>
<?php

 $query = "SELECT * FROM comments";
 $query_run = mysqli_query($con, $query);
 while($row=mysqli_fetch_array($query_run))
  {
?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['user_id']; ?></td>
  <td><?php echo $row['comment']; ?></td>
  <td><?php echo $row['comment_by']; ?></td>
  <td><?php echo $row['post_type']; ?></td>
  <td><button class="btn btn-danger"><a href="DeleteComment.php?id=<?php echo $row['id']; ?>"class="text-white">Delete Comment</a></button></td>
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