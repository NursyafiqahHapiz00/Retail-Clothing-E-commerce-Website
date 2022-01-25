<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<?php


$product_id = @$_GET['pro_id'];

$get_product = "select * from products where product_url='$product_id'";

$run_product = mysqli_query($con,$get_product);

$check_product = mysqli_num_rows($run_product);

if($check_product == 0){

echo "<script> window.open('index.php','_self') </script>";

}
else{



$row_product = mysqli_fetch_array($run_product);

$p_cat_id = $row_product['p_cat_id'];

$pro_id = $row_product['product_id'];

$pro_title = $row_product['product_title'];

$pro_price = $row_product['product_price'];

$pro_desc = $row_product['product_desc'];

$pro_img1 = $row_product['product_img1'];

$pro_img2 = $row_product['product_img2'];

$pro_img3 = $row_product['product_img3'];

$pro_price = $row_product['product_price'];

$pro_features = $row_product['product_features'];

$pro_url = $row_product['product_url'];


$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];




?>

<br><br>

<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->





<div class="col-md-12"><!-- col-md-12 Starts -->

<div class="row" id="productMain"><!-- row Starts -->

<div class="col-sm-6"><!-- col-sm-6 Starts -->

<div id="mainImage"><!-- mainImage Starts -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

<ol class="carousel-indicators"><!-- carousel-indicators Starts -->

<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>

</ol><!-- carousel-indicators Ends -->

<div class="carousel-inner"><!-- carousel-inner Starts -->

<div class="item active">
<center>
<img src="admin/product_images/<?php echo $pro_img1; ?>" width="840" height="840" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin/product_images/<?php echo $pro_img2; ?>" width="840" height="840" class="img-responsive">
</center>
</div>

<div class="item">
<center>
<img src="admin/product_images/<?php echo $pro_img3; ?>" width="840" height="840" class="img-responsive">
</center>
</div>

</div><!-- carousel-inner Ends -->

<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-left"> </span>

<span class="sr-only"> Previous </span>

</a><!-- left carousel-control Ends -->

<a class="right carousel-control" href="#myCarousel" data-slide="next"><!-- right carousel-control Starts -->

<span class="glyphicon glyphicon-chevron-right"> </span>

<span class="sr-only"> Next </span>

</a><!-- right carousel-control Ends -->

</div>

</div><!-- mainImage Ends -->

<br><br>

<div class="row" id="thumbs" ><!-- row Starts -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin/product_images/<?php echo $pro_img1; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin/product_images/<?php echo $pro_img2; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->

<div class="col-xs-4" ><!-- col-xs-4 Starts -->

<a href="#" class="thumb" >

<img src="admin/product_images/<?php echo $pro_img3; ?>" class="img-responsive" >

</a>

</div><!-- col-xs-4 Ends -->


</div><!-- row Ends -->

</div><!-- col-sm-6 Ends -->


<div class="col-sm-6" ><!-- col-sm-6 Starts -->
<div class="box" ><!-- box Starts -->
<h1 class="text-center" > <?php echo $pro_title; ?> </h1>

<?php
if(isset($_POST['add_cart'])){
$ip_add = getRealUserIp();

$p_id = $pro_id;
$product_qty = $_POST['product_qty'];
$product_size = $_POST['product_size'];
$carrier_rate = $_POST['carrier_rate'];

$check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
$run_check = mysqli_query($con,$check_product);

if(mysqli_num_rows($run_check)>0){
echo "<script>alert('This Product is already added in cart')</script>";
echo "<script>window.open('$pro_url','_self')</script>";
}

else {

$get_price = "select * from products where product_id='$p_id'";
$run_price = mysqli_query($con,$get_price);
$row_price = mysqli_fetch_array($run_price);

$pro_price = $row_price['product_price'];
$product_price = $pro_price;

$query = "insert into cart (p_id,ip_add,order_qty,p_price,p_variations_id,carrier_id) values ('$p_id','$ip_add','$product_qty','$product_price','$product_size','$carrier_rate')";
$run_query = mysqli_query($db,$query);
echo "<script>window.open('$pro_url','_self')</script>";
}
}
?>

    <form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->
        <div class="form-group"><!-- form-group Starts -->
            <label class="col-md-5 control-label" >Product Quantity </label>
                 <div class="col-md-7" ><!-- col-md-7 Starts -->
                     <input type="number" name="product_qty" class="form-control">
                 </div><!-- col-md-7 Ends -->
        </div><!-- form-group Ends -->

        <div class="form-group" ><!-- form-group Starts -->
            <label class="col-md-5 control-label" >Product Variation</label>
                <div class="col-md-7" ><!-- col-md-7 Starts -->
                    <select name="product_size" class="form-control" >
                        <option> Select  a variation</option>

                        <?php
                            $get_variations = "select * from product_variations where product_id='$pro_id' order by product_variations asc";
                            $run_variations = mysqli_query($con,$get_variations);
                                while ($row_variations=mysqli_fetch_array($run_variations)) {

                                    $p_variations_id = $row_variations['p_variations_id'];
                                    $product_id = $row_variations['product_id'];
                                    $product_variations = $row_variations['product_variations'];
                                    $product_size = $row_variations['product_size'];
                                    $product_quantity = $row_variations['product_quantity'];
                                    echo "<option value='$p_variations_id' >$product_variations $product_size</option>";
                                }
                        ?>
                    </select>
                 </div><!-- col-md-7 Ends -->
        </div><!-- form-group Ends -->

        <div class="form-group" ><!-- form-group Starts -->
            <label class="col-md-5 control-label" >Carrier</label>
                <div class="col-md-7" ><!-- col-md-7 Starts -->
                    <select name="carrier_rate" class="form-control" >
                        <option>  Select  a Carrier </option>

                        <?php
                            $get_carrier = "select * from carrier";
                            $run_carrier = mysqli_query($con,$get_carrier);
                                while ($row_carrier=mysqli_fetch_array($run_carrier)) {

                                    $carrier_id = $row_carrier['carrier_id'];
                                    $carrier_name = $row_carrier['carrier_name'];
                                    $carrier_rate = $row_carrier['carrier_rate'];
                                    echo "<option value='$carrier_id' >$carrier_name</option>";
                                }
                        ?>
                    </select>
                 </div><!-- col-md-7 Ends -->
        </div><!-- form-group Ends -->


<?php } ?>


<?php



echo "

<p class='price'>

Product Price : RM$pro_price




</p>

";




?>

<p class="text-center buttons" ><!-- text-center buttons Starts -->

<button class="btn btn-danger" type="submit" name="add_cart">

<i class="fa fa-shopping-cart" ></i> Add to Cart

</button>

<button class="btn btn-warning" type="submit" name="add_wishlist">

<i class="fa fa-heart" ></i> Add to Wishlist

</button>


<?php

if(isset($_POST['add_wishlist'])){

if(!isset($_SESSION['cust_email'])){

echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}
else{

$customer_session = $_SESSION['cust_email'];

$get_customer = "select * from customers where cust_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['cust_id'];

$select_wishlist = "select * from wishlist where cust_id='$customer_id' AND product_id='$pro_id'";

$run_wishlist = mysqli_query($con,$select_wishlist);

$check_wishlist = mysqli_num_rows($run_wishlist);

if($check_wishlist == 1){

echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

echo "<script>window.open('$pro_url','_self')</script>";

}
else{

$insert_wishlist = "insert into wishlist (cust_id,product_id) values ('$customer_id','$pro_id')";

$run_wishlist = mysqli_query($con,$insert_wishlist);

if($run_wishlist){

echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

echo "<script>window.open('$pro_url','_self')</script>";

}

}

}

}

?>

</p><!-- text-center buttons Ends -->




</form><!-- form-horizontal Ends -->

</div><!-- box Ends -->



<div class="box" id="details"><!-- box Starts -->

<a class="btn btn-info tab" style="margin-bottom:10px; background-color:#ff9999; border:#ff9999;" href="#description" data-toggle="tab"><!-- btn btn-primary tab Starts -->

Product Description

</a><!-- btn btn-primary tab Ends -->

<a class="btn btn-info tab" style="margin-bottom:10px;background-color:#ff9999; border:#ff9999;" href="#features" data-toggle="tab"><!-- btn btn-primary tab Starts -->

Features

</a><!-- btn btn-primary tab Ends -->

<hr style="margin-top:0px;">

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active" style="margin-top:7px;" ><!-- description tab-pane fade in active Starts -->

<?php echo $pro_desc; ?>

</div><!-- description tab-pane fade in active Ends -->

<div id="features" class="tab-pane fade in" style="margin-top:7px;" ><!-- features tab-pane fade in  Starts -->

<?php echo $pro_features; ?>

</div><!-- features tab-pane fade in  Ends -->


</div><!-- tab-content Ends -->

</div><!-- box Ends -->

</div><!-- col-sm-6 Ends -->


</div><!-- row Ends -->




</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->



<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

