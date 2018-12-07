<?php 
   include('config.php');
  
   $id = $_POST['id'];
   $sql = "DELETE FROM users WHERE id='".$id."'";
   $run = mysqli_query($conn,$sql);
  
?>