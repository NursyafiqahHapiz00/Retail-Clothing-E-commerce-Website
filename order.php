<?php


include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");

?>

<?php

if(isset($_GET['cust_id'])){

$customer_id = $_GET['cust_id'];

}

$ip_add = getRealUserIp();

$status = "pending";

$invoice_no = mt_rand();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['p_id'];

$pro_size = $row_cart['p_variations_id'];

$pro_qty = $row_cart['order_qty'];
$carrier_rate = $row_cart['carrier_id'];

$get_carrier = "select * from carrier where carrier_id='$carrier_rate'";
$run_carrier = mysqli_query($con,$get_carrier);
$row_carrier = mysqli_fetch_array($run_carrier);

$carrier_rate = $row_carrier['carrier_id'];
$carrier_name = $row_carrier['carrier_name'];

$sub_total = $row_cart['p_price']*$pro_qty;


$insert_customer_order = "insert into cust_orders (cust_id,order_amount,invoice_no,order_qty,p_variations_id,order_date,order_status, carrier_id) values ('$customer_id','$sub_total','$invoice_no','$pro_qty','$pro_size', NOW(),'$status','$carrier_rate')";

$run_customer_order = mysqli_query($con,$insert_customer_order);

$insert_pending_order = "insert into pending_orders (cust_id,invoice_no,product_id,order_qty,p_variations_id,order_status, carrier_id) values ('$customer_id','$invoice_no','$pro_id','$pro_qty','$pro_size','$status', '$carrier_rate')";

$run_pending_order = mysqli_query($con,$insert_pending_order);

$delete_cart = "delete from cart where ip_add='$ip_add'";

$run_delete = mysqli_query($con,$delete_cart);

echo "<script>alert('Your order has been submitted.Thanks! ')</script>";

echo "<script>window.open('customers/my_account.php?my_orders','_self')</script>";





}

?>
