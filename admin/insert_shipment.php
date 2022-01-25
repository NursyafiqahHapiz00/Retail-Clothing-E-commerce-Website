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
					<i class="fa fa-dashboard"> </i> Dashboard / Insert Tracking
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-bus"> </i> Insert Tracking
					</h3>
				</div>

				<div class="panel-body">

                <form class="form-horizontal" method="post" action="">
				<!-- To create option select invoice no -->
                <div class="form-group" >
						<label class="col-md-3 control-label">Select</label>
							<div class="col-md-6">
								<select name="order_id" class="form-control" required>
									<option> Select Invoice Number  </option>

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

					<!-- To create option select invoice no -->
					<div class="form-group" >
						<label class="col-md-3 control-label">Select</label>
							<div class="col-md-6">
								<select name="cust_id" class="form-control" required>
									<option> Select Customer </option>

									<?php
										$get_cust = "select * from customers";
										$run_cust = mysqli_query($con,$get_cust);
											while($row_cust = mysqli_fetch_array($run_cust)){

										$cust_id = $row_cust['cust_id'];
										$cust_fname = $row_cust['cust_fname'];
										$cust_lname = $row_cust['cust_lname'];
											echo "<option value='$cust_id'> $cust_fname $cust_lname </option>";
										}
									?>
						
								</select>
							</div>
					</div>
                
                <!-- To create option select type of carrier -->
                <div class="form-group" >
						<label class="col-md-3 control-label">Select</label>
							<div class="col-md-6">
								<select name="carrier_id" class="form-control" required>
									<option> Select Carrier  </option>

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

                <!-- To create form -->
					<div class="form-group" >
						<label class="col-md-3 control-label"> Tracking Number </label>
							<div class="col-md-6">
								<input type="text" name="tracking_no" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Status (To ship / To receive / Completed) </label>
							<div class="col-md-6">
								<input type="text" name="shipment_status" class="form-control" required>
							</div>
					</div>				
										
					<div class="form-group" >
						<label class="col-md-3 control-label"> </label>
							<div class="col-md-6">
								<input type="submit" name="submit" class=" btn btn-primary form-control" value=" Insert Shipment ">
							</div>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		
		$tracking_no = $_POST['tracking_no'];
		$shipment_status = $_POST['shipment_status'];
		$order_id = $_POST['order_id'];
		$cust_id = $_POST['cust_id'];
		$carrier_id = $_POST['carrier_id'];

	$insert_shipment = "insert into shipment (order_id,carrier_id,cust_id, tracking_no,shipment_status) values ('$order_id','$carrier_id','$cust_id','$tracking_no','$shipment_status')";
	$run_shipment = mysqli_query($con,$insert_shipment);

		if($run_shipment){
			echo "<script>alert('New shipment details has been inserted')</script>";
			echo "<script>window.open('index.php?view_shipment','_self')</script>";
		}
	}
?>

<?php 
	} 
?>
