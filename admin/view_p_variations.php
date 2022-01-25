<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
		else {
?>

<?php

	if(isset($_GET['view_p_variations'])){ //Use get because the data does not require any security

		$view_id = $_GET['view_p_variations'];	
		$get_products = "select * from products where product_id='$view_id'";
		$run_products = mysqli_query($con,$get_products); //Connect with the database when the coupon is applied to the product
		$row_products = mysqli_fetch_array($run_products); //Fetch rows from the product database and store them as an array 

		$product_id = $row_products['product_id'];
		$product_title = $row_products['product_title'];

        $view_p_variations = "select * from product_variations where product_id='$product_id'";
		$run_view = mysqli_query($con,$view_p_variations); //Connect with the database when insert the coupon
		$row_view = mysqli_fetch_array($run_view); //To fetch rows from the coupon database and store them as an array

		$p_variations_id = $row_view['p_variations_id'];
		$product_variations = $row_view['product_variations'];
		$product_size = $row_view['product_size'];
		$product_quantity = $row_view['product_quantity'];
		$product_id = $row_view['product_id'];
	}
?>

	<!--To create bootstrap elements-->
	<div class="row"> <!-- Row 1 starts -->
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / View Product Variations
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-archive"></i> View Product Variations
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create coupon table-->
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped"> <!-- To create table striped -->
									<thead><!-- thead Starts -->

										<tr>

										<th>No</th>
										<th>Product Name</th>
										<th>Variations</th>
										<th>Size</th>
										<th>Quantity</th>
										<th>Sold</th>
										<th>Quantity Left</th>
										<th>Action</th>
										<th>Action</th>

										</tr>

									</thead>
								
									<tbody>

									<?php
                                        $i = 0;
                                        $get_p_variations = "select * from product_variations where product_id='$product_id' order by product_variations asc";
                                        $run_p_variations = mysqli_query($con,$get_p_variations);
                                            while($row_p_variations = mysqli_fetch_array($run_p_variations)){

                                        $p_variations_id = $row_p_variations['p_variations_id'];
                                        $product_id = $row_p_variations['product_id'];
                                        $product_variations = $row_p_variations['product_variations'];
                                        $product_size = $row_p_variations['product_size'];
                                        $product_quantity = $row_p_variations['product_quantity'];

                                        $get_products = "select * from products where product_id='$product_id'";
                                        $run_products = mysqli_query($con,$get_products);
                                        $row_products = mysqli_fetch_array($run_products);
                                        $product_title = $row_products['product_title'];
                                        $i++;
									?>

										<tr>

										<td><?php echo $i; ?></td>
										<td><?php echo $product_title; ?></td>
										<td><?php echo $product_variations; ?></td>
										<td><?php echo $product_size; ?></td>
										<td><?php echo $product_quantity; ?></td>

										<td>
											<?php
												$get_sold = "select * from pending_orders where product_id='$product_id' and p_variations_id='$p_variations_id'";
												$run_sold = mysqli_query($con,$get_sold);
												$count = mysqli_num_rows($run_sold);
													echo $count;
											?>
										</td>

										<td>
											<?php
												$get_sold = "select * from pending_orders where product_id='$product_id'  and p_variations_id='$p_variations_id'";
												$run_sold = mysqli_query($con,$get_sold);
												$count = mysqli_num_rows($run_sold);
													echo $product_quantity - $count;
											?>
										</td>

										<td>
											<a href="index.php?edit_p_variations=<?php echo $p_variations_id; ?>">
												<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
											</a>
										</td>

										<td>
											<a href="index.php?delete_p_variations=<?php echo $p_variations_id; ?>; ?>">
												<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
											</a>
										</td>
									
										</tr>

									<?php 
										} 
									?>

                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select sum(product_quantity) as sum from `product_variations` where product_id='$product_id'");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "4"> <b><?php echo "Total Stock: ";?></b> </td>
                                            <td colspan = "5" > <b><?php echo $fetch['sum']?></b> </td>

                                            <?php
                                                    }
                                            ?>
                                        </tr> 
							</tbody>
						</table>

                                <div class="form-group" >
										<div class="col-md-6">
											<a href="index.php?view_products" class="btn btn-danger"> Back </a>
										</div>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
	} 
?>