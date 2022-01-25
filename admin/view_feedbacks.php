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
					<i class="fa fa-dashboard"></i> Dashboard / Customer Feedbacks
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-thumbs-up"></i> Customer Feedbacks
					</h3>
				</div>	
				
							<div class="panel-body" >						
							<!-- To create column chart -->
							<br>
							<?php
								 include ("includes/db.php");

									$query_1 = "select feedback_id, feedback_rating FROM cust_feedbacks where feedback_rating='Excellent'";
									$result_1 = mysqli_query($con, $query_1);
									$row_1 = mysqli_num_rows($result_1);

									$query_2 = "select feedback_id, feedback_rating FROM cust_feedbacks where feedback_rating='Good'";
									$result_2 = mysqli_query($con, $query_2);
									$row_2 = mysqli_num_rows($result_2);
									
									$query_3 = "select feedback_id, feedback_rating FROM cust_feedbacks where feedback_rating='Neutral'";
									$result_3 = mysqli_query($con, $query_3);
									$row_3 = mysqli_num_rows($result_3);
									
									$query_4 = "select feedback_id, feedback_rating FROM cust_feedbacks where feedback_rating='Poor'";
									$result_4 = mysqli_query($con, $query_4);
									$row_4 = mysqli_num_rows($result_4);

								 
								$dataPoints = array(
									array("y" => $row_1, "label" => "Excellent"),
									array("y" => $row_2, "label" => "Good"),
									array("y" => $row_3, "label" => "Neutral"),
									array("y" => $row_4, "label" => "Poor"),
								);
							?>

							<script>
								window.onload = function() {
								 
								var chart = new CanvasJS.Chart("chartContainer", {
									animationEnabled: true,
									theme: "light2",
									title:{
										text: "Feedback Ratings"
									},
									axisY: {
										title: "Number of Customers"
									},
									data: [{
										type: "column",
										yValueFormatString: "#,##0.##",
										dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
									}]
								});
								chart.render();
								 
								}
							</script>

							<div id="chartContainer" style="height: 370px; width: 100%;"></div>
								<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

							<br><br>
							
							<!-- To create table -->	
							<div class="table-responsive" > 
								<table class="table table-bordered table-hover table-striped" > <!-- To create table striped -->
									<thead>

										<tr>

											<th>No.</th>
											<th>Customer Name</th>
											<th>Invoice No.</th>
											<th>Feedback (Rating)</th>
											<th>Feedback Description</th>
											<th>Feedback Date</th>
											<th>Action</th>
											
										</tr>

									</thead>
				
									<tbody>

									<?php
										$i=0;
										$get_feedbacks = "select * from cust_feedbacks";
										$run_feedbacks = mysqli_query($con,$get_feedbacks);
											while($row_feedbacks=mysqli_fetch_array($run_feedbacks)){

										$feedback_id = $row_feedbacks['feedback_id'];
										$cust_fname = $row_feedbacks['cust_fname'];
										$invoice_no = $row_feedbacks['invoice_no'];
										$feedback_rating = $row_feedbacks['feedback_rating'];
										$feedback_description = $row_feedbacks['feedback_description'];
										$feedback_date = $row_feedbacks['feedback_date'];
										$i++;
									?>

										<tr>

											<td><?php echo $i; ?></td>
											<td><?php echo $cust_fname; ?></td>
											<td><?php echo $invoice_no; ?></td>
											<td><?php echo $feedback_rating; ?></td>
											<td><?php echo $feedback_description; ?></td>
											<td><?php echo $feedback_date; ?></td>

											<td>
												<a href="index.php?delete_feedbacks=<?php echo $feedback_id; ?>" >
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
	
<?php 
	} 
?>