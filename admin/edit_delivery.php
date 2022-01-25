<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	$get_delivery = "select * from delivery_shipping";
	$run_delivery = mysqli_query($con,$get_delivery);
	$row_delivery = mysqli_fetch_array($run_delivery);

	$delivery_heading = $row_delivery['delivery_heading'];
	$delivery_short_desc = $row_delivery['delivery_short_desc'];
	$delivery_long_desc = $row_delivery['delivery_long_desc'];
?>

<!-- To create format style text area -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>

	<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Edit Delivery & Shipping
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit Delivery & Shipping
					</h3>
				</div>

							<div class="panel-body">

							<!-- To create form -->
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Heading: </label>
										<div class="col-md-8">
											<input type="text" name="delivery_heading" class="form-control" value="<?php echo $delivery_heading; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Short Description: </label>
										<div class="col-md-8">
											<textarea name="delivery_short_desc" class="form-control" rows="6" cols="19" >
												<?php echo $delivery_short_desc; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Long Description: </label>
										<div class="col-md-8">
											<textarea name="delivery_long_desc" class="form-control" rows="6" cols="19" >
												<?php echo $delivery_long_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-8">
											<input type="submit" name="update" value="Update Delivery & Shipping" class="btn btn-primary form-control" >
										</div>
								</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['update'])){
		$delivery_heading = $_POST['delivery_heading'];
		$delivery_short_desc = $_POST['delivery_short_desc'];
		$delivery_long_desc = $_POST['delivery_long_desc'];

	$update_delivery = "update delivery_shipping set delivery_heading='$delivery_heading',delivery_short_desc='$delivery_short_desc',delivery_long_desc='$delivery_long_desc'";
	$run_delivery = mysqli_query($con,$update_delivery);

	if($run_delivery){
		echo "<script>alert('Delivery & shipping page has been updated ')</script>";
		echo "<script>window.open('index.php?edit_delivery','_self')</script>";
		}
	}
?>

<?php 
	} 
?>