<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['edit_p_cat'])){
		
		$edit_p_cat_id = $_GET['edit_p_cat'];
		$edit_p_cat_query = "select * from product_categories where p_cat_id='$edit_p_cat_id'";
		$run_edit = mysqli_query($con,$edit_p_cat_query);
		$row_edit = mysqli_fetch_array($run_edit);

		$p_cat_id = $row_edit['p_cat_id'];
		$p_cat_title = $row_edit['p_cat_title'];
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Product Categories
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-tag" ></i> Edit Product Category
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Product Category Name:</label>
									<div class="col-md-6" >
										<input type="text" name="p_cat_title" class="form-control" value="<?php echo $p_cat_title; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="index.php?view_p_cat" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Product Categories" class="btn btn-primary">Update Product Categories</button>
									</div>
							</div><!-- form-group Ends -->

				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
	if(isset($_POST['update'])){

		$p_cat_title = $_POST['p_cat_title'];

		$update_p_cat = "update product_categories set p_cat_title='$p_cat_title' where p_cat_id='$p_cat_id'";
		$run_p_cat = mysqli_query($con,$update_p_cat);

		if($run_p_cat){
			echo "<script>alert('Product category has been updated!')</script>";
			echo "<script>window.open('index.php?view_p_cats','_self')</script>";
		}
	}
?>

<?php 
	} 
?>