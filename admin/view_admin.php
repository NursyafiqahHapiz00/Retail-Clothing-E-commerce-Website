<?php
		if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

	<!-- Bootstrap elements-->
	<div class="row" ><!-- Row 1 starts -->
		<div class="col-lg-12" ><!-- To make website responsive -->
			<ol class="breadcrumb" ><!-- To make horizontal navigation bar -->
				<li class="active" >
					<i class="fa fa-dashboard" ></i> Dashboard / View Admin <!-- To create dashboard icon at top -->
				</li>
			</ol>
		</div>
	</div>


	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default" > <!-- To colour the style of the panel  -->
				<div class="panel-heading" > <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title" >
						<i class="fa fa-gear" ></i> View Admin <!-- Create icon money-->
					</h3>
				</div>
							<div class="panel-body" > <!-- To create a padding box around the panel admin content -->
								
								<!-- To create table -->
								<div class="table-responsive" > 
									<table class="table table-bordered table-hover table-striped" >
										<thead>
										
											<!-- Create table row-->
											<tr>
												<th>No.</th>
												<th>Admin Name</th>
												<th>Email</th>
												<th>Contact Number</th>
												<th>Address</th>
												<th>Job Position</th>
												<th>About</th>
												<th>Profile Image</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>

										<?php //To get the admin record
											$i = 0;
											$get_admin = "select * from admin"; //Select all from admin table in phpmyadmin
											$run_admin = mysqli_query($con,$get_admin);					
												while($row_admin = mysqli_fetch_array($run_admin)){
											
											$admin_id = $row_admin['admin_id'];
											$admin_fname = $row_admin['admin_fname'];
											$admin_lname = $row_admin['admin_lname'];
											$admin_email = $row_admin['admin_email'];
											$admin_contact = $row_admin['admin_contact'];
											$admin_street = $row_admin['admin_street'];
											$admin_zip = $row_admin['admin_zip'];
											$admin_state = $row_admin['admin_state'];
											$admin_position = $row_admin['admin_position'];
											$admin_about = $row_admin['admin_about'];
											$admin_image = $row_admin['admin_image'];
											$i++;
										?>

											<!-- Create table row -->
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $admin_name = $admin_fname. ' ' .$admin_lname; ?></td>
												<td><?php echo $admin_email; ?></td>
												<td><?php echo $admin_contact; ?></td>
												<td><?php echo $admin_address = $admin_street. ' ' .$admin_zip. ' ' .$admin_state; ?></td>
												<td><?php echo $admin_position; ?></td>
												<td><?php echo $admin_about; ?></td>
												<td><img src="admin_image/<?php echo $admin_image; ?>" width="60" height="60" ></td>											

												<td>
													<a href="index.php?delete_admin=<?php echo $admin_id; ?>" >
													<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
													</a>
												</td>
											</tr>


											<?php //To close while $row 
												} 
											?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php //To close else
	}  
?>