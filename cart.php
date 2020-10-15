<?php
    $active='Cart';
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
                        Cart
                    </li>
                </ul> <!-- breadcrumb finish -->

            </div> <!-- col-md-12 finish -->
            
            <div id="cart" class="col-md-9"> <!-- col-md-9 Begin -->
                
                <div class="box"> <!-- box Begin -->
                    
                    <form action="cart.php" method="post" enctype="multipart/form-data"> <!-- form Begin -->
                        
                        <h1>Shopping Cart</h1>
                        
                        <?php
                        
                        $ip_add=getRealIpUser();
                        
                        $select_cart = "select * from cart where ip_add='$ip_add'";
                        
                        $run_cart = mysqli_query($con, $select_cart);
                        
                        $count = mysqli_num_rows($run_cart);
                        
                        ?>
                        
                        <p class="text-muted">You Currently Have <?php echo $count; ?> item(s) in your cart</p>
                        
                        <div class="table-responsive"> <!-- table-responsive Begin -->
                            
                            <table class="table"> <!-- table Begin -->
                                
                                <thead> <!-- thead Begin -->
                                    
                                    <tr> <!-- tr Begin -->
                                        
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th>Delete</th>
                                        <th colspan="2">Sub-Total</th>
                                        
                                    </tr> <!-- tr finish -->
                                    
                                </thead> <!-- thead finish -->
                                
                                <tbody> <!-- tbody Begin -->
                                    
                                    <?php 
                                    
                                        $total = 0;
                                        while($row_cart = mysqli_fetch_array($run_cart)){
                                        
                                        $pro_id = $row_cart['p_id'];
                                            
                                        $pro_size = $row_cart['size'];
                                        
                                        $pro_qty = $row_cart['qty'];
                                            
                                        $get_products="select * from products where product_id='$pro_id'";
                                            
                                        $run_products = mysqli_query($con,$get_products);
                                            
                                        while($row_products=mysqli_fetch_array($run_products)){
                                        
                                            $product_title=$row_products['product_title'];
                                            
                                            
                                            $product_img1=$row_products['product_img1'];
                                            
                                            $product_price=$row_products['product_price'];
                                            
                                            $sub_total=$row_products['product_price']*$pro_qty;
                                            
                                            $total += $sub_total;
                                    
                                    ?>
                                    
                                    <tr> <!-- tr Begin -->
                                        
                                        <td>
                                            
                                            <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 4a">
                                            
                                        </td>
                                        
                                        <td>
                                            
                                            <a href="details.php?pro_id=<?php echo $pro_id; ?>"><?php echo $product_title; ?></a>
                                            
                                        </td>
                                        
                                        <td>
                                           
                                            <?php echo $pro_qty; ?>
                                            
                                        </td>
                                        
                                        <td>
                                            
                                            ৳ <?php echo $product_price; ?>
                                            
                                        </td>
                                        
                                        <td>
                                            
                                            <?php echo $pro_size; ?>
                                            
                                        </td>
                                        
                                        <td>
                                            
                                            <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                            
                                        </td>
                                        
                                        <td>
                                            
                                            ৳ <?php echo $sub_total; ?>
                                            
                                        </td>
                                        
                                    </tr> <!-- tr finish -->
                                    
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody> <!-- tbody finish -->
                                
                                <tfoot> <!-- tfoot Begin -->
                                    
                                    <tr> <!-- tr Begin -->
                                        
                                        <th colspan="5">Total</th>
                                        <th colspan="2">৳ <?php echo $total; ?></th>
                                        
                                    </tr> <!-- tr finish -->
                                    
                                </tfoot> <!-- tfoot finish -->
                                
                            </table> <!-- table finish -->
                            
                        </div> <!-- table-responsive finish -->
                        
                        <div class="box-footer"> <!-- box-footer Begin -->
                            
                            <div class="pull-left"> <!-- pull-left Begin -->
                                
                                <a href="index.php" class="btn btn-default"> <!--btn btn-default Begin -->
                                    
                                    <i class="fa fa-chevron-left"></i> Continue Shopping
                                    
                                </a> <!--btn btn-default finish -->
                                
                            </div> <!-- pull-left finish -->
                            
                            <div class="pull-right"> <!-- pull-right Begin -->
                                
                                <button type="submit" name="update" value="Update Cart" class="btn btn-default"> <!--btn btn-default Begin -->
                                    
                                    <i class="fa fa-refresh"></i> Update Cart
                                    
                                </button> <!--btn btn-default finish -->
                                
                                <a href="checkout.php" class="btn btn-primary">
                                    
                                    Proceed Checkout <i class="fa fa-chevron-right"></i>
                                    
                                </a>
                                
                            </div> <!-- pull-right finish -->
                            
                        </div> <!-- box-footer finish -->
                        
                    </form> <!-- form finish -->
                    
                </div> <!-- box finish -->
                
                <?php 
                function update_cart(){
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            $run_delete=mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                echo "<script>window.open('cart.php','_self')</script>";
                            }
                        }
                        
                    }
                }
                
                echo $up_cart=update_cart();
                
                ?>
                
    
                <div id="row same-height-row"> <!-- #row same-height-row Begin -->
                    
                    
                    <?php 
                   
                   $get_products = "select * from products order by rand() LIMIT 0,3";
                   
                   $run_products = mysqli_query($con,$get_products);
                   
                   while($row_products=mysqli_fetch_array($run_products)){
                       
                       $pro_id = $row_products['product_id'];
                       
                       $pro_title = $row_products['product_title'];
                       
                       $pro_price = $row_products['product_price'];
                       
                       $pro_img1 = $row_products['product_img1'];
                       
                       echo "
                       
                    <div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class='product same-height'><!-- product same-height Begin -->
                           <a href='details.php?pro_id=$pro_id'>
                               <img class='img-responsive' src='admin_area/product_images/$pro_img1' alt='Product 6'>
                            </a>
                            
                            <div class='text'><!-- text Begin -->
                                <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                                
                                <p class='price'>৳ $pro_price</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                       ";
                       
                   }
                   
                   ?>
                    
                </div> <!-- #row same-height-row finish -->
                
            </div> <!-- col-md-9 finish -->
            
            <div class="col-md-3"> <!-- col-md-3 Begin -->
                
                <div id="order-summary" class="box"> <!-- box Begin -->
                    
                    <div class="box-header"> <!-- box-header Begin -->
                        
                        <h3>Order Summary</h3>
                        
                    </div> <!-- box-header finish -->
                    
                    <p class="text-muted"> <!-- text-muted Begin -->
                        
                        shipping and additional costs are calculated based on value you have entered
                        
                    </p> <!-- text-muted finish -->
                    
                    <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Order All Sub-Total </td>
                                   <th> ৳<?php echo $total; ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Shipping and Handling </td>
                                   <th> ৳0 </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Tax </td>
                                   <th> ৳0 </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> Total </td>
                                   <th> ৳<?php echo $total; ?> </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                    
                </div> <!-- box finish -->
                
            </div> <!-- col-md-3 finish -->
            

        </div> <!-- container finish -->
    </div> <!-- #content finish -->

    <?php 

    include("includes/footer.php")

    ?>

    <script src = "js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>
</html>   