<?php include('config.php');

		$id = $_REQUEST['id'];
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$dob = $_REQUEST['dob'];
		$email = $_REQUEST['email'];
		
		$img_name = "";
		$uploadOk = 1;
		$img_name = $_FILES['img_name']['name'];
		$file_tmp = $_FILES['img_name']['tmp_name'];
		$file_type = $_FILES['img_name']['type'];
		$temp = explode(".", $img_name);		
		$newfilename = round(microtime(true)) . '.' .end($temp);
		move_uploaded_file($_FILES["img_name"]["tmp_name"], "images/" . $newfilename); 
		
		$fire = "INSERT INTO `users`(firstname, lastname, dob, email, image) VALUES ('".$fname."','".$lname."','".$dob."','".$email."','".$newfilename."')";			
		$run = mysqli_query($conn,$fire); 
?>











