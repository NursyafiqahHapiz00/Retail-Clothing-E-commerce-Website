<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

	
<?php
	$get_contact_us = "select * from contact_us";
	$run_contact_us = mysqli_query($con,$get_contact_us);
	$row_contact_us = mysqli_fetch_array($run_contact_us);

	$contact_no = $row_contact_us['contact_no'];
	$store_street = $row_contact_us['store_street'];
	$store_zip = $row_contact_us['store_zip'];
	$store_state = $row_contact_us['store_state'];
	$contact_email = $row_contact_us['contact_email'];
	$store_day = $row_contact_us['store_day'];
	$store_hours = $row_contact_us['store_hours'];
?>

	<div class="row" >
		<div class="col-lg-12"> 
			<ol class="breadcrumb"> 
				<li class="active">
					<i class="fa fa-dashboard" ></i> Dashboard / Edit Contact Us
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit Contact Us  
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create form -->
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Customer Service: </label>
										<div class="col-md-6">
											<input type="text" name="contact_no" class="form-control" value="<?php echo $contact_no; ?>">
										</div>
								</div>
								
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Store Street: </label>
										<div class="col-md-6">
											<input type="text" name="store_street" class="form-control" value="<?php echo $store_street; ?>">
										</div>
								</div>
								
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Store Zip: </label>
										<div class="col-md-6">
											<input type="text" name="store_zip" class="form-control" value="<?php echo $store_zip; ?>">
										</div>
								</div>
								
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Store State: </label>
										<div class="col-md-6">
											<input type="text" name="store_state" class="form-control" value="<?php echo $store_state; ?>">
										</div>
								</div>
								
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Contact Email: </label>
										<div class="col-md-6">
											<input type="text" name="contact_email" class="form-control" value="<?php echo $contact_email; ?>">
										</div>
								</div>
							
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Store Operating Days: </label>
										<div class="col-md-6">
											<input type="text" name="store_day" class="form-control" value="<?php echo $store_day; ?>">
										</div>
								</div>
							
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Store Operating Hours: </label>
										<div class="col-md-6">
											<input type="text" name="store_hours" class="form-control" value="<?php echo $store_hours; ?>">
										</div>
								</div>

							<div class="form-group">
								<label class="col-md-3 control-label"> </label>
									<div class="col-md-6">
										<input type="submit" name="submit" class="btn btn-primary form-control" value=" Update Contact Us ">
									</div>
							</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		$contact_no = $_POST['contact_no'];
		$store_street = $_POST['store_street'];
		$store_zip = $_POST['store_zip'];
		$store_state = $_POST['store_state'];
		$contact_email = $_POST['contact_email'];
		$store_day = $_POST['store_day'];
		$store_hours = $_POST['store_hours'];

	$update_contact_us = "update contact_us set contact_no='$contact_no', store_street='$store_street', store_zip='$store_zip', store_state='$store_state', contact_email='$contact_email', store_day='$store_day', store_hours='$store_hours'";
	$run_contact_us = mysqli_query($con,$update_contact_us);

		if($run_contact_us){
			echo "<script>alert('Contact us page has been updated')</script>";
			echo "<script>window.open('index.php?edit_contact_us','_self')</script>";
		}
	}
?>


<?php
	} 
 ?>