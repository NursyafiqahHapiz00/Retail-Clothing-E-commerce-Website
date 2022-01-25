<?php //sstho
	if(!isset($_SESSION['admin_email'])){ //To keep the admin login
		echo "<script>window.open('login.php','_self')</script>"; //To open the window interface
	}
		else {
?>

<?php

	if(isset($_GET['edit_coupons'])){ //Use get because the data does not require any security

		$edit_id = $_GET['edit_coupons'];
		$edit_coupons = "select * from coupons where coupon_id='$edit_id'";
		$run_edit = mysqli_query($con,$edit_coupons); //Connect with the database when insert the coupon
		$row_edit = mysqli_fetch_array($run_edit); //To fetch rows from the coupon database and store them as an array

		$coupon_id = $row_edit['coupon_id'];
		$coupon_name = $row_edit['coupon_name'];
		$coupon_price = $row_edit['coupon_price'];
		$coupon_code = $row_edit['coupon_code'];
		$coupon_limit = $row_edit['coupon_limit'];
		$coupon_used = $row_edit['coupon_used'];
		$product_id = $row_edit['product_id'];

		$get_products = "select * from products where product_id='$product_id'";
		$run_products = mysqli_query($con,$get_products); //Connect with the database when the coupon is applied to the product
		$row_products = mysqli_fetch_array($run_products); //Fetch rows from the product database and store them as an array 

		$product_id = $row_products['product_id'];
		$product_title = $row_products['product_title'];
	}
?>

	<!--To create bootstrap elements-->
	<div class="row"> <!-- Row 1 starts -->
	<div class="col-lg-12"> <!-- To make sure that the website is responsive according to the device view. -->
		<ol class="breadcrumb"> <!-- To have a horizontal navigation like in common website -->
			<li class="active">
				<i class="fa fa-dashboard"> </i> Dashboard / Edit Coupons <!-- For the dashboard icon-->
			</li>
		</ol> 
	</div> 
	</div>
	
	<div class="row"> <!-- Row 2 starts --->
	<div class="col-lg-12"> 
		<div class="panel panel-default"> <!-- To colour the style of the panel-->
			<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
				<h3 class="panel-title">
					<i class="fa fa-ticket"> </i> Edit Coupons <!-- For the money icon-->
				</h3>
			</div>
			
						<div class="panel-body"> <!--To create a padding box around the panel coupon content -->
						
							<!-- To create edit coupon form-->
							<form class="form-horizontal" method="post" action=""> <!-- Use form horizontal to create a horizontal box form -->					
								<div class="form-group" > <!-- To group all the form -->
									<label class="col-md-3 control-label"> Coupon Name </label> 
										<div class="col-md-6">
											<input type="text" name="coupon_name" class="form-control" value="<?php echo $coupon_name; ?>" >
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> Coupon Price (RM) </label>
										<div class="col-md-6">
											<input type="text" name="coupon_price" class="form-control" value="<?php echo $coupon_price; ?>">
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> Coupon Code </label>
										<div class="col-md-6">
											<input type="text" name="coupon_code" class="form-control" value="<?php echo $coupon_code; ?> ">
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> Coupon Limit </label>
										<div class="col-md-6">
											<input type="number" name="coupon_limit" value="<?php echo $c_limit; ?>" class="form-control">
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> Select: </label>
										<div class="col-md-6">
											<select name="product_id" class="form-control">
												<option value="<?php echo $product_id; ?>"> <?php echo $product_title; ?> </option>

												<?php
													$get_p = "select * from products";
													$run_p = mysqli_query($con,$get_p);
														while($row_p = mysqli_fetch_array($run_p)){

													$p_id = $row_p['product_id'];
													$p_title = $row_p['product_title'];
														echo "<option value='$p_id'> $p_title </option>";
													}
												?>
										</select>
									</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-6">
											<a href="index.php?view_coupons" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Coupons" class="btn btn-primary">Update Coupons</button>
										</div>
								</div>
								</form>

				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['update'])){
		
		$coupon_name = $_POST['coupon_name'];
		$coupon_price = $_POST['coupon_price'];
		$coupon_code = $_POST['coupon_code'];
		$coupon_limit = $_POST['coupon_limit'];
		$product_id = $_POST['product_id'];

	$update_coupons = "update coupons set product_id='$product_id',coupon_name='$coupon_name',coupon_price='$coupon_price',coupon_code='$coupon_code',coupon_limit='$coupon_limit',coupon_used='$coupon_used' where coupon_id='$coupon_id'";
	$run_coupons = mysqli_query($con,$update_coupons);

		if($run_coupons){
			echo "<script>alert('One coupon has been updated')</script>";
			echo "<script>window.open('index.php?view_coupons','_self')</script>";
		}
	}
?>

<?php 
	} 
?>