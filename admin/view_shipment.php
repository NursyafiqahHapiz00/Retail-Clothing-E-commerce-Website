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
					<i class="fa fa-dashboard"></i> Dashboard / View Shipment
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-bus"></i> View Shipment
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create coupon table-->
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped"> <!-- To create table striped -->
									<thead><!-- thead Starts -->

										<tr>

										<th>No.</th>
										<th>Invoice No</th>
                                        <th>Carrier Name</th>
										<th>Tracking Number</th>
										<th>Shipment Status</th>
										<th>Action</th>
										<th>Action</th>

										</tr>

									</thead>
								
									<tbody>

									<?php
									$i = 0;
									$get_shipment = "select * from shipment";
									$run_shipment = mysqli_query($con,$get_shipment);
										while($row_shipment = mysqli_fetch_array($run_shipment)){

									$shipment_id = $row_shipment['shipment_id'];
									$order_id = $row_shipment['order_id'];
                                    $carrier_id = $row_shipment['carrier_id'];
									$tracking_no = $row_shipment['tracking_no'];
									$shipment_status = $row_shipment['shipment_status'];

									$get_orders = "select * from cust_orders where order_id='$order_id'";
									$run_orders = mysqli_query($con,$get_orders);
									$row_orders = mysqli_fetch_array($run_orders);
									$invoice_no = $row_orders['invoice_no'];

                                    $get_carrier = "select * from carrier where carrier_id='$carrier_id'";
									$run_carrier = mysqli_query($con,$get_carrier);
									$row_carrier = mysqli_fetch_array($run_carrier);
									$carrier_name = $row_carrier['carrier_name'];
									$i++;
									?>

										<tr>

										<td><?php echo $i; ?></td>
										<td><?php echo $invoice_no; ?></td>
                                        <td><?php echo $carrier_name; ?></td>
										<td><?php echo $tracking_no; ?></td>

                                        <td>
											<?php
												if($shipment_status=='To ship'){
													echo $order_status='<div style="color:red;">To ship</div>';
												}

												else{
													echo $shipment_status;
												}
											?>
										</td>

										<td>
										<a href="index.php?edit_shipment=<?php echo $shipment_id; ?>">
										<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
										</a>
										</td>
										
										<td>
										<a href="index.php?delete_shipment=<?php echo $shipment_id; ?>">
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