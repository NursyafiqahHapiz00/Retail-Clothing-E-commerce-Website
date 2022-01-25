<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
		else {
?>

	<!-- To create bootstrap elements -->
	<div class="row"> <!-- Row 1 starts -->
		<div class="col-lg-12"> <!-- To make website responsive -->
			<ol class="breadcrumb"> <!-- To create horizontal navigation bar -->
				<li class="active">
					<i class="fa fa-dashboard"> </i> Dashboard / Insert Coupons
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-ticket"> </i> Insert Coupons
					</h3>
				</div>

				<div class="panel-body">

				<!-- To create form -->
				<form class="form-horizontal" method="post" action="">
					<div class="form-group" >
						<label class="col-md-3 control-label"> Coupon Name: </label>
							<div class="col-md-6">
								<input type="text" name="coupon_name" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Coupon Price (RM): </label>
							<div class="col-md-6">
								<input type="text" name="coupon_price" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Coupon Code: </label>
							<div class="col-md-6">
								<input type="text" name="coupon_code" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Coupon Limit: </label>
							<div class="col-md-6">
								<input type="number" name="coupon_limit" value="1" class="form-control" required>
							</div>
					</div>
					
					<!-- To create option select coupon for product -->
					<div class="form-group" >
						<label class="col-md-3 control-label">Select:</label>
							<div class="col-md-6">
								<select name="product_id" class="form-control" required>
									<option> Select Coupon Product  </option>

									<?php
										$get_products = "select * from products";
										$run_products = mysqli_query($con,$get_products);
											while($row_products = mysqli_fetch_array($run_products)){

										$product_id = $row_products['product_id'];
										$product_title = $row_products['product_title'];
											echo "<option value='$product_id'> $product_title </option>";
										}
									?>
						
								</select>
							</div>
					</div>
										
					<div class="form-group" >
						<label class="col-md-3 control-label"> </label>
							<div class="col-md-6">
								<input type="submit" name="submit" class=" btn btn-primary form-control" value=" Insert Coupon ">
							</div>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		
		$coupon_name = $_POST['coupon_name'];
		$coupon_price = $_POST['coupon_price'];
		$coupon_code = $_POST['coupon_code'];
		$coupon_limit = $_POST['coupon_limit'];
		$product_id = $_POST['product_id'];
		$coupon_used = 0;

	$get_coupons = "select * from coupons where product_id='$product_id' or coupon_code='$coupon_code'";
	$run_coupons = mysqli_query($con,$get_coupons);
	$check_coupons = mysqli_num_rows($run_coupons);

		if($check_coupons == 1){
			echo "<script>alert('Coupon code or product already added. Please choose another coupon code or product')</script>";
		}

			else{
				$insert_coupons = "insert into coupons (product_id,coupon_name,coupon_price,coupon_code,coupon_limit,coupon_used) values ('$product_id','$coupon_name','$coupon_price','$coupon_code','$coupon_limit','$coupon_used')";
				$run_coupons = mysqli_query($con,$insert_coupons);

		if($run_coupons){
			echo "<script>alert('New coupon has been inserted')</script>";
			echo "<script>window.open('index.php?view_coupons','_self')</script>";
			}
		}
	}
?>

<?php 
	} 
?>
