<?php //sstho
		session_start(); 
		include("includes/db.php"); //Import from database file in includes folder
		
		if(!isset($_SESSION['admin_email'])){ 
		echo "<script>window.open('login.php','_self')</script>"; //Use _self to replace the current page
	}
	
	else { //If it is not appear login page
?>

<?php
	
	//To set the admin variable 	
	$admin_session = $_SESSION['admin_email']; //For admin session that using email
	$get_admin = "select * from admin  where admin_email='$admin_session'"; //Use $get to collect the values from admin. Select the records from admin_email in phpmyadmin (admins table)
	$run_admin = mysqli_query($con,$get_admin); //To run the admin database. To execute the sql query from admin_email in phpmyadmin 
	$row_admin = mysqli_fetch_array($run_admin); //To fetch the row array from the query result in admins phpmyadmin
	
	//To set the variable $row_admin
	$admin_id = $row_admin['admin_id']; //Row is used to get the admin_id rows record from phpmyadmin
	$admin_fname = $row_admin['admin_fname'];
	$admin_lname = $row_admin['admin_lname'];
	$admin_email = $row_admin['admin_email'];
	$admin_pass = $row_admin['admin_pass'];
	$admin_contact = $row_admin['admin_contact'];
	$admin_street = $row_admin['admin_street'];
	$admin_zip = $row_admin['admin_zip'];
	$admin_state = $row_admin['admin_state'];
	$admin_position = $row_admin['admin_position'];
	$admin_about = $row_admin['admin_about'];
	$admin_image = $row_admin['admin_image'];

	//To set the product variable
	$get_products = "select * from products"; //Select record from products table in phpmyadmin
	$run_products = mysqli_query($con,$get_products); //Run the products database and execute the sql query from product table in phpmyadmin
	$count_products = mysqli_num_rows($run_products); //Return the numbers elements from the product table

	//To set the customers variable
	$get_cust = "select * from customers"; //Select record from customers table in phpmyadmin
	$run_cust = mysqli_query($con,$get_cust);
	$count_cust = mysqli_num_rows($run_cust);

	//To set the product categories variable
	$get_p_categories = "select * from product_categories"; //Select record from product_categories table in phpmyadmin
	$run_p_categories = mysqli_query($con,$get_p_categories);
	$count_p_categories = mysqli_num_rows($run_p_categories);

	//To set the customer orders variable
	$get_total_orders = "select * from cust_orders"; //Select record from customers_orders table in phpmyadmin
	$run_total_orders = mysqli_query($con,$get_total_orders);
	$count_total_orders = mysqli_num_rows($run_total_orders);

	//To set pending order variable
	$get_pending_orders = "select * from cust_orders where order_status='pending'"; //Select from customer_orders table that shows pending status
	$run_pending_orders = mysqli_query($con,$get_pending_orders);
	$count_pending_orders = mysqli_num_rows($run_pending_orders);

	//To set completed orders variable
	$get_completed_orders = "select * from cust_orders where order_status='Complete'"; //Select from customer_orders table that shows completed status
	$run_completed_orders = mysqli_query($con,$get_completed_orders);
	$count_completed_orders = mysqli_num_rows($run_completed_orders);

	//To set total earnings variable
	$get_total_earnings = "select SUM( order_amount) as Total from cust_orders WHERE order_status = 'Complete'"; //Select the record from customer-orders that shows copmpleted status to get the total earnings
	$run_total_earnings = mysqli_query($con, $get_total_earnings);
	$row = mysqli_fetch_assoc($run_total_earnings);                       
	$count_total_earnings = $row['Total'];

	//To set coupons variable
	$get_coupons = "select * from coupons";
	$run_coupons = mysqli_query($con,$get_coupons);
	$count_coupons = mysqli_num_rows($run_coupons);
?>


<!DOCTYPE html>
	<html>
		<head>
			<title>Admin</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
			<link rel="icon" type="image/png" href="logo/favicon-32x32.png" sizes="32x32" />
	</head>

	<body>
		<div id="wrapper"> <!-- To set the content border within the center of the page and not stick to the eadge of the webpage-->

	<?php 
		include("includes/sidebar.php");  
	?>

		<div id="page-wrapper"><!-- To center the wrapper -->
		<div class="container-fluid"><!-- Expand or shrink the webpage each time the vieport is resized -->

	<?php
		//To get dashboard record
			if(isset($_GET['dashboard'])){
			include("dashboard.php"); //Get the dashboard record from dashboard.php file
		}

		//To get products record
			if(isset($_GET['insert_products'])){
			include("insert_products.php"); //Get the insert_products record from insert_products.php file
		}

			if(isset($_GET['view_products'])){
			include("view_products.php"); //Get the view_products record from view_products.php file
		}

			if(isset($_GET['delete_products'])){
			include("delete_products.php");
		}

			if(isset($_GET['edit_products'])){
			include("edit_products.php");
		}

		//To get product categories record
			if(isset($_GET['insert_p_cat'])){
			include("insert_p_cat.php");
		}

			if(isset($_GET['view_p_cat'])){
			include("view_p_cat.php");
		}

			if(isset($_GET['delete_p_cat'])){
			include("delete_p_cat.php");
		}

			if(isset($_GET['edit_p_cat'])){
			include("edit_p_cat.php");
		}
		
		//To get product variations record
			if(isset($_GET['insert_p_variations'])){
			include("insert_p_variations.php");
		}

			if(isset($_GET['delete_p_variations'])){
			include("delete_p_variations.php");
		}

			if(isset($_GET['edit_p_variations'])){
			include("edit_p_variations.php");
		}

			if(isset($_GET['view_p_variations'])){
			include("view_p_variations.php");
		}

		//To get shipment record
		if(isset($_GET['insert_shipment'])){
			include("insert_shipment.php");
		}

			if(isset($_GET['delete_shipment'])){
			include("delete_shipment.php");
		}

			if(isset($_GET['edit_shipment'])){
			include("edit_shipment.php");
		}

			if(isset($_GET['view_shipment'])){
			include("view_shipment.php");
		}

		////////
			if(isset($_GET['insert_slide'])){
			include("insert_slide.php");
		}


			if(isset($_GET['view_slides'])){
			include("view_slides.php");
		}

			if(isset($_GET['delete_slide'])){
			include("delete_slide.php");
		}


			if(isset($_GET['edit_slide'])){
			include("edit_slide.php");
		}

		//To get customers record
			if(isset($_GET['view_customers'])){
			include("view_customers.php");
		}

			if(isset($_GET['delete_customers'])){
			include("delete_customers.php");
		}

		//To get orders record
			if(isset($_GET['view_orders'])){
			include("view_orders.php");
		}

			if(isset($_GET['delete_orders'])){
			include("delete_orders.php");
		}

		//To get payments record
			if(isset($_GET['view_payments'])){
			include("view_payments.php");
		}

			if(isset($_GET['delete_payments'])){
			include("delete_payments.php");
		}

		//To get admins record
			if(isset($_GET['insert_admin'])){
			include("insert_admin.php");
		}

			if(isset($_GET['view_admin'])){
			include("view_admin.php");
		}
		
			if(isset($_GET['delete_admin'])){
			include("delete_admin.php");
		}

			if(isset($_GET['admin_profile'])){
			include("admin_profile.php");
		}

		//////
			if(isset($_GET['insert_box'])){
			include("insert_box.php");
		}

			if(isset($_GET['view_boxes'])){
			include("view_boxes.php");
		}

			if(isset($_GET['delete_box'])){
			include("delete_box.php");
		}

			if(isset($_GET['edit_box'])){
			include("edit_box.php");
		}

		//To get terms & conditions record
			if(isset($_GET['edit_terms'])){
			include("edit_terms.php");
		}

		//To get css record
			if(isset($_GET['edit_css'])){
			include("edit_css.php");
		}

		//To get customer feedbacks record
			if(isset($_GET['view_feedbacks'])){
			include("view_feedbacks.php");
		}

			if(isset($_GET['delete_feedbacks'])){
			include("delete_feedbacks.php");
		}

		//To get report record
			if(isset($_GET['view_reports'])){
			include("view_reports.php");
		}
		
			if(isset($_GET['sales_order'])){
			include("sales_order.php");
		}
		
			if(isset($_GET['cust_details'])){
			include("cust_details.php");
		}
		
			if(isset($_GET['p_cat'])){
			include("p_cat.php");
		}

			if(isset($_GET['inv_details'])){
			include("inv_details.php");
		}
		
			if(isset($_GET['inv_balance'])){
			include("inv_balance.php");
		}
		
			if(isset($_GET['orders'])){
			include("orders.php");
		}
		
			if(isset($_GET['good_feedback'])){
			include("good_feedback.php");
		}
		
			if(isset($_GET['bad_feedback'])){
			include("bad_feedback.php");
		}
		
			if(isset($_GET['shipping'])){
			include("shipping.php");
		}
		
			if(isset($_GET['admin'])){
			include("admin.php");
		}
		
			if(isset($_GET['most_preferred_product'])){
			include("most_preferred_product.php");
		}	
		
			if(isset($_GET['coupons'])){
			include("coupons.php");
		}	
		
			if(isset($_GET['least_preferred_product'])){
			include("least_preferred_product.php");
		}


		//To get coupons record
			if(isset($_GET['insert_coupons'])){
			include("insert_coupons.php");
		}

			if(isset($_GET['view_coupons'])){
			include("view_coupons.php");
		}

			if(isset($_GET['delete_coupons'])){
			include("delete_coupons.php");
		}


			if(isset($_GET['edit_coupons'])){
			include("edit_coupons.php");
		}

		//To get icon record
			if(isset($_GET['insert_icon'])){
			include("insert_icon.php");
		}


			if(isset($_GET['view_icons'])){
			include("view_icons.php");
		}

			if(isset($_GET['delete_icon'])){
			include("delete_icon.php");
		}

			if(isset($_GET['edit_icon'])){
			include("edit_icon.php");
		}
		
		//To get sliders record
			if(isset($_GET['edit_sliders'])){
			include("edit_sliders.php");
		}

		//To get contact us record
			if(isset($_GET['edit_contact_us'])){
			include("edit_contact_us.php");
		}

		//To get about us record
			if(isset($_GET['edit_about_us'])){
			include("edit_about_us.php");
		}

		//To get delivery & shipping record
			if(isset($_GET['edit_delivery'])){
			include("edit_delivery.php");
		}
		
		//To get track your order record
			if(isset($_GET['edit_track_order'])){
			include("edit_track_order.php");
		}
		
		//To get carrier record
			if(isset($_GET['insert_carrier'])){
			include("insert_carrier.php");
		}

			if(isset($_GET['delete_carrier'])){
			include("delete_carrier.php");
		}


			if(isset($_GET['edit_carrier'])){
			include("edit_carrier.php");
		}
		
			if(isset($_GET['view_carrier'])){
			include("view_carrier.php");
		}
		
		//To get faqs record
			if(isset($_GET['edit_faqs'])){
			include("edit_faqs.php");
		}
?>

			</div>

		</div>

	</div>

	<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>

<?php 
	} 
?>