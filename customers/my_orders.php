<center><!-- center Starts -->
<h1>My Orders</h1>
	<p class="lead"> Your orders in one place.</p>
		<p class="text-muted" >
			Please feel free to give your  <a href="../contactus2.php" > feedback,</a> because it can help us to provide you with a better service!
		</p>
</center><!-- center Ends -->

<hr>

<!-- To create table -->
<div class="table-responsive" ><!-- table-responsive Starts -->
	<table class="table table-bordered table-hover" ><!-- table table-bordered table-hover Starts -->
		<thead><!-- thead Starts -->

			<tr>

				<th>No.</th>
				<th>Order Date</th>
				<th>Invoice No</th>
				<th>Quantity</th>
				<th>Variation</th>
				<th>Size</th>
				<th>Amount (RM)</th>
				<th>Status</th>
				<th>Action</th>

			</tr>

		</thead><!-- thead Ends -->

<tbody><!--- tbody Starts --->

<?php
	$cust_session = $_SESSION['cust_email'];
	$get_customer = "select * from customers where cust_email='$cust_session'";
	$run_customer = mysqli_query($con,$get_customer);
	$row_customer = mysqli_fetch_array($run_customer);

	$cust_id = $row_customer['cust_id'];
	$get_orders = "select * from cust_orders where cust_id='$cust_id'";
	$run_orders = mysqli_query($con,$get_orders);
	$i = 0;
		while($row_orders = mysqli_fetch_array($run_orders)){

	$order_id = $row_orders['order_id'];
	$p_variations_id = $row_orders['p_variations_id'];
	$order_date = substr($row_orders['order_date'],0,11);
	$invoice_no = $row_orders['invoice_no'];
	$order_qty = $row_orders['order_qty'];
	$order_amount = $row_orders['order_amount'];
	$order_status = $row_orders['order_status'];
	$i++;
	
	$get_p_variations = "select * from product_variations where p_variations_id='$p_variations_id'";
	$run_p_variations = mysqli_query($con,$get_p_variations);
	$row_p_variations = mysqli_fetch_array($run_p_variations);
	$product_variations = $row_p_variations['product_variations'];
	$product_size = $row_p_variations['product_size'];	
	$action = $row_orders['order_status'];

	if($order_status=='pending'){
		$order_status = "<b style='color:red;'>Unpaid</b>";
	}

		else{
			$order_status = "<b style='color:green;'>Paid</b>";
		}
		
	if($order_status=='pending'){	
	    $action = "action";
	}

		else{
			$action = "<b>Confirmed</b>";
		}
?>

	<tr><!-- tr Starts -->

		<th><?php echo $i; ?></th>
		<td><?php echo $order_date; ?></td>
		<td><?php echo $invoice_no; ?></td>
		<td><?php echo $order_qty; ?></td>
		<td><?php echo $product_variations; ?></td>
		<td><?php echo $product_size; ?></td>
		<td><?php echo $order_amount; ?></td>
		<td><?php echo $order_status; ?></td>

		<td>
			<a id="action" href="confirm.php?order_id=<?php echo $order_id; ?>" target="blank" class="btn btn-success btn-xs" > Confirm Payment </a> <br>
			 
		</td>

	</tr><!-- tr Ends -->

<?php 
	} 
?>

		</tbody><!--- tbody Ends --->
	</table><!-- table table-bordered table-hover Ends -->
</div><!-- table-responsive Ends -->



