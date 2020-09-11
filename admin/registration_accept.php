<?php

if(isset($_GET['customer_email']))
{
    include("includes/db.php");
	$email=$_GET['customer_email'];
	$sql1="select * from customers where customer_email='$email'";
	$result = mysqli_query($con,$sql1);
	$array=mysqli_fetch_array($result);
	
	$id=$array['customer_id'];
	$name=$array['customer_name'];
	$email=$array['customer_email'];
	$pass=$array['customer_pass'];
	$address=$array['customer_address'];
	$contact=$array['customer_contact'];
	$img=$array['customer_image'];
	$ip=$array['customer_ip'];
	
	$query1 = "insert into registration (customer_id,customer_name,customer_email,customer_pass,customer_address,customer_contact,customer_image,customer_ip) values ('$id','$name','$email','$pass','$address','$contact','$img','$ip')";
	
	mysqli_query($con,$query1);
	
	$query = "DELETE FROM customers WHERE customer_email='$email'";
	if($con->query($query)==true)
    {
        header("Location: index.php?new_registration");
        
    }
    else
    {
        die($con->error);
    }
}
?>