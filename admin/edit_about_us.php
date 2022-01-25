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
	$get_about_us = "select * from about_us";
	$run_about_us = mysqli_query($con,$get_about_us);
	$row_about_us = mysqli_fetch_array($run_about_us);

	$about_heading = $row_about_us['about_heading'];
	$about_short_desc = $row_about_us['about_short_desc'];
	$about_long_desc = $row_about_us['about_long_desc'];
?> 

	<div class="row" >
		<div class="col-lg-12" >
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard" ></i> Dashboard / Edit About Us 
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit About Us 
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create form -->
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-3 control-label"> Heading: </label>
										<div class="col-md-8">
											<input type="text" name="about_heading" class="form-control" value="<?php echo $about_heading; ?>">
										</div>
								</div>


								<div class="form-group">
									<label class="col-md-3 control-label"> Short Description: </label>
										<div class="col-md-8">
											<textarea name="about_short_desc" class="form-control" rows="5">
												<?php echo $about_short_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Long Description: </label>
										<div class="col-md-8">
											<textarea name="about_long_desc" id="about_long_desc" class="form-control" rows="10">
												<?php echo $about_long_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-8">
											<input type="submit" name="submit" value="Update About Us" class="btn btn-primary form-control">
								</div>
								</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		$about_heading = $_POST['about_heading'];
		$about_short_desc = $_POST['about_short_desc'];
		$about_long_desc = $_POST['about_long_desc'];

	$update_about_us = "update about_us set about_heading='$about_heading',about_short_desc='$about_short_desc',about_long_desc='$about_long_desc'";
	$run_about_us = mysqli_query($con,$update_about_us);

		if($run_about_us){
			echo "<script>alert('About us page has been updated')</script>";
			echo "<script>window.open('index.php?edit_about_us','_self')</script>";
		}
	}
?>


<?php 
	} 
?>