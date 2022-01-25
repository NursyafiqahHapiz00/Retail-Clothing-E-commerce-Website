<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
		else {
?>

	<!--To create bootstrap elements-->
	<div class="row"> <!-- Row 1 starts -->
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / View Coupons
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-ticket"></i> View Coupons
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create coupon table-->
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped"> <!-- To create table striped -->
									<thead><!-- thead Starts -->

										<tr>

										<th>No.</th>
										<th>Coupons Name</th>
										<th>Products Name</th>
										<th>Coupons Price (RM)</th>
										<th>Coupons Code</th>
										<th>Limit</th>
										<th>Used</th>
										<th>Action</th>
										<th>Action</th>

										</tr>

									</thead>
								
									<tbody>

									<?php
									$i = 0;
									$get_coupons = "select * from coupons";
									$run_coupons = mysqli_query($con,$get_coupons);
										while($row_coupons = mysqli_fetch_array($run_coupons)){

									$coupon_id = $row_coupons['coupon_id'];
									$product_id = $row_coupons['product_id'];
									$coupon_name = $row_coupons['coupon_name'];
									$coupon_price = $row_coupons['coupon_price'];
									$coupon_code = $row_coupons['coupon_code'];
									$coupon_limit = $row_coupons['coupon_limit'];
									$coupon_used = $row_coupons['coupon_used'];

									$get_products = "select * from products where product_id='$product_id'";
									$run_products = mysqli_query($con,$get_products);
									$row_products = mysqli_fetch_array($run_products);
									$product_title = $row_products['product_title'];
									$i++;
									?>

										<tr>

										<td><?php echo $i; ?></td>
										<td><?php echo $coupon_name; ?></td>
										<td><?php echo $product_title; ?></td>
										<td>RM <?php echo $coupon_price; ?></td>
										<td><?php echo $coupon_code; ?></td>
										<td><?php echo $coupon_limit; ?></td>
										<td><?php echo $coupon_used; ?></td>

										<td>
										<a href="index.php?edit_coupons=<?php echo $coupon_id; ?>">
										<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
										</a>
										</td>
										
										<td>
										<a href="index.php?delete_coupons=<?php echo $coupon_id; ?>">
										<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
										</a>
										</td>
										
										</tr>

									<?php 
										} 
									?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
	} 
?>