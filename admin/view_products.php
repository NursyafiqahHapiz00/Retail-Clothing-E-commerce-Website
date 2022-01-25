<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

	<!-- To create bootstrap -->
	<div class="row"> <!--  1 row Starts -->
		<div class="col-lg-12" ><!-- col-lg-12 Starts -->
			<ol class="breadcrumb" ><!-- breadcrumb Starts -->
				<li class="active" >
					<i class="fa fa-dashboard"></i> Dashboard / View Products
				</li>
			</ol><!-- breadcrumb Ends -->
		</div><!-- col-lg-12 Ends -->
	</div><!--  1 row Ends -->

	<div class="row" ><!-- 2 row Starts -->
		<div class="col-lg-12" ><!-- col-lg-12 Starts -->
			<div class="panel panel-default" ><!-- panel panel-default Starts -->
				<div class="panel-heading" ><!-- panel-heading Starts -->
					<h3 class="panel-title" ><!-- panel-title Starts -->
						<i class="fa fa-cart-plus" ></i> View Products
					</h3><!-- panel-title Ends -->
				</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

	<!-- To create table -->
	<div class="table-responsive" ><!-- table-responsive Starts -->
		<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

			<thead>

				<tr>
					<th>No.</th>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>Date</th>
					<th>Variations</th>
					<th>Edit</th>
					<th>Delete</th>

				</tr>

			</thead>

			<tbody>

				<?php
					$i = 0;
					$get_pro = "select * from products";
					$run_pro = mysqli_query($con,$get_pro);
					while($row_pro=mysqli_fetch_array($run_pro)){

					$pro_id = $row_pro['product_id'];
					$pro_name = $row_pro['product_title'];
					$pro_image = $row_pro['product_img1'];
					$pro_price = $row_pro['product_price'];
					$pro_date = $row_pro['date'];
					$i++;
				?>

				<tr>

					<td><?php echo $i; ?></td>
					<td><?php echo $pro_name; ?></td>
					<td><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"></td>
					<td>RM <?php echo $pro_price; ?></td>

					<td><?php echo $pro_date; ?></td>

					<td>
						<a href="index.php?view_p_variations=<?php echo $pro_id; ?>">
						<button class="btn btn-success"><i class="fa fa-pencil"> </i> View Product Variations</button>
						</a>
					</td>

					<td>
						<a href="index.php?edit_products=<?php echo $pro_id; ?>">
						<button class="btn btn-success"><i class="fa fa-pencil"> </i> Edit</button>
						</a>
					</td>

					<td>
						<a href="index.php?delete_products=<?php echo $pro_id; ?>">
						<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
						</a>
					</td>

				</tr>

<?php 
	} 
?>

						</tbody>
					</table><!-- table table-bordered table-hover table-striped Ends -->
				</div><!-- table-responsive Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php 
	} 
?>