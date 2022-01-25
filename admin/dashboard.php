<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<div class="row"><!-- Row 1 Starts -->
	<div class="col-lg-12">
		<!-- <h1 class="page-header">Dashboard</h1> -->
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-tasks fa-5x"> </i>
					</div>

	<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
		<div class="huge"> <?php echo $count_products; ?> </div>
		<div>Products</div>
		
		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

	<a href="index.php?view_products">
		<div class="panel-footer"><!-- panel-footer Starts -->
			<span class="pull-left"> View Details </span>
			<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

				<div class="clearfix"></div>
			</div><!-- panel-footer Ends -->
		</a>
	</div><!-- panel panel-primary Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
	<div class="panel panel-green"><!-- panel panel-green Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<div class="row"><!-- panel-heading row Starts -->
				<div class="col-xs-3"><!-- col-xs-3 Starts -->
					<i class="fa fa-comments fa-5x"> </i>
</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
	<div class="huge"> <?php echo $count_cust; ?> </div>
		<div>Customers</div>
		
		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

	<a href="index.php?view_customers">
		<div class="panel-footer"><!-- panel-footer Starts -->
			<span class="pull-left"> View Details </span>
			<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
				<div class="clearfix"></div>

			</div><!-- panel-footer Ends -->
		</a>
	</div><!-- panel panel-green Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
	<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<div class="row"><!-- panel-heading row Starts -->
				<div class="col-xs-3"><!-- col-xs-3 Starts -->
					<i class="fa fa-shopping-cart fa-5x"> </i>
</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
	<div class="huge"> <?php echo $count_p_categories; ?> </div>
		<div>Products Categories</div>

		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

<a href="index.php?view_p_cat">
	<div class="panel-footer"><!-- panel-footer Starts -->
		<span class="pull-left"> View Details </span>
		<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
			<div class="clearfix"></div>

			</div><!-- panel-footer Ends -->
		</a>
	</div><!-- panel panel-yellow Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
	<div class="panel panel-red"><!-- panel panel-red Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<div class="row"><!-- panel-heading row Starts -->
				<div class="col-xs-3"><!-- col-xs-3 Starts -->
					<i class="fa fa-support fa-5x"> </i>
			</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
	<div class="huge"> <?php echo $count_total_orders; ?> </div>
		<div>Orders</div>

		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

	<a href="index.php?view_orders">
		<div class="panel-footer"><!-- panel-footer Starts -->
			<span class="pull-left"> View Details </span>
			<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
				<div class="clearfix"></div>

				</div><!-- panel-footer Ends -->
			</a>
		</div><!-- panel panel-red Ends -->
	</div><!-- col-lg-3 col-md-6 Ends -->
</div><!-- 2 row Ends -->

<div class="row">
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
        <div class="panel panel-success"><!-- panel panel-red Starts -->   
			<div class="panel-heading"><!-- panel-heading Starts -->      
				<div class="row"><!-- panel-heading row Starts -->        
					<div class="col-xs-3"><!-- col-xs-3 Starts -->      
						<i class="fa fa-dollar fa-5x"> </i>       
					</div><!-- col-xs-3 Ends -->    
					
		<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->     
			<div class="huge"> <?php echo $count_total_earnings ?> </div>     
		<div>Earnings</div>
       
				</div><!-- col-xs-9 text-right Ends -->       
			</div><!-- panel-heading row Ends -->       
        </div><!-- panel-heading Ends -->
        
        <a href="index.php?view_orders"> 
			<div class="panel-footer"><!-- panel-footer Starts -->       
				<span class="pull-left"> View Details </span>       
				<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>      
					<div class="clearfix"></div>
        
					</div><!-- panel-footer Ends -->
				</a>      
			</div><!-- panel panel-red Ends -->        
        </div><!-- col-lg-3 col-md-6 Ends -->

        <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-warning"><!-- panel panel-red Starts -->          
				<div class="panel-heading"><!-- panel-heading Starts -->          
					<div class="row"><!-- panel-heading row Starts -->        
						<div class="col-xs-3"><!-- col-xs-3 Starts -->           
							<i class="fa fa-spinner fa-5x"> </i>           
        </div><!-- col-xs-3 Ends -->
            
            <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->         
				<div class="huge"> <?php echo $count_pending_orders ?> </div>           
					<div>Pending Orders</div>
			
				</div><!-- col-xs-9 text-right Ends -->          
				</div><!-- panel-heading row Ends -->          
            </div><!-- panel-heading Ends -->
            
            <a href="index.php?view_orders">           
				<div class="panel-footer"><!-- panel-footer Starts -->           
					<span class="pull-left"> View Details </span>            
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>           
						<div class="clearfix"></div>
            
						</div><!-- panel-footer Ends -->           
					</a>          
				</div><!-- panel panel-red Ends -->            
            </div><!-- col-lg-3 col-md-6 Ends -->

            <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
                <div class="panel panel-info"><!-- panel panel-red Starts -->               
					<div class="panel-heading"><!-- panel-heading Starts -->              
						<div class="row"><!-- panel-heading row Starts -->               
							<div class="col-xs-3"><!-- col-xs-3 Starts -->               
								<i class="fa fa-check fa-5x"> </i>               
							</div><!-- col-xs-3 Ends -->
                
                <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->               
					<div class="huge"> <?php echo $count_completed_orders ?> </div>               
						<div>Completed Orders</div>
                
						</div><!-- col-xs-9 text-right Ends -->               
					</div><!-- panel-heading row Ends -->               
                </div><!-- panel-heading Ends -->
                
                <a href="index.php?view_orders">            
					<div class="panel-footer"><!-- panel-footer Starts -->               
						<span class="pull-left"> View Details </span>               
						<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>             
							<div class="clearfix"></div>
                
							</div><!-- panel-footer Ends -->              
						</a>                
					</div><!-- panel panel-red Ends -->                
                </div><!-- col-lg-3 col-md-6 Ends -->

                <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
                    <div class="panel panel-danger"><!-- panel panel-red Starts -->                 
						<div class="panel-heading"><!-- panel-heading Starts -->                  
							<div class="row"><!-- panel-heading row Starts -->                 
								<div class="col-xs-3"><!-- col-xs-3 Starts -->                 
									<i class="fa fa-percent fa-5x"> </i>                  
                </div><!-- col-xs-3 Ends -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->                  
						<div class="huge"> <?php echo $count_coupons; ?> </div>                   
							<div>Total Coupons</div>
                    
							</div><!-- col-xs-9 text-right Ends -->                 
						</div><!-- panel-heading row Ends -->                 
                    </div><!-- panel-heading Ends -->
                    
                    <a href="index.php?view_orders">                  
						<div class="panel-footer"><!-- panel-footer Starts -->                   
							<span class="pull-left"> View Details </span>                   
							<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>                  
								<div class="clearfix"></div>
                    
							</div><!-- panel-footer Ends -->                  
							</a>                   
						</div><!-- panel panel-red Ends -->                   
                    </div><!-- col-lg-3 col-md-6 Ends -->
</div>
<br>

		<!-- To create stacked area sales line chart -->
	<div id="chartContainer1" style="height: 370px; width: 100%; display: inline-block;">
	<?php
		include ("includes/db.php");

		$query_1 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='01' and year(payment_date)='2021'";
		$result_1 = mysqli_query($con, $query_1);
		$row_1 = mysqli_fetch_assoc($result_1);
		$sum_1 = $row_1['value_sum'];
		
		$query_2 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='02' and year(payment_date)='2021'";
		$result_2 = mysqli_query($con, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);
		$sum_2 = $row_2['value_sum'];
		
		$query_3 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='03' and year(payment_date)='2021'";
		$result_3 = mysqli_query($con, $query_3);
		$row_3 = mysqli_fetch_assoc($result_3);
		$sum_3 = $row_3['value_sum'];
		
		$query_4 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='04' and year(payment_date)='2021'";
		$result_4 = mysqli_query($con, $query_4);
		$row_4 = mysqli_fetch_assoc($result_4);
		$sum_4 = $row_4['value_sum'];
		
		$query_5 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='05' and year(payment_date)='2021'";
		$result_5 = mysqli_query($con, $query_5);
		$row_5 = mysqli_fetch_assoc($result_5);
		$sum_5 = $row_5['value_sum'];
		
		$query_6 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='06' and year(payment_date)='2021'";
		$result_6 = mysqli_query($con, $query_6);
		$row_6 = mysqli_fetch_assoc($result_6);
		$sum_6 = $row_6['value_sum'];
		
		$query_7 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='07' and year(payment_date)='2021'";
		$result_7 = mysqli_query($con, $query_7);
		$row_7 = mysqli_fetch_assoc($result_7);
		$sum_7 = $row_7['value_sum'];
		
		$query_8 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='08' and year(payment_date)='2021'";
		$result_8 = mysqli_query($con, $query_8);
		$row_8 = mysqli_fetch_assoc($result_8);
		$sum_8 = $row_8['value_sum'];
		
		$query_9 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='09' and year(payment_date)='2021'";
		$result_9 = mysqli_query($con, $query_9);
		$row_9 = mysqli_fetch_assoc($result_9);
		$sum_9 = $row_9['value_sum'];
		
		$query_10 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='10' and year(payment_date)='2021'";
		$result_10 = mysqli_query($con, $query_10);
		$row_10 = mysqli_fetch_assoc($result_10);
		$sum_10 = $row_10['value_sum'];
		
		$query_11 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='11' and year(payment_date)='2021'";
		$result_11 = mysqli_query($con, $query_11);
		$row_11 = mysqli_fetch_assoc($result_11);
		$sum_11 = $row_11['value_sum'];
		
		$query_12 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='12' and year(payment_date)='2021'";
		$result_12 = mysqli_query($con, $query_12);
		$row_12 = mysqli_fetch_assoc($result_12);
		$sum_12 = $row_12['value_sum'];
		
	$dataPoints2021 = array(
		array("y" => $sum_1, "label" => "Jan"),
		array("y" => $sum_2, "label" => "Feb"),
		array("y" => $sum_3, "label" => "Mac"),
		array("y" => $sum_4, "label" => "Apr"),
		array("y" => $sum_5, "label" => "May"),
		array("y" => $sum_6, "label" => "June"),
		array("y" => $sum_7, "label" => "July"),
		array("y" => $sum_8, "label" => "Aug"),
		array("y" => $sum_9, "label" => "Sept"),
		array("y" => $sum_10, "label" => "Oct"),
		array("y" => $sum_11, "label" => "Nov"),
		array("y" => $sum_12, "label" => "Dec"),
	);

		$query_1 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='01' and year(payment_date)='2022'";
		$result_1 = mysqli_query($con, $query_1);
		$row_1 = mysqli_fetch_assoc($result_1);
		$sum_1 = $row_1['value_sum'];
		
		$query_2 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='02' and year(payment_date)='2022'";
		$result_2 = mysqli_query($con, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);
		$sum_2 = $row_2['value_sum'];
		
		$query_3 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='03' and year(payment_date)='2022'";
		$result_3 = mysqli_query($con, $query_3);
		$row_3 = mysqli_fetch_assoc($result_3);
		$sum_3 = $row_3['value_sum'];
		
		$query_4 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='04' and year(payment_date)='2022'";
		$result_4 = mysqli_query($con, $query_4);
		$row_4 = mysqli_fetch_assoc($result_4);
		$sum_4 = $row_4['value_sum'];
		
		$query_5 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='05' and year(payment_date)='2022'";
		$result_5 = mysqli_query($con, $query_5);
		$row_5 = mysqli_fetch_assoc($result_5);
		$sum_5 = $row_5['value_sum'];
		
		$query_6 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='06' and year(payment_date)='2022'";
		$result_6 = mysqli_query($con, $query_6);
		$row_6 = mysqli_fetch_assoc($result_6);
		$sum_6 = $row_6['value_sum'];
		
		$query_7 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='07' and year(payment_date)='2022'";
		$result_7 = mysqli_query($con, $query_7);
		$row_7 = mysqli_fetch_assoc($result_7);
		$sum_7 = $row_7['value_sum'];
		
		$query_8 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='08' and year(payment_date)='2022'";
		$result_8 = mysqli_query($con, $query_8);
		$row_8 = mysqli_fetch_assoc($result_8);
		$sum_8 = $row_8['value_sum'];
		
		$query_9 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='09' and year(payment_date)='2022'";
		$result_9 = mysqli_query($con, $query_9);
		$row_9 = mysqli_fetch_assoc($result_9);
		$sum_9 = $row_9['value_sum'];
		
		$query_10 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='10' and year(payment_date)='2022'";
		$result_10 = mysqli_query($con, $query_10);
		$row_10 = mysqli_fetch_assoc($result_10);
		$sum_10 = $row_10['value_sum'];
		
		$query_11 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='11' and year(payment_date)='2022'";
		$result_11 = mysqli_query($con, $query_11);
		$row_11 = mysqli_fetch_assoc($result_11);
		$sum_11 = $row_11['value_sum'];
		
		$query_12 = "select SUM(amount) as value_sum FROM payments where month(payment_date)='12' and year(payment_date)='2022'";
		$result_12 = mysqli_query($con, $query_12);
		$row_12 = mysqli_fetch_assoc($result_12);
		$sum_12 = $row_12['value_sum'];
		
	$dataPoints2022 = array(
		array("y" => $sum_1, "label" => "Jan"),
		array("y" => $sum_2, "label" => "Feb"),
		array("y" => $sum_3, "label" => "Mac"),
		array("y" => $sum_4, "label" => "Apr"),
		array("y" => $sum_5, "label" => "May"),
		array("y" => $sum_6, "label" => "June"),
		array("y" => $sum_7, "label" => "July"),
		array("y" => $sum_8, "label" => "Aug"),
		array("y" => $sum_9, "label" => "Sept"),
		array("y" => $sum_10, "label" => "Oct"),
		array("y" => $sum_11, "label" => "Nov"),
		array("y" => $sum_12, "label" => "Dec"),
	);
?>
		</div>

	<!--To create bar chart orders chart -->
	<div id="chartContainer2" style="height: 370px; width: 100%; display: inline-block;">
	<?php
		include ("includes/db.php");

		$query_1 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='01' and year(order_date)='2021'";
		$result_1 = mysqli_query($con, $query_1);
		$row_1 = mysqli_fetch_assoc($result_1);
		$sum_1 = $row_1['value_sum'];
		
		$query_2 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='02' and year(order_date)='2021'";
		$result_2 = mysqli_query($con, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);
		$sum_2 = $row_2['value_sum'];
		
		$query_3 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='03' and year(order_date)='2021'";
		$result_3 = mysqli_query($con, $query_3);
		$row_3 = mysqli_fetch_assoc($result_3);
		$sum_3 = $row_3['value_sum'];
		
		$query_4 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='04' and year(order_date)='2021'";
		$result_4 = mysqli_query($con, $query_4);
		$row_4 = mysqli_fetch_assoc($result_4);
		$sum_4 = $row_4['value_sum'];
		
		$query_5 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='05' and year(order_date)='2021'";
		$result_5 = mysqli_query($con, $query_5);
		$row_5 = mysqli_fetch_assoc($result_5);
		$sum_5 = $row_5['value_sum'];
		
		$query_6 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='06' and year(order_date)='2021'";
		$result_6 = mysqli_query($con, $query_6);
		$row_6 = mysqli_fetch_assoc($result_6);
		$sum_6 = $row_6['value_sum'];
		
		$query_7 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='07' and year(order_date)='2021'";
		$result_7 = mysqli_query($con, $query_7);
		$row_7 = mysqli_fetch_assoc($result_7);
		$sum_7 = $row_7['value_sum'];
		
		$query_8 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='08' and year(order_date)='2021'";
		$result_8 = mysqli_query($con, $query_8);
		$row_8 = mysqli_fetch_assoc($result_8);
		$sum_8 = $row_8['value_sum'];
		
		$query_9 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='09' and year(order_date)='2021'";
		$result_9 = mysqli_query($con, $query_9);
		$row_9 = mysqli_fetch_assoc($result_9);
		$sum_9 = $row_9['value_sum'];
		
		$query_10 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='10' and year(order_date)='2021'";
		$result_10 = mysqli_query($con, $query_10);
		$row_10 = mysqli_fetch_assoc($result_10);
		$sum_10 = $row_10['value_sum'];
		
		$query_11 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='11' and year(order_date)='2021'";
		$result_11 = mysqli_query($con, $query_11);
		$row_11 = mysqli_fetch_assoc($result_11);
		$sum_11 = $row_11['value_sum'];
		
		$query_12 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='12' and year(order_date)='2021'";
		$result_12 = mysqli_query($con, $query_12);
		$row_12 = mysqli_fetch_assoc($result_12);
		$sum_12 = $row_12['value_sum'];
		
	$dataPointsorder2021 = array(
		array("y" => $sum_1, "label" => "Jan"),
		array("y" => $sum_2, "label" => "Feb"),
		array("y" => $sum_3, "label" => "Mac"),
		array("y" => $sum_4, "label" => "Apr"),
		array("y" => $sum_5, "label" => "May"),
		array("y" => $sum_6, "label" => "June"),
		array("y" => $sum_7, "label" => "July"),
		array("y" => $sum_8, "label" => "Aug"),
		array("y" => $sum_9, "label" => "Sept"),
		array("y" => $sum_10, "label" => "Oct"),
		array("y" => $sum_11, "label" => "Nov"),
		array("y" => $sum_12, "label" => "Dec"),
	);

		$query_1 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='01' and year(order_date)='2022'";
		$result_1 = mysqli_query($con, $query_1);
		$row_1 = mysqli_fetch_assoc($result_1);
		$sum_1 = $row_1['value_sum'];
		
		$query_2 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='02' and year(order_date)='2022'";
		$result_2 = mysqli_query($con, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);
		$sum_2 = $row_2['value_sum'];
		
		$query_3 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='03' and year(order_date)='2022'";
		$result_3 = mysqli_query($con, $query_3);
		$row_3 = mysqli_fetch_assoc($result_3);
		$sum_3 = $row_3['value_sum'];
		
		$query_4 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='04' and year(order_date)='2022'";
		$result_4 = mysqli_query($con, $query_4);
		$row_4 = mysqli_fetch_assoc($result_4);
		$sum_4 = $row_4['value_sum'];
		
		$query_5 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='05' and year(order_date)='2022'";
		$result_5 = mysqli_query($con, $query_5);
		$row_5 = mysqli_fetch_assoc($result_5);
		$sum_5 = $row_5['value_sum'];
		
		$query_6 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='06' and year(order_date)='2022'";
		$result_6 = mysqli_query($con, $query_6);
		$row_6 = mysqli_fetch_assoc($result_6);
		$sum_6 = $row_6['value_sum'];
		
		$query_7 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='07' and year(order_date)='2022'";
		$result_7 = mysqli_query($con, $query_7);
		$row_7 = mysqli_fetch_assoc($result_7);
		$sum_7 = $row_7['value_sum'];
		
		$query_8 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='08' and year(order_date)='2022'";
		$result_8 = mysqli_query($con, $query_8);
		$row_8 = mysqli_fetch_assoc($result_8);
		$sum_8 = $row_8['value_sum'];
		
		$query_9 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='09' and year(order_date)='2022'";
		$result_9 = mysqli_query($con, $query_9);
		$row_9 = mysqli_fetch_assoc($result_9);
		$sum_9 = $row_9['value_sum'];
		
		$query_10 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='10' and year(order_date)='2022'";
		$result_10 = mysqli_query($con, $query_10);
		$row_10 = mysqli_fetch_assoc($result_10);
		$sum_10 = $row_10['value_sum'];
		
		$query_11 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='11' and year(order_date)='2022'";
		$result_11 = mysqli_query($con, $query_11);
		$row_11 = mysqli_fetch_assoc($result_11);
		$sum_11 = $row_11['value_sum'];
		
		$query_12 = "select count(order_id) as value_sum FROM cust_orders where month(order_date)='12' and year(order_date)='2022'";
		$result_12 = mysqli_query($con, $query_12);
		$row_12 = mysqli_fetch_assoc($result_12);
		$sum_12 = $row_12['value_sum'];
		
	$dataPointsorder2022 = array(
		array("y" => $sum_1, "label" => "Jan"),
		array("y" => $sum_2, "label" => "Feb"),
		array("y" => $sum_3, "label" => "Mac"),
		array("y" => $sum_4, "label" => "Apr"),
		array("y" => $sum_5, "label" => "May"),
		array("y" => $sum_6, "label" => "June"),
		array("y" => $sum_7, "label" => "July"),
		array("y" => $sum_8, "label" => "Aug"),
		array("y" => $sum_9, "label" => "Sept"),
		array("y" => $sum_10, "label" => "Oct"),
		array("y" => $sum_11, "label" => "Nov"),
		array("y" => $sum_12, "label" => "Dec"),
	);

	?>
	</div>

	<script>
		window.onload = function () {
		
		var chart = new CanvasJS.Chart("chartContainer1", { 
			theme: "light2",
			title: {
				text: "Monthly Sales"
			},
			axisY: {
				title: "Total Sales Amount (RM)"
			},
			
			legend:{
				cursor: "pointer",
				itemclick: toggleDataSeries
			},
			toolTip: {
				shared: true
			},
			data: [{
				type: "stackedArea",
				name: "2021",
				showInLegend: true,
				visible: true,
				yValueFormatString: "RM ,##0",
				dataPoints: <?php echo json_encode($dataPoints2021, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "2022",
				showInLegend: true,
				yValueFormatString: "RM ,##0",
				dataPoints: <?php echo json_encode($dataPoints2022, JSON_NUMERIC_CHECK); ?>
			}]
		});
		
		chart.render();
		
		function toggleDataSeries(e){
			if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			}
			else{
				e.dataSeries.visible = true;
			}
			chart.render();
		}

		//To create orders chart
		
		var chart = new CanvasJS.Chart("chartContainer2", {
		animationEnabled: true,
		title:{
			text: "Monthly Sales Order"
			},
			axisY: {
				title: "Amount of Orders",
				includeZero: true,
			},
			data: [{
				type: "bar",
				yValueFormatString: "#,##0",
				indexLabel: "{y}",
				indexLabelPlacement: "inside",
				indexLabelFontWeight: "bolder",
				indexLabelFontColor: "white",
				dataPoints: <?php echo json_encode($dataPointsorder2021, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "bar",
				yValueFormatString: "#,##0",
				indexLabel: "{y}",
				indexLabelPlacement: "inside",
				indexLabelFontWeight: "bolder",
				indexLabelFontColor: "white",
				dataPoints: <?php echo json_encode($dataPointsorder2022, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();
		
		}
	</script>

	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
	<br><br>

<div class="row" ><!-- 3 row Starts -->
	<div class="col-lg-12" ><!-- col-lg-8 Starts -->
		<div class="panel panel-primary" ><!-- panel panel-primary Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-money fa-fw" ></i> New Orders
				</h3><!-- panel-title Ends -->
</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->
	<div class="table-responsive" ><!-- table-responsive Starts -->
		<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

	<thead><!-- thead Starts -->

		<tr>
		
			<th>No.</th>
			<th>Customer</th>
			<th>Invoice No</th>
			<th>Product ID</th>
			<th>Quantity</th>
			<th>Variation</th>
			<th>Size</th>
			<th>Status</th>

		</tr>

	</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php
	$i = 0;

	$get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
	$run_order = mysqli_query($con,$get_order);
		while($row_order=mysqli_fetch_array($run_order)){

	$order_id = $row_order['order_id'];
	$cust_id = $row_order['cust_id'];
	$invoice_no = $row_order['invoice_no'];
	$product_id = $row_order['product_id'];
	$p_variations_id = $row_order['p_variations_id'];
	$order_qty = $row_order['order_qty'];
	$order_status = $row_order['order_status'];

	$get_p_variations = "select * from product_variations where p_variations_id='$p_variations_id'";
	$run_p_variations = mysqli_query($con,$get_p_variations);
	$row_p_variations = mysqli_fetch_array($run_p_variations);
	$product_variations = $row_p_variations['product_variations'];
	$product_size = $row_p_variations['product_size'];
	$i++;
?>

	<tr>

		<td><?php echo $i; ?></td>

		<td>
		<?php
			$get_customer = "select * from customers where cust_id='$cust_id'";
			$run_customer = mysqli_query($con,$get_customer);
			$row_customer = mysqli_fetch_array($run_customer);

			$cust_email = $row_customer['cust_email'];

				echo $cust_email;
			?>
		</td>

		<td><?php echo $invoice_no; ?></td>
		<td><?php echo $product_id; ?></td>
		<td><?php echo $order_qty; ?></td>
		<td><?php echo $product_variations; ?></td>
		<td><?php echo $product_size; ?></td>

		<td>
			<?php
			if($order_status=='pending'){
			echo $order_status='pending';
			}

			else {
			echo $order_status='Complete';
			}
			?>
		</td>

</tr>

<?php 
	} 
?>

		</tbody><!-- tbody Ends -->
	</table><!-- table table-bordered table-hover table-striped Ends -->
</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->
	<a href="index.php?view_orders" >
		View All Orders <i class="fa fa-arrow-circle-right" ></i>
	</a>
</div><!-- text-right Ends -->

		</div><!-- panel-body Ends -->
	</div><!-- panel panel-primary Ends -->
</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->
<div class="panel"><!-- panel Starts -->

		</div><!-- panel Ends -->
	</div><!-- col-md-4 Ends -->
</div><!-- 3 row Ends -->

<?php 
	} 
?>