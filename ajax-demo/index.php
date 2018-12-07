<?php include('config.php'); ?>
<html>
    <head>
        <title>Student Report</title>
        <style>
            .stud_wrap{max-width:75%; border: 1px solid #000; padding:15px;}
            .form_group input, .form_group select{margin-bottom:10px;}
			.Displaydata{margin-top:30px;}
        </style>               
    </head>
    <body>
        <div class="stud_wrap">
            <form id="myForm" enctype="multipart/form-data">
                <div class="form_group">
					<input type="text" name="fname" id="fname" placeholder="Enter First Name">
					<input type="text" name="lname" id="lname" placeholder="Enter Last Name">
					<input type="date" name="dob" id="dob">
					<input type="text" name="email" id="email" placeholder="Enter Email">
					<input type="file" name="img_name" id="imgupload">
					<input type="submit" name="submit" value="submit">
                </div> 
            </form>
        </div>
        <div id="results"></div>
		
		<script src="jquery.min.js"></script>
		<script type="text/javascript">
		
		// Fetch Data
		fetch_data();
		function fetch_data(){
			$.ajax({
					 type: 'post',
					 url: 'view.php', 
					 //data: $("#loginForm").serialize(),
					 success : function(response){
						 $('#results').html(response);
					 }
				});
		}
		
		// Insert Data
		 $(function(){ 
			$('#myForm').on('submit', function(event){
				event.preventDefault();
					var formData = new FormData($(this)[0]);
					$.ajax({
					 type : 'post',
					 url: 'insert.php',						 
					 cache: false,
					 contentType: false,
					 processData: false,
					 data: formData, 
					 success : function(response){
						 fetch_data();
						 $('#myForm').each(function(){
							this.reset();
						 });
					 }
					});
			});
		});
		
		$(document).on('click', '#UpdateForm', function() {
					var formData = new FormData($(this)[0]);
					$.ajax({
					 type : 'post',
					 url: 'updatequery.php',				 
					 cache: false,
					 contentType: false,
					 processData: false,
					 data: formData, 
					 success : function(response){
						$('#queryDataResult').html(response);
						$('#myModal').css('display','none');
						fetch_data();
						}
					});
			});
		
		// Delete Data
		function delete_row(id){
		 $.ajax({
		  type: 'post',
		  url: 'delete.php',	
		  data:{
		   delete_row:'delete_row',
		   id:id,
		  },
		  success:function(response) {
			fetch_data();
		  }
		 });
		}
		
  </script>
</body>
</html>
