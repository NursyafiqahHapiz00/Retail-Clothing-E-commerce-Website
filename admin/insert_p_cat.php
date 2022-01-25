<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Insert Product Categories
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-tag" ></i> Insert Product Categories
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Product Category Name</label>
									<div class="col-md-6" >
										<input type="text" name="p_cat_title" class="form-control" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
										<input type="submit" name="submit" value="Insert Product Category" class="btn btn-primary form-control" >
									</div>
							</div><!-- form-group Ends -->

				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
	if(isset($_POST['submit'])){
		$p_cat_title = $_POST['p_cat_title'];

		$insert_p_cat = "insert into product_categories (p_cat_title) values ('$p_cat_title')";
		$run_p_cat = mysqli_query($con,$insert_p_cat);

		if($run_p_cat){
			echo "<script>alert('New product category has been inserted')</script>";
			echo "<script>window.open('index.php?view_p_cats','_self')</script>";
		}
	}
?>

<?php 
	} 
?>