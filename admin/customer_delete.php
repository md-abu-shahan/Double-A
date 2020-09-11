<?php

if(isset($_GET['customer_email']))
{
    include("includes/db.php");
	$find=$_GET['customer_email'];
	$query = "DELETE FROM registration WHERE customer_email='$find'";
	
	if($con->query($query)==true)
    {
        header("Location: index.php?view_customers");
        
    }
    else
    {
        die($con->error);
    }
}
?>