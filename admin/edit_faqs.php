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
	$get_faqs = "select * from faqs";
	$run_faqs = mysqli_query($con,$get_faqs);
	$row_faqs = mysqli_fetch_array($run_faqs);

	$faqs_heading = $row_faqs['faqs_heading'];
	$faqs_short_desc = $row_faqs['faqs_short_desc'];
	$faqs_long_desc = $row_faqs['faqs_long_desc'];
?> 

	<div class="row" >
		<div class="col-lg-12" >
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard" ></i> Dashboard / Edit FAQs
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit FAQs
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create form -->
							<form method="post" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-3 control-label"> Heading: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_heading" class="form-control" value="<?php echo $faqs_heading; ?>">
										</div>
								</div>


								<div class="form-group">
									<label class="col-md-3 control-label"> Short Description: </label>
										<div class="col-md-8">
											<textarea name="faqs_short_desc" class="form-control" rows="5">
												<?php echo $faqs_short_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Long Description: </label>
										<div class="col-md-8">
											<textarea name="faqs_long_desc" id="about_long_desc" class="form-control" rows="10">
												<?php echo $faqs_long_desc; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-8">
											<input type="submit" name="submit" value="Update FAQs" class="btn btn-primary form-control">
								</div>
								</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		$faqs_heading = $_POST['faqs_heading'];
		$faqs_short_desc = $_POST['faqs_short_desc'];
		$faqs_long_desc = $_POST['faqs_long_desc'];

	$update_faqs = "update faqs set faqs_heading='$faqs_heading',faqs_short_desc='$faqs_short_desc',faqs_long_desc='$faqs_long_desc'";
	$run_faqs = mysqli_query($con,$update_faqs);

		if($run_faqs){
			echo "<script>alert('FAQs page has been updated')</script>";
			echo "<script>window.open('index.php?edit_faqs','_self')</script>";
		}
	}
?>


<?php 
	} 
?>