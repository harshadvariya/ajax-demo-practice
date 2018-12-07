<?php
		include('config.php');
		$id = $_REQUEST['id'];
		
		$sql = "SELECT * FROM users WHERE id='".$id."'";
	    $result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
?>

<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="UpdateForm">
				<form id="UpdateForm" enctype="multipart/form-data">
				  <div class="form_group">
					<input type="hidden" name="user_id" id="user_id" value="<?php echo $row["id"]; ?>">
					<input type="text" name="fname" id="fname" value="<?php echo $row["firstname"]; ?>">
					<input type="text" name="lname" id="lname" value="<?php echo $row["lastname"]; ?>">
					<input type="date" name="dob" id="dob" value="<?php echo $row["dob"]; ?>">
					<input type="text" name="email" id="email" value="<?php echo $row["email"]; ?>">
					<br>
					<label>Change Profile</label>
					<div><?php echo '<img src=images/' . $row['image'] . ' width="100px" height="100px;" id="Data_Img" />'; ?></div>
					<input type="file" name="img_name" id="inputFile"> <br>
					<input type="submit" name="submit" value="submit" id="UpdateData">
				  </div> 
				</form>
			</div>
		</div>
</div>
<style>
            body {font-family: Arial, Helvetica, sans-serif;}

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }

            /* The Close Button */
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }
			ul,ul li{margin:0; padding:0; list-style-type:none;}
            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
        </style>	