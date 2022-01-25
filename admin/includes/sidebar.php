<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
		else {
?>

	<!-- To create navigation bar header -->
	<nav class="navbar navbar-inverse navbar-fixed-top" > <!-- To create black navigation bar -->
		<div class="navbar-header" ><!-- Navigation bar place at top of the page -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" > <!-- To collapse or hide the admin navigation bar -->
				<span class="sr-only" >Toggle Navigation</span> <!-- Hide the elements of toggle navigation except for the screen readers -->
				<span class="icon-bar" ></span> <!-- To create icon at navigation bar -->
				<span class="icon-bar" ></span>
				<span class="icon-bar" ></span>
			</button>
				<a class="navbar-brand" href="index.php?dashboard">Admin</a> <!-- To appear the brand of company name -->
		</div>

		<!-- To create navigation top right -->
		<ul class="nav navbar-right top-nav" > <!-- To create admin elements at top right -->
			<li class="dropdown" > <!-- To create dropdown elements -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
					<i class="fa fa-user" ></i> <!-- To create icon user -->
						<?php echo $admin_fname; ?> <b class="caret" ></b>
				</a>

	<!-- To create dropdown menu admin top right -->
	<ul class="dropdown-menu" >
		<li>
			<a href="index.php?admin_profile=<?php echo $admin_id; ?>" >
				<i class="fa fa-fw fa-user" ></i> Profile <!-- To create profile dropdown menu -->
			</a>
		</li>

		<li>
			<a href="index.php?view_products" >
				<i class="fa fa-fw fa-cart-plus" ></i> Products <!-- To create products dropdown menu -->
					<span class="badge" ><?php echo $count_products; ?></span>
			</a>
		</li>

		<li>
			<a href="index.php?view_customers" >
				<i class="fa fa-fw fa-users" ></i> Customers
					<span class="badge" ><?php echo $count_cust; ?></span>
			</a>
		</li>

		<li>
			<a href="index.php?view_p_cat" >
				<i class="fa fa-fw fa-tag" ></i> Product Categories
					<span class="badge" ><?php echo $count_p_categories; ?></span>
			</a>
		</li>

		<li class="divider"></li> <!-- To create divider in dropdown menu -->
		<li>
			<a href="logout.php">
				<i class="fa fa-fw fa-power-off"> </i> Log Out
			</a>
		</li>
	</ul>
</li>
</ul>

	<!-- To create side navigation bar-->
	<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->
		<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

	<li>
		<img src="admin_image/<?php echo $admin_image; ?>" width="100" height="100" > <!-- To create admin image at side bar -->		 		
	</li>

	<li>
		<a href="index.php?dashboard">
			<i class="fa fa-fw fa-dashboard"></i> Dashboard
		</a>
	</li>
	
	<!-- To create collapse products -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#products">
			<i class="fa fa-fw fa-cart-plus""></i> Products
				<i class="fa fa-fw fa-caret-down"></i>
	</a>

	<ul id="products" class="collapse">
		<li>
			<a href="index.php?insert_products"> Insert Products </a>
		</li>

		<li>
			<a href="index.php?insert_p_variations"> Insert Variations </a>
		</li>

		<li>
			<a href="index.php?view_products"> View Products </a>
		</li>
	</ul>
	</li>

	<!-- To create collapse product categories -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#p_cat">
			<i class="fa fa-fw fa-tag"></i> Categories
			<i class="fa fa-fw fa-caret-down"></i>
		</a>

	<ul id="p_cat" class="collapse">
		<li>
			<a href="index.php?insert_p_cat"> Insert Category </a>
		</li>

		<li>
			<a href="index.php?view_p_cat"> View Category </a>
		</li>
	</ul>
	</li>
	
	<li>
		<a href="index.php?view_orders">
			<i class="fa fa-fw fa-list"></i> Orders
		</a>
	</li>

	<!-- To create collapse shipment -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#shipment">
			<i class="fa fa-fw fa-bus"></i> Shipment
			<i class="fa fa-fw fa-caret-down"></i>
		</a>

	<ul id="shipment" class="collapse">
		<li>
			<a href="index.php?insert_shipment"> Insert Tracking </a>
		</li>

		<li>
			<a href="index.php?view_shipment"> View Shipment </a>
		</li>
	</ul>
	</li>

	<li>
		<a href="index.php?view_payments">
			<i class="fa fa-fw fa-money"></i> Payments
		</a>
	</li>
	
	<!-- To create collapse coupons -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#coupons">
			<i class="fa fa-fw fa-ticket"></i> Coupons
			<i class="fa fa-fw fa-caret-down"></i>
		</a>

	<ul id="coupons" class="collapse">
		<li>
			<a href="index.php?insert_coupons"> Insert Coupons </a>
		</li>

		<li>
			<a href="index.php?view_coupons"> View Coupons </a>
		</li>

	</ul>
	</li>

	<li>
		<a href="index.php?view_customers">
			<i class="fa fa-fw fa-users"></i> Customer Details
		</a>
	</li>
	
	<li>
		<a href="index.php?view_feedbacks">
			<i class="fa fa-fw fa-thumbs-up"></i> Customer Feedbacks
		</a>
	</li>

	<li>
		<a href="index.php?view_reports">
			<i class="fa fa-fw fa-print"></i> Reports
		</a>
	</li>
	
	<!-- To create collapse pages -->
	<li> 
		<a href="#" data-toggle="collapse" data-target="#pages">
			<i class="fa fa-fw fa-edit"> </i> Pages
			<i class="fa fa-fw fa-caret-down"></i>	
		</a>

	<ul id="pages" class="collapse">
		<li>
			<a href="index.php?edit_contact_us"> Edit Contact Us </a>
		</li>

		<li>
			<a href="index.php?edit_about_us"> Edit About Us </a>
		</li>
		
		<li>
			<a href="index.php?edit_terms"> Edit Terms & Conditions </a> 
		</li>
	
		<li>
			<a href="index.php?edit_delivery"> Edit Delivery & Shipping </a>
		</li>
		
		<li>
			<a href="index.php?edit_track_order"> Edit Track Your Order </a>
		</li>
		
		<li>
			<a href="index.php?view_carrier"> Edit Carrier </a>
		</li>
		
		<li>
			<a href="index.php?edit_faqs"> Edit FAQs </a>
		</li>
		
		<li>
		<a href="index.php?edit_sliders">Edit Sliders</a>
		</li>
		
	</ul>
	</li>
	
	<!-- To create collapse admin -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#admin">
			<i class="fa fa-fw fa-gear"></i> Admin
			<i class="fa fa-fw fa-caret-down"></i>
		</a>

	<ul id="admin" class="collapse">
		<li>
			<a href="index.php?insert_admin"> Insert Admin </a>
		</li>

		<li>
			<a href="index.php?view_admin"> View Admin </a>
		</li>
		
		<li>
			<a href="index.php?admin_profile=<?php echo $admin_id; ?>"> Edit Profile </a>
		</li>
	</ul>
	</li>

	<li>
		<a href="logout.php">
			<i class="fa fa-fw fa-power-off"></i> Log Out
		</a>
	</li>

		</ul>
	</div>
</nav>

<?php 
	} 
?>