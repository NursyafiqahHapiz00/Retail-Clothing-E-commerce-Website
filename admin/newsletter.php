<?php
	$conn = mysqli_connect("localhost", "root", "", "sstho");
 
	if(isset ($_POST['subscribe'])){
		if(!empty ($_POST['emailaddress'])){
			$emailaddress=$_POST['emailaddress'];	

       $query="insert into newsletter (emailaddress) value ('$emailaddress')" ;
       $run= mysqli_query ($conn, $query) or die(mysqli_error());

       if($run){
        echo " Thanks for subscribing us!" ;
	   }

       else {
        echo "Form not submitted" ;
	   }
	}

    else{
        echo "all fields required";
	}
}
?>