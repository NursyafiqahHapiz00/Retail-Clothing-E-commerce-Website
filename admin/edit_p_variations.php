<?php //sstho
	if(!isset($_SESSION['admin_email'])){ //To keep the admin login
		echo "<script>window.open('login.php','_self')</script>"; //To open the window interface
	}
		else {
?>

<?php

	if(isset($_GET['edit_p_variations'])){ //Use get because the data does not require any security

		$edit_id = $_GET['edit_p_variations'];
		$edit_p_variations = "select * from product_variations where p_variations_id='$edit_id'";
		$run_edit = mysqli_query($con,$edit_p_variations); //Connect with the database when insert the coupon
		$row_edit = mysqli_fetch_array($run_edit); //To fetch rows from the coupon database and store them as an array

		$p_variations_id = $row_edit['p_variations_id'];
		$product_variations = $row_edit['product_variations'];
		$product_size = $row_edit['product_size'];
		$product_quantity = $row_edit['product_quantity'];
		$product_id = $row_edit['product_id'];

		$get_products = "select * from products where product_id='$product_id'";
		$run_products = mysqli_query($con,$get_products); //Connect with the database when the coupon is applied to the product
		$row_products = mysqli_fetch_array($run_products); //Fetch rows from the product database and store them as an array 

		$product_id = $row_products['product_id'];
		$product_title = $row_products['product_title'];
	}
?>

	<!--To create bootstrap elements-->
	<div class="row"> <!-- Row 1 starts -->
	<div class="col-lg-12"> <!-- To make sure that the website is responsive according to the device view. -->
		<ol class="breadcrumb"> <!-- To have a horizontal navigation like in common website -->
			<li class="active">
				<i class="fa fa-dashboard"> </i> Dashboard / Edit Product Variations <!-- For the dashboard icon-->
			</li>
		</ol> 
	</div> 
	</div>
	
	<div class="row"> <!-- Row 2 starts --->
	<div class="col-lg-12"> 
		<div class="panel panel-default"> <!-- To colour the style of the panel-->
			<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
				<h3 class="panel-title">
					<i class="fa fa-archive"> </i> Edit Product Variations <!-- For the money icon-->
				</h3>
			</div>
			
						<div class="panel-body"> <!--To create a padding box around the panel coupon content -->
						
							<!-- To create edit coupon form-->
							<form class="form-horizontal" method="post" action=""> <!-- Use form horizontal to create a horizontal box form -->					
								<div class="form-group" > <!-- To group all the form -->
									<label class="col-md-3 control-label"> Product Variations: </label> 
										<div class="col-md-6">
											<input type="text" name="product_variations" class="form-control" value="<?php echo $product_variations; ?>" >
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> Product Size: </label>
										<div class="col-md-6">
											<input type="text" name="product_size" class="form-control" value="<?php echo $product_size; ?>">
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> Product Quantity: </label>
										<div class="col-md-6">
											<input type="text" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?> ">
										</div>
								</div>			

								<div class="form-group" >
									<label class="col-md-3 control-label"> Select: </label>
										<div class="col-md-6">
											<select name="product_id" class="form-control">
												<option value="<?php echo $product_id; ?>"> <?php echo $product_title; ?> </option>

												<?php
													$get_p = "select * from products";
													$run_p = mysqli_query($con,$get_p);
														while($row_p = mysqli_fetch_array($run_p)){

													$p_id = $row_p['product_id'];
													$p_title = $row_p['product_title'];
														echo "<option value='$p_id'> $p_title </option>";
													}
												?>
										</select>
									</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-6">
											<a href="index.php?view_p_variations=<?php echo $product_id; ?>" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Product Variations" class="btn btn-primary">Update Product Variations</button>
										</div>
								</div>
								</form>

				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['update'])){
		
		$product_variations = $_POST['product_variations'];
		$product_size = $_POST['product_size'];
		$product_quantity = $_POST['product_quantity'];
		$product_id = $_POST['product_id'];

	$update_p_variations = "update product_variations set product_id='$product_id',product_variations='$product_variations',product_size='$product_size',product_quantity='$product_quantity' where p_variations_id='$p_variations_id'";
	$run_p_variations = mysqli_query($con,$update_p_variations);

		if($run_p_variations){
			echo "<script>alert('One product variations has been updated')</script>";
			echo "<script>window.open('index.php?view_products','_self')</script>";
		}
	}
?>

<?php 
	} 
?>