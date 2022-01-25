<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->
	<div class="panel-heading"><!-- panel-heading Starts -->

<?php
	$cust_session = $_SESSION['cust_email'];
	$get_customer = "select * from customers where cust_email='$cust_session'";
	$run_customer = mysqli_query($con,$get_customer);
	$row_customer = mysqli_fetch_array($run_customer);

	$cust_image = $row_customer['cust_image'];
	$cust_fname = $row_customer['cust_fname'];
	$cust_lname = $row_customer['cust_lname'];

	if(!isset($_SESSION['cust_email'])){
	}

		else {
			echo "
			<center>
			<img src='cust_images/$cust_image' class='img-responsive'>
			</center>
			<br>
			<h3 align='center' class='panel-title'> $cust_fname $cust_lname </h3>
			";
		}
?>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
	<ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->
		<li class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">
			<a href="my_account.php?my_orders"> 
				<i class="fa fa-list"> </i> My Orders 
			</a>
		</li>

		<li class="<?php if(isset($_GET['shipment_status'])){ echo "active"; } ?>">
			<a href="my_account.php?shipment_status"> 
				<i class="fa fa-list"> </i> Shipment Status
			</a>
		</li>

		<li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
			<a href="my_account.php?edit_account"> 
				<i class="fa fa-pencil"></i> Edit Account 
			</a>
		</li>

		<li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
			<a href="my_account.php?change_pass"> 
				<i class="fa fa-user"></i> Change Password 
			</a>
		</li>

		<li class="<?php if(isset($_GET['my_wishlist'])){ echo "active"; } ?>">
			<a href="my_account.php?my_wishlist"> 
				<i class="fa fa-heart"></i> My WishList 
			</a>
		</li>

		<li class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
			<a href="my_account.php?delete_account"> 
				<i class="fa fa-trash-o"></i> Delete Account 
			</a>
		</li>

		<li>
			<a href="logout.php"> 
				<i class="fa fa-sign-out"></i> Logout 
			</a>
		</li>

		</ul><!-- nav nav-pills nav-stacked Ends -->
	</div><!-- panel-body Ends -->
</div><!-- panel panel-default sidebar-menu Ends -->