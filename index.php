<?php
    $active='Home';
    include("includes/header.php");
?>
   
   
    
    <div class="container" id="slider"> <!-- container Begin -->
        
        <div class="col-md-12"> <!-- col-md-12 Begin -->
            
            <div class="carousel slider" id="myCarousel" data-ride="carousel"> <!-- carousel slider Begin -->
                
                <ol class="carousel-indicators"> <!-- carousel-indicators Begin -->
                    
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    
                </ol> <!-- carousel-indicators finish -->
                
                <div class="carousel-inner"> <!-- carousel-inner Begin -->
                   <!-- <div class='item active'>
                        <img src='admin_area/slides_images/$slide_I'>
                   </div> -->
                   <?php
                        $get_slides = "select * from slider LIMIT 0,1";
                    
                        $run_slider = mysqli_query($con,$get_slides);
                    
                        while($row_slides=mysqli_fetch_array($run_slider)){
                            $slide_I = $row_slides['slide_image'];
                            
                            echo "
                                <div class='item active'> 

                                    <img src='images/$slide_I'>

                                </div>
                            
                            ";
                        }
                        
                        $get_slides = "select * from slider LIMIT 1,3";
                    
                        $run_slider = mysqli_query($con,$get_slides);
                    
                        while($row_slides=mysqli_fetch_array($run_slider)){
                            $slide_I = $row_slides['slide_image'];
                            
                            echo "
                                <div class='item'> 

                                    <img src='images/$slide_I'>

                                </div>
                            
                            ";
                        }
                    
                    ?>
                    
                </div> <!-- carousel-inner finish -->
                
                <a href="#myCarousel" class="left carousel-control" data-slide="prev"> <!-- left carousel-control Begin -->
                    
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    
                </a> <!-- left carousel-control finish -->
                
                <a href="#myCarousel" class="right carousel-control" data-slide="next"> <!-- left carousel-control Begin -->
                    
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    
                </a> <!-- left carousel-control finish -->
                
            </div> <!-- carousel slider finish -->
            
        </div> <!-- col-md-12 finish -->
        
    </div> <!-- container finish -->
    
    <div id="advantages"> <!-- #advantages Begin -->
        
        <div class="container"> <!-- container Begin -->
            
            <div class="same-height-row"> <!-- same-height-row Begin -->
                
                <div class="col-sm-4"> <!-- col-sm-4 Begin-->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon">  <!-- icon Begin -->
                            
                            <i class="fa fa-heart"></i>
                            
                        </div> <!-- icon finish -->
                        
                        <h3><a href="#">Best offer</a></h3>
                        
                        <p>We know to provide the best possible service ever</p>
                        
                    </div> <!-- box same-height finish -->
                    
                </div> <!-- col-sm-4 finish -->
                
                <div class="col-sm-4"> <!-- col-sm-4 Begin-->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon">  <!-- icon Begin -->
                            
                            <i class="fa fa-tag"></i>
                            
                        </div> <!-- icon finish -->
                        
                        <h3><a href="#">Best Prices</a></h3>
                        
                        <p>Compare us with another site, who have the best prices.</p>
                        
                    </div> <!-- box same-height finish -->
                    
                </div> <!-- col-sm-4 finish -->
                
                <div class="col-sm-4"> <!-- col-sm-4 Begin-->
                    
                    <div class="box same-height"> <!-- box same-height Begin -->
                        
                        <div class="icon">  <!-- icon Begin -->
                            
                            <i class="fa fa-thumbs-up"></i>
                            
                        </div> <!-- icon finish -->
                        
                        <h3><a href="#">100% Original</a></h3>
                        
                        <p>We just offer you the best and original products For buy</p>
                        
                    </div> <!-- box same-height finish -->
                    
                </div> <!-- col-sm-4 finish -->
                
            </div> <!-- same-height-row finish -->
            
        </div> <!-- container finish -->
        
    </div><!-- advantages finish -->
    
    <div id="hot"> <!-- #hot Begin -->
        
        <div class="box"> <!-- box Begin -->
            
            <div class="container"> <!-- container Begin -->
                
                <div class="col-md-12"> <!-- col-md-12 Begin -->
                    
                    <h2>
                        Our Latest Products.
                    </h2>
                    
                </div> <!-- col-md-12 finish -->
                
            </div> <!-- container finish -->
            
        </div> <!-- box finish -->
        
    </div> <!-- #hot finish -->
    
    <div id="content" class="container"> <!-- container Begin -->
        
        <div class="row"> <!-- row Begin -->

           
           <div class='col-sm-4 col-sm-6 single'>
                
                <div class='product''>
                    
                    <a href='#'>
                        
                        <img class='img-responsive' src='images/phone.jpg' alt='#'>
                        
                    </a>
                    
                    <div class='text'>
                        
                        <h3>
                            <a href='#'>
                                Galaxy Smart Phone
                            </a>                           
                        </h3>
                        
                        <p class='price'>
                            
                            ৳ 15999
                        
                        </p>
                        
                        <p class='button'>
                            
                            <a class='btn btn-default' href='#'>
                                View Details
                            </a>
                            
                            <a class='btn btn-primary' href='#'>
                                
                                <i class='fa fa-shopping-cart'>
                                    
                                    Add To Cart
                                    
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div>
                    
                </div>

                
            </div>
            <div class='col-sm-4 col-sm-6 single'>
                
                <div class='product''>
                    
                    <a href='#'>
                        
                        <img class='img-responsive' src='images/11.jpg' alt='#'>
                        
                    </a>
                    
                    <div class='text'>
                        
                        <h3>
                            <a href='#'>
                                Galaxy Smart Phone
                            </a>                           
                        </h3>
                        
                        <p class='price'>
                            
                            ৳ 15999
                        
                        </p>
                        
                        <p class='button'>
                            
                            <a class='btn btn-default' href='#'>
                                View Details
                            </a>
                            
                            <a class='btn btn-primary' href='#'>
                                
                                <i class='fa fa-shopping-cart'>
                                    
                                    Add To Cart
                                    
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div>
                    
                </div>

            </div>
            <div class='col-sm-4 col-sm-6 single'>
                
                <div class='product''>
                    
                    <a href='#'>
                        
                        <img class='img-responsive' src='images/2.jpg' alt='#'>
                        
                    </a>
                    
                    <div class='text'>
                        
                        <h3>
                            <a href='#'>
                                Galaxy Smart Phone
                            </a>                           
                        </h3>
                        
                        <p class='price'>
                            
                            ৳ 15999
                        
                        </p>
                        
                        <p class='button'>
                            
                            <a class='btn btn-default' href='#'>
                                View Details
                            </a>
                            
                            <a class='btn btn-primary' href='#'>
                                
                                <i class='fa fa-shopping-cart'>
                                    
                                    Add To Cart
                                    
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div>
                    
                </div>

            </div>
            <div class='col-sm-4 col-sm-6 single'>
                
                <div class='product''>
                    
                    <a href='#'>
                        
                        <img class='img-responsive' src='images/3.jpg' alt='#'>
                        
                    </a>
                    
                    <div class='text'>
                        
                        <h3>
                            <a href='#'>
                                Galaxy Smart Phone
                            </a>                           
                        </h3>
                        
                        <p class='price'>
                            
                            ৳ 15999
                        
                        </p>
                        
                        <p class='button'>
                            
                            <a class='btn btn-default' href='#'>
                                View Details
                            </a>
                            
                            <a class='btn btn-primary' href='#'>
                                
                                <i class='fa fa-shopping-cart'>
                                    
                                    Add To Cart
                                    
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div>
                    
                </div>

            </div>
        </div> <!-- row finish -->
        
    </div> <!-- container finish -->
    
    <?php 
    
    include("includes/footer.php")
    
    ?>
    
    <script src = "js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>   