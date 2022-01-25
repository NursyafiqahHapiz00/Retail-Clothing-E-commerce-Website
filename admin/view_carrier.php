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
					<i class="fa fa-dashboard"></i> Dashboard / Edit Carrier
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit Carrier
					</h3>
				</div>	
				
							<!-- To create filter option -->
							<div class="panel-body" >
								
							<!-- To create table carrier -->
								<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped"> <!-- To create table striped -->
									<thead><!-- thead Starts -->

										<tr>

										<th>Carrier Id</th>
										<th>Carrier Name</th>
										<th>Carrier Link</th>
										<th>Carrier Rate</th>
										<th>Action</th>
										<th>Action</th>

										</tr>

									</thead>
								
									<tbody>

										<?php
											$i=0;
											$get_carrier = "select * from carrier";
											$run_carrier = mysqli_query($con,$get_carrier);
												while($row_carrier=mysqli_fetch_array($run_carrier)){
											
											$carrier_id = $row_carrier['carrier_id'];
											$carrier_name = $row_carrier['carrier_name'];
											$carrier_link = $row_carrier['carrier_link'];
											$carrier_rate = $row_carrier['carrier_rate'];
											$i++;
										?>

										<tr>

											<td><?php echo $i; ?></td>
											<td><?php echo $carrier_name; ?></td>
											<td><?php echo $carrier_link; ?></td>
											<td><?php echo $carrier_rate; ?></td>

											<td>
												<a href="index.php?edit_carrier=<?php echo $carrier_id; ?>">
												<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
												</a>
												
											</td>
											
											<td>
												<a href="index.php?delete_carrier=<?php echo $carrier_id; ?>">
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
								
								<div class="form-group">
									<label class="col-md-9 control-label"> </label>
										<div class="col-md-3">
												<a href="index.php?insert_carrier" class="btn btn-primary"> Insert New Carrier </a>											
										</div>
								</div>
								
							</div>
						</div>																

				</div>
			</div>

<?php 
	} 
?>