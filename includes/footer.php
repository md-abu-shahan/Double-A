<div id="footer"> <!-- #footer Begin-->
   
    <div class="container"> <!-- container Begin -->
       
        <div class="row"> <!-- row Begin -->
           
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
            <h4>Pages</h4>
           
                <ul> <!-- ul Begin -->
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">My Account</a></li>
                </ul><!-- ul finish -->
                
                <hr>
                         
                <h4>User Section</h4>
                
                <ul> <!-- ul Begin -->
                   
                    <li>
                        
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='#'>Login</a>";
                               
                           }else{
                               
                              echo"<a href='#'>Log out</a>"; 
                               
                           }
                           
                        ?>
                        
                    </li>
                    <li>
                        
                        <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='#'>Register</a>";
                               
                           }else{
                               
                              echo"<a href='#>My Account</a>"; 
                               
                           }
                           
                        ?>
                        
                    </li>
                </ul><!-- ul finish -->
                
                <hr class="hidden-md hidden-lg hidden-sm">
                
            </div> <!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Top Products Categories</h4>
                
                <ul><!-- ul Begin -->
                <li>
                            
                    <a href='#'>
                    
                        Product
                    
                    </a>
                    
                </li>
                
                
                </ul><!-- ul finish -->
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Find Us</h4>
                
                <p><!-- p Begin -->
                    
                    <strong>Double A</strong>
                    <br>Modina Market
                    <br>Sylhet
                    <br>01712030863
                    <br>abuhanifnumani123@gmail.com
                    <br><strong>Abu Hanif & Abu Shahan</strong>
                    
                </p><!-- p finish -->
                
                <a href="#">Check Our Contact Page</a>
                
                <hr class="hidden-md hidden-lg">
                
            </div><!-- col-sm-6 col-md-3 finish -->
            
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Get The News</h4>
                
                <p class="text-muted">
                    Don't miss our latest update products.
                </p>
                
                <form action="#" method="post" target="popupwindow" method="post"><!-- form Begin -->
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
                    <a href="www.facebook.com" class="fa fa-facebook"></a>
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
            
            <p class="pull-left">&copy; 2020 Double A (Abu & Abu) All right Reserve</p>
            
        </div> <!-- col-md-6 finish -->
        <div class="col-md-6"> <!-- col-md-6 Begin-->
            
            <p class="pull-right">Theme by: <a href="www.facebook.com">Hanif & Shahan</a></p>
            
        </div> <!-- col-md-6 finish -->
    </div> <!-- container finish -->
</div> <!-- #copyright finish -->