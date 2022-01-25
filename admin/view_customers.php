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
					<i class="fa fa-dashboard"></i> Dashboard / Customer Details
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-users"></i> Customer Details
					</h3>
				</div>	
											
							<div class="panel-body" >
							<!-- To create search box-->
							<form class="form-inline" method="POST" action="">
								<div class="input-group col-md-4">
									<input type="text" class="form-control" placeholder="Search here..." name="search"  value="<?php if(isset($_POST['search'])){echo $_POST['search']; } ?>"/>
										<span class="input-group-btn">
											<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
										</span>
											<div class="col-md-2">
												<a href="index.php?view_customers" type="button" class="btn btn-success">Refresh</a>
											</div>
								</div>
							</form>
	
							<!-- To create table -->	
							<div class="table-responsive" > 
								<table id="cust_data" class="table table-bordered table-hover table-striped" > <!-- To create table striped -->
									<thead>

										<tr>

											<th>No.</th>
											<th>Name</th>
											<th>Email</th>
											<th>Image</th>
											<th>Address</th>
											<th>Contact Number</th>
											<th>Action</th>
											
										</tr>

									</thead>
				
									<tbody id="data">
									<!-- To create search function -->
									<?php 	
										if(isset($_POST['search'])) {
											$filtervalues = $_POST['search'];
											$i=0;
											$query = "select * from customers where CONCAT(cust_fname,cust_lname,cust_email,cust_image,cust_street,cust_zip,cust_state,cust_contact) like '%$filtervalues%' ";
											$query_run = mysqli_query($con, $query);

											if(mysqli_num_rows($query_run) > 0) {
												foreach($query_run as $row_cust) {
													$i++;
									?>
									
                                        <tr>

											<td><?php echo $i; ?></td>
											<td><?= $row_cust['cust_fname']. ' ' .$row_cust['cust_lname']; ?></td>
											<td><?= $row_cust['cust_email']; ?></td>
											<td><img src="../customers/cust_images/<?= $row_cust['cust_image']; ?>" width="60" height="60" ></td>
											<td><?= $row_cust['cust_street'].' ' .$row_cust['cust_zip']. ' ' .$row_cust['cust_state']; ?></td>
											<td><?= $row_cust['cust_contact']; ?></td>

											<td>
												<a href="index.php?delete_customers=<?php echo $cust_id; ?>" >
													<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
												</a>
											</td>

                                        </tr>
                                    
									<?php
											}
										}

											else {

										//If no record match with search data -->
										echo '
                                                    <tr>
                                                        <td colspan = "7"><center>No Record Found</center></td>
                                                    </tr>';
											}
										}

											//Refresh page
											else {
												$i=0;
												$query = "select * from customers";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0) {
													foreach($query_run as $row_cust) {
														$i++;
									?>
									
                                        <tr>

											<td><?php echo $i; ?></td>
											<td><?= $row_cust['cust_fname']. ' ' .$row_cust['cust_lname']; ?></td>
											<td><?= $row_cust['cust_email']; ?></td>
											<td><img src="../customers/cust_images/<?= $row_cust['cust_image']; ?>" width="60" height="60" ></td>
											<td><?= $row_cust['cust_street'].' ' .$row_cust['cust_zip']. ' ' .$row_cust['cust_state']; ?></td>
											<td><?= $row_cust['cust_contact']; ?></td>

											<td>
												<a href="index.php?delete_customers=<?php echo $cust_id; ?>" >
													<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
												</a>
											</td>

                                        </tr>
									
									<?php
													}
												}
											}
									?>
										<br><br>
										                                
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
<?php 
	}
?>