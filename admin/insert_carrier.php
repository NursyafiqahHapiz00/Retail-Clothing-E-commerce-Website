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
					<i class="fa fa-dashboard"> </i> Dashboard / Insert Carrier
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"> </i> Insert Carrier
					</h3>
				</div>

				<div class="panel-body">

				<!-- To create form -->
				<form class="form-horizontal" method="post" action="">
					<div class="form-group" >
						<label class="col-md-3 control-label"> Carrier Name: </label>
							<div class="col-md-6">
								<input type="text" name="carrier_name" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Carrier Link: </label>
							<div class="col-md-6">
								<input type="text" name="carrier_link" class="form-control" required>
							</div>
					</div>
					
					<div class="form-group" >
						<label class="col-md-3 control-label"> Carrier Rate: </label>
							<div class="col-md-6">
								<input type="text" name="carrier_rate" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> </label>
							<div class="col-md-6">
								<a href="index.php?view_carrier" class="btn btn-danger"> Back </a>
									<button type="submit" name="submit" value="Insert New Carrier" class="btn btn-primary">Insert New Carrier</button>
							</div>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		
		$carrier_name = $_POST['carrier_name'];
		$carrier_link = $_POST['carrier_link'];
		$carrier_rate = $_POST['carrier_rate'];

	$insert_carrier = "insert into carrier (carrier_name, carrier_link,carrier_rate) values ('$carrier_name', '$carrier_link', '$carrier_rate')";
	$run_carrier = mysqli_query($con,$insert_carrier);

		if($run_carrier){
			echo "<script>alert('New carrier has been inserted')</script>";
			echo "<script>window.open('index.php?view_carrier','_self')</script>";
		}
	}
?>

<?php 
	} 
?>
