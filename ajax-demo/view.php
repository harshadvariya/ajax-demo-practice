<!-- Display Data(@Harshad) -->
		<?php 
			include('config.php');
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn,$sql);
		?>
		<div class="Displaydata"></div>
		<table border="2">
			<thead>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Date Of Birth</th>
				<th>Email</th>
				<th>Profile</th>
				<th colspan="2">Action</th>
			</thead>
			<tbody>
				<?php
					while($row = mysqli_fetch_array($result)){ ?>
					<tr align="center">
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['dob']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo '<img src=images/' . $row['image'] . ' width="100px;" height="100px;" />'; ?></td>
						<td><input type='button' class="delete_button" id="delete_button<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');"></td>
						<td>
							<input type='button' class="update_button" id="update_button<?php echo $row['id'];?>" value="update" onclick="update_button('<?php echo $row['id'];?>');">
						</td>
					</tr>
				<?php }	?>
			</tbody>
		</table>
		
		<div id="UpdateDataResult"></div>
		<div id="queryDataResult"></div>
		<script src="jquery.min.js"></script>
        <script>
			var modal = document.getElementById('myModal');
            var btn = $('.update_button').attr('id');
            var span = document.getElementsByClassName("close")[0];
          /*  btn.onclick = function () {
                modal.style.display = "block";
            }
            span.onclick = function () {
                modal.style.display = "none";
            }
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            } */
			
			function update_button(id){
				$.ajax({
				 type : 'post',
				 url: 'updatedata.php',
				 data: {id:id}, 
				 success : function(response){
					$('#UpdateDataResult').html(response);
					$('#myModal').css('display','block');
				   }
				});
			}
			
		/*	$(document).ready(function(){
				$("#inputFile").change(function(){
					readURL(this);
				});
				function readURL(input){
					if (input.files && input.files[0]) {
						var reader = new FileReader();
						reader.onload = function (e) {
							$('#Data_Img').attr('src', e.target.result);
						}
						reader.readAsDataURL(input.files[0]);
					}
				}
			}); */
		
		</script>
		
		