<center><!-- center Starts -->
	<h1> My Wishlist </h1>
		<p class="lead"> Your all wishlist products in one place! </p>
</center><!-- center Ends -->

<hr>

<!-- To create table -->
<div class="table-responsive"><!-- table-responsive Starts -->
	<table class="table table-bordered table-hover"><!-- table table-bordered table-hover Starts -->
		<thead>

			<tr>

				<th> No. </th>
				<th> Wishlist Products </th>
				<th> Delete Wishlist </th>

			</tr>
			
		</thead>

<tbody>

<?php
	$cust_session = $_SESSION['cust_email'];
	$get_customer = "select * from customers where cust_email='$cust_session'";
	$run_customer = mysqli_query($con,$get_customer);
	$row_customer = mysqli_fetch_array($run_customer);

	$cust_id = $row_customer['cust_id'];
	$i = 0;

	$get_wishlist = "select * from wishlist where cust_id='$cust_id'";
	$run_wishlist = mysqli_query($con,$get_wishlist);
		while($row_wishlist = mysqli_fetch_array($run_wishlist)){

	$wishlist_id = $row_wishlist['wishlist_id'];
	$product_id = $row_wishlist['product_id'];

	$get_products = "select * from products where product_id='$product_id'";
	$run_products = mysqli_query($con,$get_products);
	$row_products = mysqli_fetch_array($run_products);

	$product_title = $row_products['product_title'];
	$product_url = $row_products['product_url'];
	$product_img1 = $row_products['product_img1'];
	$i++;
?>

	<tr>

		<td width="100"> <?php echo $i; ?> </td>

		<td>
			<img src="../admin/product_images/<?php echo $product_img1; ?>" width="60" height="60">
				&nbsp;&nbsp;&nbsp; 
					<a href="../<?php echo $product_url; ?>">
						<?php echo $product_title; ?>
					</a>
		</td>

		<td>
			<a href="my_account.php?delete_wishlist=<?php echo $wishlist_id; ?>" class="btn btn-primary">
				<i class="fa fa-trash-o"> </i> Delete
			</a>
		</td>

	</tr>

<?php 
	} 
?>

		</tbody>
	</table><!-- table table-bordered table-hover Ends -->
</div><!-- table-responsive Ends -->