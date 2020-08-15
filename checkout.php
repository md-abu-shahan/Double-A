<?php
    $active='Home';
    include("includes/header.php");
    include("includes/db.php");


?>

<div id="content"> <!-- #content Begin -->
    <div class="container"> <!-- container Begin -->
        <div class="col-md-12"> <!-- col-md-12 Begin -->

            <ul class="breadcrumb"> <!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Log in
                </li>
            </ul> <!-- breadcrumb finish -->

        </div> <!-- col-md-12 finish -->

        <div class="col-md-9">
            <?php 

                if(!isset($_SESSION['customer_email'])){
                    include("customer_login.php");
                }else
                {
                    include("payment_option.php");
                }

            ?>
        </div>
    </div> <!-- container finish -->
</div> <!-- #content finish -->

<?php 

include("includes/footer.php")

?>

<script src = "js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>   