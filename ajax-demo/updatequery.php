<?php
		include('config.php');
		
		$id = $_REQUEST['user_id'];
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$dob = $_REQUEST['dob'];
		$email = $_REQUEST['email'];
		
		$fire = "UPDATE users SET firstname='".$fname."',lastname='".$lname."',dob='".$dob."',email='".$email."' WHERE id='".$id."'";
		$run = mysqli_query($conn,$fire);
?>