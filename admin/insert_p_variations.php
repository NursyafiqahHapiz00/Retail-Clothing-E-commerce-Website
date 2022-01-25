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
					<i class="fa fa-dashboard"> </i> Dashboard / Insert Product Variations
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-archive"> </i> Insert Product Variations
					</h3>
				</div>

				<div class="panel-body">

				<!-- To create form -->
				<form class="form-horizontal" method="post" action="">
					<div class="form-group" >
						<label class="col-md-3 control-label"> Product Variations: </label>
							<div class="col-md-6">
								<input type="text" name="product_variations" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Product Size: </label>
							<div class="col-md-6">
								<input type="text" name="product_size" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Product Quantity: </label>
							<div class="col-md-6">
								<input type="text" name="product_quantity" class="form-control" required>
							</div>
					</div>
					
					<!-- To create option select coupon for product -->
					<div class="form-group" >
						<label class="col-md-3 control-label">Select:</label>
							<div class="col-md-6">
								<select name="product_id" class="form-control" required>
									<option> Select Product Variations:  </option>

									<?php
										$get_products = "select * from products";
										$run_products = mysqli_query($con,$get_products);
											while($row_products = mysqli_fetch_array($run_products)){

										$product_id = $row_products['product_id'];
										$product_title = $row_products['product_title'];
											echo "<option value='$product_id'> $product_title </option>";
										}
									?>
						
								</select>
							</div>
					</div>
										
					<div class="form-group" >
						<label class="col-md-3 control-label"> </label>
							<div class="col-md-6">
								<input type="submit" name="submit" class=" btn btn-primary form-control" value=" Insert Product Variations ">
							</div>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		
		$product_variations = $_POST['product_variations'];
		$product_size = $_POST['product_size'];
		$product_quantity = $_POST['product_quantity'];
		$product_id = $_POST['product_id'];

	$insert_p_variations = "insert into product_variations (product_id,product_variations,product_size,product_quantity) values ('$product_id','$product_variations','$product_size','$product_quantity')";
	$run_p_variations = mysqli_query($con,$insert_p_variations);

		if($run_p_variations){
			echo "<script>alert('New product variations has been inserted')</script>";
			echo "<script>window.open('index.php?view_products','_self')</script>";
		}
	}
?>

<?php 
	} 
?>
