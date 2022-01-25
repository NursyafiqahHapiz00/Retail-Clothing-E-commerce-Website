<?php

	session_start();

	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");

?>

<br><br>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-9" id="cart" ><!-- col-md-9 Starts -->
			<div class="box" ><!-- box Starts -->

			<!-- To create form shopping cart -->
			<form action="cart.php" method="post" enctype="multipart-form-data" ><!-- form Starts -->
				<h1> Shopping Cart </h1>

				<?php
					$ip_add = getRealUserIp();
					$select_cart = "select * from cart where ip_add='$ip_add'";
					$run_cart = mysqli_query($con,$select_cart);
					$count = mysqli_num_rows($run_cart);
				?>

				<!-- To create table -->
				<p class="text-muted" > You currently have <?php echo $count; ?> item(s) in your cart. </p>
					<div class="table-responsive" ><!-- table-responsive Starts -->
						<table class="table" ><!-- table Starts -->

				<thead><!-- thead Starts -->

					<tr>

						<th colspan="2" >Product</th>
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Variation</th>
						<th> Subtotal </th>
						<th >Delete</th>

					</tr>

				</thead><!-- thead Ends -->
			
				<tbody><!-- tbody Starts -->

				<?php
					$total_before = 0;
					$carrier_rate = "0.00";
					$coupon_price = "0.00";
						while($row_cart = mysqli_fetch_array($run_cart)){

						$pro_id = $row_cart['p_id'];
						$pro_size = $row_cart['p_variations_id'];
						$pro_qty = $row_cart['order_qty'];
						$carrier_rate = $row_cart['carrier_id'];
						$only_price = $row_cart['p_price'];

						$get_p_variations = "select * from product_variations where p_variations_id='$pro_size'";
						$run_p_variations = mysqli_query($con,$get_p_variations);
						$row_p_variations = mysqli_fetch_array($run_p_variations);

						$product_variations = $row_p_variations['product_variations'];
						$product_size = $row_p_variations['product_size'];

						$get_carrier = "select * from carrier where carrier_id='$carrier_rate'";
						$run_carrier = mysqli_query($con,$get_carrier);
						$row_carrier = mysqli_fetch_array($run_carrier);

						$carrier_name = $row_carrier['carrier_name'];
						$carrier_rate = $row_carrier['carrier_rate'];

						$get_products = "select * from products where product_id='$pro_id'";
						$run_products = mysqli_query($con,$get_products);
							while($row_products = mysqli_fetch_array($run_products)){

						$product_title = $row_products['product_title'];
						$product_img1 = $row_products['product_img1'];
						$sub_total = $only_price*$pro_qty; //to calculate subtotal order

						$_SESSION['pro_qty'] = $pro_qty;
						$total_before += $sub_total;

				?>

					<tr><!-- tr Starts -->

						<td>
							<img src="admin/product_images/<?php echo $product_img1; ?>" >
						</td>

						<td>
							<a href="#" > <?php echo $product_title; ?> </a>
						</td>

						<td>
							<input type="text" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">
						</td>

						<td>
							RM<?php echo $only_price; ?>
						</td>

						<td>
							<?php echo $product_variations;?> <?php echo ""?> <?php echo $product_size; ?>
						</td>

						<td>
							RM<?php echo $sub_total; ?>.00
						</td>

						<td>
							<a href="cart.php?delete_cart=<?php echo $pro_id; ?>" class="btn btn-primary">
								<i class="fa fa-trash-o"> </i>
							</a>
						</td>

					</tr><!-- tr Ends -->

				<?php 
							} 
						} 
				?>
				</tbody><!-- tbody Ends -->
				
				<!-- To create total column -->
				<tfoot><!-- tfoot Starts -->

					<tr>
						<th colspan="5"> Total </th>
						<th colspan="2"> RM<?php echo $total_before; ?>.00 </th>
					</tr>

				</tfoot><!-- tfoot Ends -->
			</table><!-- table Ends -->

			<!-- To create coupon and carrier -->
			<div class="form-inline pull-right"><!-- form-inline pull-right Starts -->
				<div class="form-group"><!-- form-group Starts -->
					<label style="width:100px; display:inline-block;">Coupon Code : </label>
						<input type="text" name="code" class="form-control">
				</div><!-- form-group Ends -->
					<input class="btn btn-primary" type="submit" name="apply_coupon" value="Apply Coupon Code" >

				<br><br>			

			</div><!-- form-inline pull-right Ends -->
		</div><!-- table-responsive Ends -->

		<!-- To create button continue shopping, update cart and proceed checkout -->
		<div class="box-footer"><!-- box-footer Starts -->
			<div class="pull-left"><!-- pull-left Starts -->
				<a href="index.php" class="btn btn-default">
					<i class="fa fa-chevron-left"></i> Continue Shopping
				</a>
			</div><!-- pull-left Ends -->

			<div class="pull-right"><!-- pull-right Starts -->

				<button class="btn btn-info" type="submit" name="update" value="Update Cart" style="background-color:#ffd0cf; border-color:black; color:black;">
				<i class="fa fa-refresh"></i> Update Cart
				</button>

				<a href="checkout.php" class="btn btn-success" style="background-color:#ff9999; border-color:black; color:black;">
				Proceed to Checkout <i class="fa fa-chevron-right"></i>
				</a>

			</div><!-- pull-right Ends -->
		</div><!-- box-footer Ends -->
	</form><!-- form Ends -->
</div><!-- box Ends -->

<!-- To create delete cart function -->
	<?php
		if(isset($_GET['delete_cart'])){
			$delete_id = $_GET['delete_cart'];
			$delete_product = "delete from cart where p_id='$delete_id'";
			$run_delete = mysqli_query($con,$delete_product);

			if($run_delete){
				echo "<script>window.open('cart.php','_self')</script>";
				}
		}
	?>

	<!-- To create function update cart -->
	<?php
		function update_cart(){
		global $con;

			if(isset($_POST['update'])){
				foreach($_POST['remove'] as $remove_id){
					$delete_product = "delete from cart where p_id='$remove_id'";
					$run_delete = mysqli_query($con,$delete_product);

					if($run_delete){
						echo "<script>window.open('cart.php','_self')</script>";
					}
				}
			}
		}

		echo @$up_cart = update_cart();
	?>

</div><!-- col-md-9 Ends -->

		<!-- To create order summary -->
		<div class="col-md-3"><!-- col-md-3 Starts -->
			<div class="box" id="order-summary"><!-- box Starts -->
				<div class="box-header"><!-- box-header Starts -->
					<h3>Order Summary</h3>
				</div><!-- box-header Ends -->

					<div class="table-responsive"><!-- table-responsive Starts -->
						<table class="table"><!-- table Starts -->
							<tbody><!-- tbody Starts -->

								<tr>
									<td> Order Subtotal </td>
										<th> RM<?php echo $total_before; ?>.00 </th>
								</tr>

								<tr>
									<td> Postage </td>
										<th>RM<?php echo $carrier_rate; ?></th>
								</tr>

								<tr>
									<!-- To create coupon function -->
									<?php
										if(isset($_POST['apply_coupon'])){
											$code = $_POST['code'];

											if($code == ""){
											}

												else{

												$get_coupons = "select * from coupons where coupon_code='$code' && product_id='$pro_id'";
												$run_coupons = mysqli_query($con,$get_coupons);
												$check_coupons = mysqli_num_rows($run_coupons);

											if($check_coupons == 1){

												$row_coupons = mysqli_fetch_array($run_coupons);
												$coupon_pro = $row_coupons['product_id'];
												$coupon_price = $row_coupons['coupon_price'];
												$coupon_limit = $row_coupons['coupon_limit'];
												$coupon_used = $row_coupons['coupon_used'];

												if($coupon_used < $coupon_limit){
													$add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";
													$run_used = mysqli_query($con,$add_used);
													echo "<script>alert('Your Coupon Code Has Been Applied')</script>";													
												}

												else  {
													echo "<script>alert('Your Coupon Code Has Been Expired')</script>";
													echo "<script>window.open('cart.php','_self')</script>";
												}
											}

												else{

													echo "<script> alert('Your Coupon Code Is Not Valid') </script>";
												}
											}
										}
									?>
									
									<td>Discount</td>
										<th>RM <?php echo $coupon_price; ?></th>
								</tr>

								<tr class="total">
									<td>Total</td>
										<th>RM<?php 
										$total = $total_before + $carrier_rate - $coupon_price;
										echo round($total, 2); ?></th>
								</tr>

						</tbody><!-- tbody Ends -->
					</table><!-- table Ends -->
				</div><!-- table-responsive Ends -->
			</div><!-- box Ends -->
		</div><!-- col-md-3 Ends -->
	</div><!-- container Ends -->
</div><!-- content Ends -->

	<?php
		include("includes/footer.php");
	?>

	<script src="js/jquery.min.js"> </script>
		<script src="js/bootstrap.min.js"></script>

	<script>
		$(document).ready(function(data){
			$(document).on('keyup', '.quantity', function(){

			var id = $(this).data("product_id");
			var quantity = $(this).val();

				if(quantity  != ''){

					$.ajax({
					url:"change.php",
					method:"POST",
					data:{id:id, quantity:quantity},

						success:function(data){
							$("body").load('cart_body.php');
						}
					});
				}
			});
		});
	</script>

	</body>
</html>
