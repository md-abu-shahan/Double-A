<div id="footer"> <!-- #footer Begin-->
   
    <div class="container"> <!-- container Begin -->
       
        <div class="row"> <!-- row Begin -->
           
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
            <h4>Pages</h4>
           
                <ul> <!-- ul Begin -->
                    <li><a href="../cart.php">Shopping Cart</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="my_account.php">My Account</a></li>
                </ul><!-- ul finish -->
                
                <hr>
                         
                <h4>User Section</h4>
                
                <ul> <!-- ul Begin -->
                    <li>
                         <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?my_orders'>My Account</a>"; 
                               
                           }
                           
                          ?>
                    </li>
                    <li>
                        
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='../checkout.php'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='my_account.php?edit_account'>Edit Account</a>"; 
                               
                           }
                           
                          ?>
                        
                    </li>
                </ul><!-- ul finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                           
            </div> <!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top Products Categories</h4>
                
                <ul><!-- ul Begin -->
                
                    <?php
                    
                    $get_p_cats = "select * from product_categories";
                    
                    $run_p_cats = mysqli_query($con,$get_p_cats);
                    
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        $p_cat_title = $row_p_cats['p_cat_title'];
                        
                        echo "
                        
                            <li>
                            
                                <a href='../shop.php?p_cat=$p_cat_id'>
                                
                                    $p_cat_title
                                
                                </a>
                                
                            </li>
                        
                        ";
                        
                    }
                ?>
                
                </ul><!-- ul finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Find Us</h4>
                
                <p><!-- p Begin -->
                    
                    <strong>Burhan Botics</strong>
                    <br>Modina Market
                    <br>Sylhet
                    <br>01733700745
                    <br>burhan.neub@gmail.com
                    <br><strong>Burhan</strong>
                    
                </p><!-- p finish -->
                
                <a href="../contact.php">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    Don't miss our latest update products.
                </p>
                
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=PpProgramingBlog', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form Begin -->
                    <div class="input-group"><!-- input-group Begin-->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <input type="hidden" value="PpProgramingBlog" name="uri"/><input type="hidden" name="loc" value="en_US"/>
                        
                        <span class="input-group-btn"><!-- input-group-btn Begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn finish -->
                        
                    </div><!-- input-group finish -->
                </form><!-- form finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="www.facebook.com/burhan.cse" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
        </div> <!-- row finish -->
        
    </div> <!-- container finish -->
    
</div> <!-- #footer finish -->


<div id="copyright"> <!-- #copyright Begin -->
    <div class="container"> <!-- container Begin -->
        <div class="col-md-6"> <!-- col-md-6 Begin-->
            
            <p class="pull-left">&copy; 2019 Burhan Botics All right Reserve</p>
            
        </div> <!-- col-md-6 finish -->
        <div class="col-md-6"> <!-- col-md-6 Begin-->
            
            <p class="pull-right">Theme by: <a href="www.facebook.com/burhan.cse">Burhan</a></p>
            
        </div> <!-- col-md-6 finish -->
    </div> <!-- container finish -->
</div> <!-- #copyright finish -->