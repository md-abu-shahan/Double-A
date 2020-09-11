<?php
    $active='Account';
    include("includes/header.php");

?>

    <div id="content"> <!-- #content Begin -->
        <div class="container"> <!-- container Begin -->
            <div class="col-md-12"> <!-- col-md-12 Begin -->

                <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Register
                    </li>
                </ul> <!-- breadcrumb finish -->

            </div> <!-- col-md-12 finish -->



            <div class="col-md-9"> <!-- col-md-9 Begin -->

                <div class="box"> <!-- box Begin -->

                    <div class="box-header"> <!-- box-header Begin -->

                        <center> <!-- center Begin -->

                            <h2> Register a new account </h2>

                        </center> <!-- center finish -->

                        <form action="customer_register.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Name</label>

                                <input type="text" class="form-control" name="c_name" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Email</label>

                                <input type="text" class="form-control" name="c_email" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Password</label>

                                <input type="password" class="form-control" name="c_pass" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Address</label>

                                <input type="text" class="form-control" name="c_address" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Contact</label>

                                <input type="text" class="form-control" name="c_contact" required>

                            </div> <!-- form-group finish -->

                            <div class="form-group"> <!-- form-group Begin -->

                                <label>Your Profile Picture</label>

                                <input type="file" class="form-control form-height-custom" name="c_image" required>

                            </div> <!-- form-group finish -->

                            <div class="text-center"> <!-- text-center Begin -->

                                <button type="submit" name="register" class="btn btn-primary">

                                    <i class="fa fa-user-md"></i> Register

                                </button>

                            </div> <!-- text-center finish -->

                        </form> <!-- form finish -->

                    </div> <!-- box-header finish -->

                </div> <!-- box finish -->

            </div> <!-- col-md-9 finish -->

        </div> <!-- container finish -->
    </div> <!-- #content finish -->

    <?php 

    include("includes/footer.php")

    ?>

    <script src = "js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

</body>
</html>  


<?php
    if(isset($_POST['register'])){
        
        $c_name = $_POST['c_name'];
        
        $c_email = $_POST['c_email'];
        
        $c_pass = $_POST['c_pass'];
        
        $c_address = $_POST['c_address'];
        
        $c_contact = $_POST['c_contact'];
        
        $c_image = $_FILES['c_image']['name'];
        
        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        
        $c_ip = getRealIpUser();
        
        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
        
        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_address,customer_contact,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_address','$c_contact','$c_image','$c_ip')";
        
        $run_customer = mysqli_query($con,$insert_customer);
        
        $sel_cart = "select * from cart where ip_add = '$c_ip'";
        
        $run_cart = mysqli_query($con,$sel_cart);
        
        $check_cart = mysqli_num_rows($run_cart);
		

        
        /// If register without items in cart ///
        

        
    echo "<script>alert('Your Registration panding')</script>";
        
       


	echo "<script>window.open('index.php','_self')</script>";
    
}

?>