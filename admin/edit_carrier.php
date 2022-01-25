<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>
  
<?php
	$get_carrier = "select * from carrier";
	$run_carrier = mysqli_query($con,$get_carrier);
	$row_carrier = mysqli_fetch_array($run_carrier);

	$carrier_name = $row_carrier['carrier_name'];
	$carrier_link = $row_carrier['carrier_link'];
	$carrier_rate = $row_carrier['carrier_rate'];
?> 

	<div class="row" >
		<div class="col-lg-12" >
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard" ></i> Dashboard / Edit Carrier
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit Carrier
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create form -->
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-3 control-label"> Carrier Name: </label>
										<div class="col-md-8">
											<input type="text" name="carrier_name" class="form-control" value="<?php echo $carrier_name; ?>">
										</div>
								</div>


								<div class="form-group">
									<label class="col-md-3 control-label"> Carrier Link: </label>
										<div class="col-md-8">
											<input type="text" name="carrier_link" class="form-control" value="<?php echo $carrier_link; ?>">
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Carrier Rate: </label>
										<div class="col-md-8">
											<input type="text" name="carrier_rate" class="form-control" value="<?php echo $carrier_rate; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-8">
											<a href="index.php?view_carrier" class="btn btn-danger"> Back </a>
												<button type="submit" name="update" value="Update Carrier" class="btn btn-primary">Update Carrier</button>
								</div>
								</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['update'])){
		$carrier_name = $_POST['carrier_name'];
		$carrier_link = $_POST['carrier_link'];
		$carrier_rate = $_POST['carrier_rate'];

	$update_carrier = "update carrier set carrier_name='$carrier_name',carrier_link='$carrier_link', carrier_rate='$carrier_rate'";
	$run_carrier = mysqli_query($con,$update_carrier);

		if($run_carrier){
			echo "<script>alert('Type of carrier has been updated')</script>";
			echo "<script>window.open('index.php?view_carrier','_self')</script>";
		}
	}
?>


<?php 
	} 
?>