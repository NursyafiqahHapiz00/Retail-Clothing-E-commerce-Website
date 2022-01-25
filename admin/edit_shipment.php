<?php //sstho
	if(!isset($_SESSION['admin_email'])){ //To keep the admin login
		echo "<script>window.open('login.php','_self')</script>"; //To open the window interface
	}
		else {
?>

<?php

	if(isset($_GET['edit_shipment'])){ //Use get because the data does not require any security

		$edit_id = $_GET['edit_shipment'];
		$edit_shipment = "select * from shipment where shipment_id='$edit_id'";
		$run_shipment = mysqli_query($con,$edit_shipment); //Connect with the database when insert the coupon
		$row_shipment = mysqli_fetch_array($run_shipment); //To fetch rows from the coupon database and store them as an array

		$shipment_id = $row_shipment['shipment_id'];
		$tracking_no = $row_shipment['tracking_no'];
		$shipment_status = $row_shipment['shipment_status'];
		$order_id = $row_shipment['order_id'];
        $carrier_id = $row_shipment['carrier_id'];

		$get_order = "select * from cust_orders where order_id='$order_id'";
		$run_order = mysqli_query($con,$get_order); //Connect with the database when the coupon is applied to the product
		$row_order = mysqli_fetch_array($run_order); //Fetch rows from the product database and store them as an array 

		$order_id = $row_order['order_id'];
		$invoice_no = $row_order['invoice_no'];

        $get_carrier = "select * from carrier where carrier_id='$carrier_id'";
		$run_carrier = mysqli_query($con,$get_carrier); //Connect with the database when the coupon is applied to the product
		$row_carrier = mysqli_fetch_array($run_carrier); //Fetch rows from the product database and store them as an array 

		$carrier_id = $row_carrier['carrier_id'];
		$carrier_name = $row_carrier['carrier_name'];
	}
?>

	<!--To create bootstrap elements-->
	<div class="row"> <!-- Row 1 starts -->
	<div class="col-lg-12"> <!-- To make sure that the website is responsive according to the device view. -->
		<ol class="breadcrumb"> <!-- To have a horizontal navigation like in common website -->
			<li class="active">
				<i class="fa fa-dashboard"> </i> Dashboard / Edit Shipment <!-- For the dashboard icon-->
			</li>
		</ol> 
	</div> 
	</div>
	
	<div class="row"> <!-- Row 2 starts --->
	<div class="col-lg-12"> 
		<div class="panel panel-default"> <!-- To colour the style of the panel-->
			<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
				<h3 class="panel-title">
					<i class="fa fa-bus"> </i> Edit Shipment <!-- For the money icon-->
				</h3>
			</div>
			
						<div class="panel-body"> <!--To create a padding box around the panel coupon content -->
						
                        <form class="form-horizontal" method="post" action=""> <!-- Use form horizontal to create a horizontal box form -->					
                        <!-- To create select invoice no-->	
						        <div class="form-group" >
									<label class="col-md-3 control-label"> Select </label>
										<div class="col-md-6">
											<select name="order_id" class="form-control">
												<option value="<?php echo $order_id; ?>"> <?php echo $invoice_no; ?> </option>

												<?php
													$get_invoice = "select * from cust_orders";
													$run_invoice = mysqli_query($con,$get_invoice);
														while($row_invoice = mysqli_fetch_array($run_invoice)){

													$order_id = $row_invoice['order_id'];
													$invoice_no = $row_invoice['invoice_no'];
														echo "<option value='$order_id'> $invoice_no </option>";
													}
												?>
										</select>
									</div>
								</div>	

                         <!-- To create select carrier-->	
						        <div class="form-group" >
									<label class="col-md-3 control-label"> Select </label>
										<div class="col-md-6">
											<select name="carrier_id" class="form-control">
												<option value="<?php echo $carrier_id; ?>"> <?php echo $carrier_name; ?> </option>

												<?php
													$get_carrier = "select * from carrier";
													$run_carrier = mysqli_query($con,$get_carrier);
														while($row_carrier = mysqli_fetch_array($run_carrier)){

													$carrier_id = $row_carrier['carrier_id'];
													$carrier_name = $row_carrier['carrier_name'];
														echo "<option value='$carrier_id'> $carrier_name </option>";
													}
												?>
										</select>
									</div>
								</div>	
                        
                        <!-- To create edit shipment form-->							
								<div class="form-group" > <!-- To group all the form -->
									<label class="col-md-3 control-label"> Tracking Number  </label> 
										<div class="col-md-6">
											<input type="text" name="tracking_no" class="form-control" value="<?php echo $tracking_no; ?>" >
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> Status (To ship / To receive / Completed) </label>
										<div class="col-md-6">
											<input type="text" name="shipment_status" class="form-control" value="<?php echo $shipment_status; ?>">
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-6">
											<a href="index.php?view_shipment" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Shipment" class="btn btn-primary">Update Shipment</button>
										</div>
								</div>
								</form>

				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['update'])){
		
		$tracking_no = $_POST['tracking_no'];
		$shipment_status = $_POST['shipment_status'];
		$order_id = $_POST['order_id'];
		$carrier_id = $_POST['carrier_id'];

	$update_shipment = "update shipment set order_id='$order_id',carrier_id='$carrier_id',tracking_no='$tracking_no',shipment_status='$shipment_status' where shipment_id='$shipment_id'";
	$run_shipment = mysqli_query($con,$update_shipment);

		if($run_shipment){
			echo "<script>alert('One shipment details has been updated')</script>";
			echo "<script>window.open('index.php?view_shipment','_self')</script>";
		}
	}
?>

<?php 
	} 
?>