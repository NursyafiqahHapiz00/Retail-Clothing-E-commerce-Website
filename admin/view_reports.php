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
					<i class="fa fa-dashboard"></i> Dashboard / Reports
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-print"></i> Reports
					</h3>
				</div>	
				
							<div class="panel-body" >					                     											
							
							<br>
							
							<!-- To create table -->	
							<div class="table-responsive" > 
								<table class="table table-bordered table-hover table-striped" > <!-- To create table striped -->
									<thead>

										<tr>

											<th style="text-align:center">Type of Reports</th>
											
										</tr>

									</thead>
									
									<tbody>
									
										<tr>											
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?sales_order" >Sales Order Report
												</a>
											</td>
										</tr>
										
										<tr>											
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?cust_details" >Customer Details Report
												</a>
											</td>
										</tr>									
										
										<tr>											
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?p_cat" >Product Categories Report
												</a>
											</td>
										</tr>

										<tr>											
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?inv_details" >Inventory Details Report
												</a>
											</td>
										</tr>
										
										<tr>
											<td> 
												<i class="fa fa-print" ></i>
												<a href="index.php?inv_balance" >Low Inventory Report
												</a>
											</td>
										</tr>
										
										<tr>
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?orders" >Orders Report
												</a>
											</td>
										</tr>
										
										<tr>												
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?good_feedback" >Good Feedback Report
												</a>
											</td>
										</tr>
										
										<tr>												
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?bad_feedback" >Bad Feedback Report
												</a>
											</td>
										</tr>													
										
										<tr>											
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?shipping" >Shipping Report
												</a>
											</td>
										</tr>
										
										<tr>
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?admin" >Admin Details Report
												</a>
											</td>
										</tr>
										
										<tr>											
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?most_preferred_product" >Most Preferred Product Report
												</a>
											</td>
										</tr>	
										
										<tr>											
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?least_preferred_product" >Least Preferred Product Report
												</a>
											</td>
										</tr>
																														
										<tr>		
											<td>
												<i class="fa fa-print" ></i>
												<a href="index.php?coupons" >Coupons Report
												</a>
											</td>
										</tr>																								
																					
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
	
