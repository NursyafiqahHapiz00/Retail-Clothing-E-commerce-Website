<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
		else {
?>

<?php

	$get_terms = "select * from terms";
	$run_terms = mysqli_query($con,$get_terms);
	$row_terms = mysqli_fetch_array($run_terms);
		
	$terms_id = $row_terms['terms_id'];
	$terms_heading = $row_terms['terms_heading'];
	$terms_short_desc = $row_terms['terms_short_desc'];
	$terms_long_desc = $row_terms['terms_long_desc'];
?>

<!-- To create format style text area -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init({selector:'textarea'});</script>

	<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Edit Terms & Conditions
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit Terms & Conditions
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create form -->
							<form class="form-horizontal" action="" method="post">
								<div class="form-group">
									<label class="col-md-3 control-label"> Heading: </label>
										<div class="col-md-8">
											<input type="text" name="terms_heading" class="form-control" value="<?php echo $terms_heading; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Short Description: </label>
										<div class="col-md-8">
											<textarea name="terms_short_desc" class="form-control" rows="6">
												<?php echo $terms_short_desc; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Long Description: </label>
										<div class="col-md-8">
											<textarea name="terms_long_desc" class="form-control" rows="20">
												<?php echo $terms_long_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-8">
											<input type="submit" name="update" value="Update Terms & Conditions" class="btn btn-primary form-control" >
										</div>
								</div>

					</form>
				</div>
			</div>
		</div>
	</div>


<?php
	if(isset($_POST['update'])){
		$terms_heading = $_POST['terms_heading'];
		$terms_short_desc = $_POST['terms_short_desc'];
		$terms_long_desc = $_POST['terms_long_desc'];

	$update_terms = "update terms set terms_heading='$terms_heading',terms_short_desc='$terms_short_desc',terms_long_desc='$terms_long_desc' where terms_id='$terms_id'";
	$run_terms = mysqli_query($con,$update_terms);

	if($run_terms){
		echo "<script>alert('Terms & conditions page has been updated ')</script>";
		echo "<script>window.open('index.php?edit_terms','_self')</script>";
	}
	}
?>

<?php 
	} 
?>