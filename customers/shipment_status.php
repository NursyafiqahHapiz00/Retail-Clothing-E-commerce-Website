<center><!-- center Starts -->
<h1>Shipment Status</h1>
	<p class="lead"> Track your shipment here!</p>
</center><!-- center Ends -->

<hr>

<!-- To create table -->
<div class="table-responsive" ><!-- table-responsive Starts -->
	<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->
		<thead><!-- thead Starts -->

			<tr>

				<th>No.</th>
				<th>Invoice No</th>
                <th>Carrier Name</th>
				<th>Tracking Number</th>
				<th>Shipment Status</th>

			</tr>

		</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php
	$cust_session = $_SESSION['cust_email'];
	$get_customer = "select * from customers where cust_email='$cust_session'";
	$run_customer = mysqli_query($con,$get_customer);
	$row_customer = mysqli_fetch_array($run_customer);

	$cust_id = $row_customer['cust_id'];
	$get_shipment = "select * from shipment where cust_id='$cust_id'";
	$run_shipment = mysqli_query($con,$get_shipment);
	$i = 0;
		while($row_shipment = mysqli_fetch_array($run_shipment)){

	$shipment_id = $row_shipment['shipment_id'];
	$order_id = $row_shipment['order_id'];
	$carrier_id = $row_shipment['carrier_id'];
	$tracking_no = $row_shipment['tracking_no'];
	$shipment_status = $row_shipment['shipment_status'];
	$i++;

	$get_orders = "select * from cust_orders where order_id='$order_id'";
	$run_orders = mysqli_query($con,$get_orders);
	$row_orders = mysqli_fetch_array($run_orders);
	$order_id = $row_orders['order_id'];
	$invoice_no = $row_orders['invoice_no'];
    
    $get_carrier = "select * from carrier where carrier_id='$carrier_id'";
	$run_carrier = mysqli_query($con,$get_carrier);
	$row_carrier = mysqli_fetch_array($run_carrier);
	$carrier_id = $row_carrier['carrier_id'];
	$carrier_name = $row_carrier['carrier_name'];
?>

	<tr><!-- tr Starts -->

		<th><?php echo $i; ?></th>
		<td><?php echo $invoice_no; ?></td>
		<td><?php echo $carrier_name; ?></td>
		<td><?php echo $tracking_no; ?></td>
		<td><?php echo $shipment_status; ?></td>

	</tr><!-- tr Ends -->

<?php 
	} 
?>

		</tbody><!--- tbody Ends --->
	</table><!-- table table-bordered table-hover Ends -->
</div><!-- table-responsive Ends -->



