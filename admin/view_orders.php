<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

	<div class="row"> 
		<div class="col-lg-12"> 
			<ol class="breadcrumb"> 
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / View Orders
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> View Orders
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create table -->
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>

										<tr>

											<th>No.</th>
											<th>Customers</th>
											<th>Invoice</th>
											<th>Order Date</th>
											<th>Carrier Chosen</th>
											<th>Product</th>
											<th>Quantity</th>
											<th>Variation</th>
											<th>Size</th>
											<th>Total Amount</th>
											<th>Status</th>
											<th>Action</th>

										</tr>

									</thead>


									<tbody>

									<?php
										$i = 0;
										$get_orders = "select * from pending_orders";
										$run_orders = mysqli_query($con,$get_orders);
											while ($row_orders = mysqli_fetch_array($run_orders)) {
										
											$order_id = $row_orders['order_id'];
											$cust_id = $row_orders['cust_id'];
											$invoice_no = $row_orders['invoice_no'];
											$product_id = $row_orders['product_id'];
											$p_variations_id = $row_orders['p_variations_id'];
											$carrier_id = $row_orders['carrier_id'];
											$order_qty = $row_orders['order_qty'];
											$order_status = $row_orders['order_status'];

											$get_products = "select * from products where product_id='$product_id'";
											$run_products = mysqli_query($con,$get_products);
											$row_products = mysqli_fetch_array($run_products);
											$product_title = $row_products['product_title'];

											$get_carrier = "select * from carrier where carrier_id='$carrier_id'";
											$run_carrier = mysqli_query($con,$get_carrier);
											$row_carrier = mysqli_fetch_array($run_carrier);
											$carrier_name = $row_carrier['carrier_name'];

											$get_p_variations = "select * from product_variations where p_variations_id='$p_variations_id'";
											$run_p_variations = mysqli_query($con,$get_p_variations);
											$row_p_variations = mysqli_fetch_array($run_p_variations);
											$product_variations = $row_p_variations['product_variations'];
											$product_size = $row_p_variations['product_size'];
											$i++;
									?>

									<tr>

										<td><?php echo $i; ?></td>

										<td>
											<?php 
												$get_customers = "select * from customers where cust_id='$cust_id'";
												$run_customers = mysqli_query($con,$get_customers);
												$row_customers = mysqli_fetch_array($run_customers);
												
												$cust_fname = $row_customers['cust_fname'];
												$cust_lname = $row_customers['cust_lname'];
													echo $cust_fname. ' '.$cust_lname;
											 ?>
										 </td>

										<td bgcolor="orange" ><?php echo $invoice_no; ?></td>
										
										<td>
											<?php
												$get_cust_orders = "select * from cust_orders where order_id='$order_id'";
												$run_cust_orders = mysqli_query($con,$get_cust_orders);
												$row_cust_orders = mysqli_fetch_array($run_cust_orders);
												$order_date = $row_cust_orders['order_date'];
												$order_amount = $row_cust_orders['order_amount'];
													echo $order_date;
											?>
										</td>
										
										<td><?php echo $carrier_name; ?></td>
										<td><?php echo $product_title; ?></td>
										<td><?php echo $order_qty; ?></td>	
										<td><?php echo $product_variations; ?></td>
										<td><?php echo $product_size; ?></td>					
										<td>RM <?php echo $order_amount; ?></td>

										<td>
											<?php
												if($order_status=='pending'){
													echo $order_status='<div style="color:red;">Pending</div>';
												}

												else{
													echo $order_status='Completed';
												}
											?>
										</td>

										<td>
											<a href="index.php?delete_orders=<?php echo $order_id; ?>" >
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