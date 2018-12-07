<?php 
    $conn = mysqli_connect("localhost","root","","ajax-demo");
    if (!$conn){
        die('Connection failed ' . mysqli_error($conn));
    }
?>