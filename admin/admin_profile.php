<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['admin_profile'])){
		
		$edit_id = $_GET['admin_profile'];
		$get_admin = "select * from admin where admin_id='$edit_id'";
		$run_admin = mysqli_query($con,$get_admin);
		$row_admin = mysqli_fetch_array($run_admin);

		$admin_id = $row_admin['admin_id'];
		$admin_fname = $row_admin['admin_fname'];
		$admin_lname = $row_admin['admin_lname'];
		$admin_email = $row_admin['admin_email'];
		$admin_pass = $row_admin['admin_pass'];
		$admin_image = $row_admin['admin_image'];
		$new_admin_image = $row_admin['admin_image'];
		$admin_street = $row_admin['admin_street'];
		$admin_zip = $row_admin['admin_zip'];
		$admin_state = $row_admin['admin_state'];
		$admin_position = $row_admin['admin_position'];
		$admin_contact = $row_admin['admin_contact'];
		$admin_about = $row_admin['admin_about'];
	}
?>

<!-- To create auto number admin_id-->
<?php
	$query = "select * from admin order by admin_id desc limit 1"; //Select all from admin table in phpmyadmin in descending and limit by 1
	$result = mysqli_query($con,$query); //To connect with the query connection
	$row = mysqli_fetch_array($result);
	$auto_id = $row['admin_id'];
	
		if ($auto_id == " ") { //If admin_id is blank
			$admin_id = "ADMIN";
	}
	
		else {
			$admin_id = "ADMIN" .$admin_id;
	}
?>

	<!-- To create edit profile section-->
	<!-- Boostrap elements-->
	<div class="row" > <!-- Row 1 starts -->
		<div class="col-lg-12" >
			<ol class="breadcrumb" > <!-- To make the website responsive -->
				<li class="active" > <!-- To create horizontal navigation bar like in usual website -->
					<i class="fa fa-dashboard" ></i> Dashboard / Edit Profile <!-- Create icon dashboard-->
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default" >
				<div class="panel-heading" >
					<h3 class="panel-title" >
						<i class="fa fa-gear" ></i> Edit Profile
					</h3>
				</div>

							<div class="panel-body">

							<!-- To create edit admin form-->
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
								
								<?php //To appear staff id
									echo  "<b>Staff Id: </b>" . $admin_id;
								?>
															
								<div class="form-group"> <!-- To group all the form  -->	
									<label class="col-md-3 control-label">First Name: </label>
										<div class="col-md-6"> <!-- To make the website responsive -->
											<input type="text" name="admin_fname" class="form-control" required value="<?php echo $admin_fname; ?>">
										</div>
								</div>
								
								<div class="form-group"> <!-- To group all the form  -->	
									<label class="col-md-3 control-label">Last Name: </label>
										<div class="col-md-6"> <!-- To make the website responsive -->
											<input type="text" name="admin_lname" class="form-control" required value="<?php echo $admin_lname; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Email: </label>
										<div class="col-md-6">
											<input type="text" name="admin_email" class="form-control" required value="<?php echo $admin_email; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Password: </label>
										<div class="col-md-6">
											<input type="text" name="admin_pass" class="form-control" required value="<?php echo $admin_pass; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Contact Number: </label>
										<div class="col-md-6">
											<input type="text" name="admin_contact" class="form-control" required value="<?php echo $admin_contact; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Street Address: </label>
										<div class="col-md-6">
											<input type="text" name="admin_street" class="form-control" required value="<?php echo $admin_street; ?>">
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label">Zip: </label>
										<div class="col-md-6">
											<input type="text" name="admin_zip" class="form-control" required value="<?php echo $admin_zip; ?>">
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label">State: </label>
										<div class="col-md-6">
											<input type="text" name="admin_state" class="form-control" required value="<?php echo $admin_state; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Job Position: </label>
										<div class="col-md-6">
											<input type="text" name="admin_position" class="form-control" required value="<?php echo $admin_position; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">About: </label>
										<div class="col-md-6">
											<textarea name="admin_about" class="form-control" rows="3"> <?php echo $admin_about; ?> </textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label">Profile Image: </label>
										<div class="col-md-6">
											<input type="file" name="admin_image" class="form-control" >
											<br>
											<img src="admin_image/<?Php echo $admin_image; ?>" width="70" height="70" >
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"></label>
										<div class="col-md-6">
											<input type="submit" name="update" value="Update Profile" class="btn btn-primary form-control">
										</div>
								</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($_POST['update'])){

	$admin_fname = $_POST['admin_fname'];
	$admin_lname = $_POST['admin_lname'];
	$admin_email = $_POST['admin_email'];
	$admin_pass = $_POST['admin_pass'];
	$admin_street = $_POST['admin_street'];
	$admin_zip = $_POST['admin_zip'];
	$admin_state = $_POST['admin_state'];
	$admin_position = $_POST['admin_position'];
	$admin_contact = $_POST['admin_contact'];
	$admin_about = $_POST['admin_about'];
	$admin_image = $_FILES['admin_image']['name'];
	$temp_admin_image = $_FILES['admin_image']['tmp_name'];

	move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

	if(empty($admin_image)){
		$admin_image = $new_admin_image;
	}
			
	$query = "update admin set admin_fname='$admin_fname', admin_lname='$admin_lname',admin_email='$admin_email',admin_pass='$admin_pass',admin_contact='$admin_contact',admin_street='$admin_street',admin_zip='$admin_zip',admin_state='$admin_state',admin_position='$admin_position',admin_about='$admin_about',admin_image='$admin_image' where admin_id='$edit_id'";
	$query_run = mysqli_query($con,$query);
			
		if($query_run) {
			echo "<script>alert('Your profile has been added successfully')</script>";	
			echo "<script>window.open('index.php?view_admin','_self')</script>";
		}
			else {
				$_SESSION['status'] = "Sorry, your profile are not being updated";
				echo "<script>alert('Sorry, your profile are not being updated')</script>";
				echo "<script>window.open('index.php?admin_profile','_self')</script>";
			}
	}
?>

<?php 
	}  
?>