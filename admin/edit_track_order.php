<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

  
<!-- To create format style text area -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>
  
<?php
	$get_track_order = "select * from track_order";
	$run_track_order = mysqli_query($con,$get_track_order);
	$row_track_order = mysqli_fetch_array($run_track_order);

	$track_heading = $row_track_order['track_heading'];
	$track_short_desc = $row_track_order['track_short_desc'];
	$track_long_desc = $row_track_order['track_long_desc'];
?> 

	<div class="row" >
		<div class="col-lg-12" >
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard" ></i> Dashboard / Edit Track Your Order
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit Track Your Order
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create form -->
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-3 control-label"> Heading: </label>
										<div class="col-md-8">
											<input type="text" name="track_heading" class="form-control" value="<?php echo $track_heading; ?>">
										</div>
								</div>


								<div class="form-group">
									<label class="col-md-3 control-label"> Short Description: </label>
										<div class="col-md-8">
											<textarea name="track_short_desc" class="form-control" rows="10">
												<?php echo $track_short_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Long Description: </label>
										<div class="col-md-8">
											<textarea name="track_long_desc" class="form-control" rows="20">
												<?php echo $track_long_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-8">
											<input type="submit" name="submit" value="Update Track Your Order" class="btn btn-primary form-control">
										</div>
								</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		$track_heading = $_POST['track_heading'];
		$track_short_desc = $_POST['track_short_desc'];
		$track_long_desc = $_POST['track_long_desc'];

	$update_track_order = "update track_order set track_heading='$track_heading',track_short_desc='$track_short_desc',track_long_desc='$track_long_desc'";
	$run_track_order = mysqli_query($con,$update_track_order);

		if($run_track_order){
			echo "<script>alert('Track your order page has been updated')</script>";
			echo "<script>window.open('index.php?edit_track_order','_self')</script>";
		}
	}
?>


<?php 
	} 
?>