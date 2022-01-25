<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}
		else {
?>

	<!-- To create bootstrap elements -->
	<div class="row" > <!-- Row 1 starts -->
		<div class="col-lg-12" > <!-- To make website responsive -->
			<ol class="breadcrumb" > <!-- To make navigation horizontal bar -->
				<li class="active" >
					<i class="fa fa-dashboard" ></i> Dashboard / Insert Admin
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default" >
				<div class="panel-heading" >
					<h3 class="panel-title" >
						<i class="fa fa-gear" ></i> Insert Admin
					</h3>
				</div>

							<div class="panel-body">

							<!-- To create form -->
							<form class="form-horizontal" method="post" enctype="multipart/form-data">				
								<div class="form-group"> <!-- To group all the form  -->	
									<label class="col-md-3 control-label">First Name: </label>
										<div class="col-md-6"> <!-- To make the website responsive -->
											<input type="text" name="admin_fname" class="form-control" required>
										</div>
								</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Last Name: </label>
											<div class="col-md-6">
												<input type="text" name="admin_lname" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Email: </label>
											<div class="col-md-6">
												<input type="text" name="admin_email" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Password: </label>
											<div class="col-md-6">
												<input type="password" name="admin_pass" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Contact Number: </label>
											<div class="col-md-6">
												<input type="text" name="admin_contact" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Street Address: </label>
											<div class="col-md-6">
												<input type="text" name="admin_street" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Zip: </label>
											<div class="col-md-6">
												<input type="text" name="admin_zip" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">State: </label>
											<div class="col-md-6">
												<input type="text" name="admin_state" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Job Position: </label>
											<div class="col-md-6">
												<input type="text" name="admin_position" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">About: </label>
											<div class="col-md-6">
												<textarea name="admin_about" class="form-control" rows="3"></textarea>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">Profile Image: </label>
											<div class="col-md-6">
												<input type="file" name="admin_image" class="form-control" required> <!-- To upload file image-->
											</div>
									</div>																						

									<div class="form-group">
										<label class="col-md-3 control-label"></label>
											<div class="col-md-6">
												<input type="submit" name="submit" value="Insert Admin" class="btn btn-primary form-control">
											</div>
									</div>

					</form> 
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		$admin_fname = $_POST['admin_fname'];
		$admin_lname = $_POST['admin_lname'];
		$admin_email = $_POST['admin_email'];
		$admin_pass = $_POST['admin_pass'];
		$admin_contact = $_POST['admin_contact'];
		$admin_street = $_POST['admin_street'];
		$admin_zip = $_POST['admin_zip'];
		$admin_state = $_POST['admin_state'];
		$admin_position = $_POST['admin_position'];
		$admin_about = $_POST['admin_about'];
		$admin_image = $_FILES['admin_image']['name'];
		$temp_admin_image = $_FILES['admin_image']['tmp_name'];

	move_uploaded_file($temp_admin_image,"admin_image/$admin_image");

	$insert_admin = "insert into admin (admin_fname, admin_lname, admin_email, admin_pass, admin_contact, admin_street, admin_zip, admin_state, admin_position, admin_about, admin_image) values ('$admin_fname', '$admin_lname','$admin_email','$admin_pass','$admin_contact','$admin_street','$admin_zip','$admin_state','$admin_position','$admin_about','$admin_image') ";
	$run_admin = mysqli_query($con,$insert_admin);
				
		if($run_admin) {
				echo "<script>alert('Your profile has been inserted successfully')</script>";
				echo "<script>window.open('index.php?view_admin','_self')</script>";
		}
			else {
				echo "<script>alert('Sorry, your profile are not being added')</script>";
				header('location: view_admin.php');
			}
		}
?>

<?php 
	}  
?>