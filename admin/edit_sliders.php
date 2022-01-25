<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
		$get_sliders = "select * from sliders";
		$run_sliders = mysqli_query($con,$get_sliders);
		$row_sliders = mysqli_fetch_array($run_sliders);

		$slider_id = $row_sliders['slider_id'];
		$slider_img1 = $row_sliders['slider_img1'];
		$slider_img2 = $row_sliders['slider_img2'];
		$slider_img3 = $row_sliders['slider_img3'];
?>


<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Edit Sliders
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit Sliders
					</h3>
				</div>

							<div class="panel-body">

							<!-- To create form -->
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
								<div class="form-group">
								
								<br>
								<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-6 control-label" style="color:red;" align="left"> *Please update all details and the images must be in 6900px x 1560px</label>
								</div><!-- form-group Ends -->
								<br>
								
								<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" > Slider Image 1:</label>
									<div class="col-md-6" >
										<input type="file" name="slider_img1" class="form-control" required>
										<br>
										<img src="slider_image/<?php echo $slider_img1; ?>" width="345" height="78" >
									</div>
							</div><!-- form-group Ends -->
							
								<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" > Slider Image 2:</label>
									<div class="col-md-6" >
										<input type="file" name="slider_img2" class="form-control" required>
										<br>
										<img src="slider_image/<?php echo $slider_img2; ?>" width="345" height="78" >
									</div>
							</div><!-- form-group Ends -->
							
								<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" > Slider Image 3:</label>
									<div class="col-md-6" >
										<input type="file" name="slider_img3" class="form-control" required>
										<br>
										<img src="slider_image/<?php echo $slider_img3; ?>" width="345" height="78" >
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<input type="submit" name="submit" value="Update Sliders" class="btn btn-primary form-control">
									</div>
							</div><!-- form-group Ends -->
							
					</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->


<?php
	if(isset($_POST['submit'])){

		$slider_img1 = $_FILES['slider_img1']['name'];
		$slider_img2 = $_FILES['slider_img2']['name'];
		$slider_img3 = $_FILES['slider_img3']['name'];

		$temp_name1 = $_FILES['slider_img1']['tmp_name'];
		$temp_name2 = $_FILES['slider_img2']['tmp_name'];
		$temp_name3 = $_FILES['slider_img3']['tmp_name'];

		move_uploaded_file($temp_name1,"slider_image/$slider_img1");
		move_uploaded_file($temp_name2,"slider_image/$slider_img2");
		move_uploaded_file($temp_name3,"slider_image/$slider_img3");

		if(empty($slider_img1)){
		$slider_img1 = $new_slider_img1;
		}
		
		if(empty($slider_img2)){
		$slider_img2 = $new_slider_img2;
		}
		
		if(empty($slider_img3)){
		$slider_img3 = $new_slider_img3;
		}

		$update_sliders = "update sliders set slider_img1='$slider_img1',slider_img2='$slider_img2',slider_img3='$slider_img3' where slider_id='$slider_id'";
		$run_sliders = mysqli_query($con,$update_sliders);

		if($run_sliders){
			echo "<script>alert('Slider images have been updated!')</script>";
			echo "<script>window.open('index.php?edit_sliders','_self')</script>";
		}
	}
?>

<?php 
	} 
?>