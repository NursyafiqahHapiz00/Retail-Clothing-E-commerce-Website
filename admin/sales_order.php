<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
		else {
?>

	<!-- To create bootstrap elements -->
	<div class="row"> <!-- Row 1 starts -->
		<div class="col-lg-12"> <!-- To make website responsive -->
			<ol class="breadcrumb"> <!-- To create horizontal navigation bar -->
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Reports / Sales Order Report
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-print"></i> Sales Order Report
					</h3>
				</div>	
											
							<div class="panel-body" >
                            <br>
                            <!--To create date picker -->
                            <form class="form-group" method="POST" action="">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-5"> <!-- Create date picker 1 -->
                                            <div class="form-group">                                   
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <label>From Date:</label>
                                                    </div>                          
                                                        <input type="date" class="form-control pull-right" name="from_date" value="<?php echo isset($_POST['from_date']) ? $_POST['from_date'] : '' ?>" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5"> <!-- Create date picker 2 -->
                                            <div class="form-group">                                            
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <label>To Date:</label>
                                                    </div>
                                                        <input type="date" class="form-control pull-right" name="to_date" value="<?php echo isset($_POST['to_date']) ? $_POST['to_date'] : '' ?>" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>                                    

                                        <div class="col-md-2">
                                            <button class="btn btn-primary" name="filter">Search</button> 
                                            <a href="index.php?sales_order" type="button" class="btn btn-success">Refresh</a>
                                        </div>
                                        <br>                              
                                    </div>
                            </form>
                                <br>

                                <center>
                                <div class="input-group col-md-6">
                                   <div class="box-title"><b>From :</b> <?php echo isset($_POST['from_date']) ? $_POST['from_date'] : '' ?> - <b>To:</b> <?php echo isset($_POST['to_date']) ? $_POST['to_date'] : '' ?></div>
						    	</div>
                                <br>

                                <!-- To create table -->
                                <div class="table-responsive" > 
								<table class="table table-bordered table-hover table-striped" > <!-- To create table striped -->
									<thead>

										<tr>
											
                                            <th>No</th>
											<th>Payment Id</th>
											<th>Invoice No</th>
											<th>Payment Date</th>
                                            <th>Amount</th>
											
										</tr>

									</thead>
				
									<tbody>

                                    <!-- To create date picker function -->
                                    <?php
                                        if(isset ($_POST['filter'])){
                                            $from_date = date("Y-m-d", strtotime($_POST['from_date']));
                                            $to_date = date("Y-m-d", strtotime($_POST['to_date']));

                                            $i=0;
                                            $query=mysqli_query($con, "select * from `payments` WHERE date(`payment_date`) between '$from_date' and '$to_date' order by payment_date asc");
                                            $row=mysqli_num_rows($query);
                                                if($row>0){
                                                    while($fetch=mysqli_fetch_array($query)){
                                                        $i++;
                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $fetch['payment_id']?></td>
                                        <td><?php echo $fetch['invoice_no']?></td>
                                        <td><?php echo $fetch['payment_date']?></td>
                                        <td>RM <?php echo $fetch['amount']?></td>
                                    </tr>                              

                                    <?php
                                                    }
                                    ?>

                                        <!-- To create row total amount -->
                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select sum(amount) as sum from `payments` WHERE date(`payment_date`) between '$from_date' and '$to_date' order by payment_date asc");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "4"> <b><?php echo "Total";?></b> </td>
                                            <td colspan = "1" > <b>RM <?php echo $fetch['sum']?></b> </td>

                                            <?php
                                                    }
                                            ?>
                                    </tr> 

                                    <!-- If no record found -->
                                    <?php
                                                }
                                            
                                                else {
                                                    echo'
                                                        <tr>
                                                            <td colspan = "5"><center>No Record Found</center></td>
                                                        </tr>';
                                                }
                                        }
                                       
                                        //Refresh page
                                                else {
                                                    $i=0;
                                                    $query=mysqli_query($con, "select * from `payments` order by payment_date asc");
                                                        while($fetch=mysqli_fetch_array($query)){
                                                            $i++;
                                    ?>

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $fetch['payment_id']?></td>
                                            <td><?php echo $fetch['invoice_no']?></td>
                                            <td><?php echo $fetch['payment_date']?></td>
                                            <td>RM <?php echo $fetch['amount']?></td>
                                        </tr>

                                    <?php
                                                        }
                                    ?>       
                                    
                                        <!-- To create row total amount -->               
                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select sum(amount) as sum from `payments`");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "4"> <b><?php echo "Total";?></b> </td>
                                            <td colspan = "1" > <b>RM <?php echo $fetch['sum']?></b> </td>
                
                                            <?php
                                                    }
                                            ?>
                                        </tr>   
                                    
                                    <?php
                                            }
                                    ?>                                                                 
							</tbody>
					</table>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2"> 	
                            <a href="index.php?view_reports" class="btn btn-danger"> Back </a>
                        </div>

                        <div class="col-md-2"> 	
							<button onclick="window.print();" class="btn btn-primary"><i class="fa fa-print"></i> Print Report</button>
                        </div>
                    </div>
				</div>
                
              </div>
			</div>
		</div>
	</div>
</div> 

<?php 
	}
?>