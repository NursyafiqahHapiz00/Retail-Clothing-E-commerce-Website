<br><br>

<div class="box"><!-- box Starts -->

<?php
	$session_email = $_SESSION['cust_email'];
	$select_customer = "select * from customers where cust_email='$session_email'";
	$run_customer = mysqli_query($con,$select_customer);
	$row_customer = mysqli_fetch_array($run_customer);

	$cust_id = $row_customer['cust_id'];
?>


<br>
<?php //to make the text between the horizontal line ?>
				
<div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
<span style="font-size: 32px; background-color: #ffd0cf; padding: 0 5px;">
<b>Check Out</b>
</span>
</div>
<br><br>

	<p class="lead text-center">
		1. Online payment
	</p>

<center><p>
<a href="https://www.maybank2u.com.my/home/m2u/common/login.do" target="_blank"><img src="payment/maybank2u.png" alt="Maybank2u"></a>
<a href="https://www.cimbclicks.com.my/clicks/#/" target="_blank"><img src="payment/cimbclicks.png" alt="CimbClicks"></a>
<a href="https://www2.irakyat.com.my/personal/login/login.do?step1=" target="_blank"><img src="payment/irakyat.png" alt="IRakyat"></a>
</p>

<p>
<a href="https://www.mybsn.com.my/mybsn/login/login.do" target="_blank"><img src="payment/bsn.png" alt="BSN"></a>
<a href="https://www.i-muamalat.com.my/rib/index.do" target="_blank"><img src="payment/imuamalat.png" alt="IMuamalat"></a>
<a href="https://www.bankislam.biz/" target="_blank"><img src="payment/bankislam.png" alt="Bank Islam"></a>
</p>
</center>



	<p class="lead text-center">
		<a href="order.php?cust_id=<?php echo $cust_id;?>">2. Confirm payment</a>
	</p>

	<center><!-- center Starts -->

<?php
	$i = 0;
	$ip_add = getRealUserIp();

	$get_cart = "select * from cart where ip_add='$ip_add'";
	$run_cart = mysqli_query($con,$get_cart);
		while($row_cart = mysqli_fetch_array($run_cart)){

	$pro_id = $row_cart['p_id'];
	$pro_qty = $row_cart['order_qty'];
	$carrier_id = $row_cart['carrier_id'];
	//$pro_price = $row_cart['p_price'];

	$get_products = "select * from products where product_id='$pro_id'";
	$run_products = mysqli_query($con,$get_products);
	$row_products = mysqli_fetch_array($run_products);

	$product_title = $row_products['product_title'];

	$get_carrier = "select * from carrier where carrier_id='$carrier_id'";
	$run_carrier = mysqli_query($con,$get_carrier);
	$row_carrier = mysqli_fetch_array($run_carrier);

	$carrier_id = $row_carrier['carrier_id'];
	$carrier_name = $row_carrier['carrier_name'];
	$carrier_rate = $row_carrier['carrier_rate'];
	$i++;
?>


<input type="hidden" name="product_title<?php echo $i; ?>" value="<?php echo $product_title; ?>" >
<input type="hidden" name="item_number_<?php echo $i; ?>" value="<?php echo $i; ?>" >
<input type="hidden" name="amount_<?php echo $i; ?>" value="<?php echo $pro_price; ?>" >
<input type="hidden" name="quantity_<?php echo $i; ?>" value="<?php echo $pro_qty; ?>" >

<?php 
	}
?>




<br>


		</form><!-- form Ends -->
	</center><!-- center Ends -->
</div><!-- box Ends -->
