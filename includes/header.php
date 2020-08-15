<?php

    session_start();
    include("includes/db.php");
    include("functions/functions.php");   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale =1">
    <title>Double A</title>
    <link rel = "icon" type = "image/png" href="images/1.png">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
    <div id="top"><!-- Top Begin -->
        <div class="container"> <!-- container Begin -->
            <div class="col-md-6 offer"> <!-- col-md-6 offer Begin -->
                <a href="#" class="btn btn-success btn-sm">
                    <?php
                        
                    if(isset($_SESSION['customer_email'])){
                        echo $_SESSION['customer_email'] . "";
                    }else
                    {
                        echo "Welcome Guest";
                    }
                    
                    ?>
                </a>
            </div> <!-- col-md-6 offer Finish -->
            
            <div class="col-md-6"><!-- col-md-6 Begin -->
                <ul class="menu"> <!-- menu Begin -->
                    <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "
                            <li>
                                <a href='customer_register.php'>Register</a>
                            </li>";
                        }
                    ?>
                    
                    <?php
                    if(isset($_SESSION['customer_email'])){
                        echo "
                            <li>
                                <a href='#'>My Account</a>
                            </li> ";
                        }
                    ?>
                    <li>
                        <a href="#">Go To Cart</a>
                    </li>
                    <li>
                        <?php
                        
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'> Login </a>";
                        }else
                        {
                            echo "<a href='logout.php'> Log out</a>";
                        }

                        ?>
                    </li>
                    
                </ul> <!-- menu Finish -->
            </div> <!-- col-md-6 Finish -->
        </div> <!-- container Finish -->
    </div> <!-- Top finish -->
    <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
        <div class="container">  <!-- container Begin -->
           
            <div class="navbar-header"> <!-- navbar-header begin -->
               
                <a href="index.php" class="navbar-brand home"> <!-- navbar-brand home begin -->
                    
                    <img src="images/1.png" alt="Double A LOGO" class="d-inline-block align-top">
                    
                </a>  <!-- navbar-brand home finish -->
                
            </div>  <!-- navbar-header finish -->
            
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
              
               <div class="padding-nav"> <!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"> <!-- nav navbar-nav left Begin -->
                       
                       <li><a href="index.php">Home</a></li>
                       <li><a href="#">Shop</a></li>
                       <li>
                       
                           <?php 
                           if(isset($_SESSION['customer_email'])){
                               
                              echo"<a href='#'>My Account</a>"; 
                               
                           }
                           
                           ?>
                       
                       </li>
                       <li><a href="#">Shopping Cart</a></li>
                       <li><a href="#">Contact Us</a></li>
                   </ul> <!-- nav navbar-nav left finish -->
                   
               </div> <!-- padding-nav finish -->
               
               <a href="#" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary right Begin--> 
                  
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>Items In Your Cart</span>
                   
               </a> <!-- btn navbar-btn btn-primary right finish -->
               
               <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"> <!--btn btn-primary navbar-btn Begin -->
                      
                       <span class="sr-only">Toggle Seacrh</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button> <!--btn btn-primary navbar-btn finish -->
                   
               </div> <!-- navbar-collapse collapse right finish -->
               
               <div class="collapse clearfix" id="search">  <!--collapse clearfix Begin -->
                   
                   <form method="get" action="#" class="navbar-form"> <!--navbar-form Begin -->
                       
                       <div class="input-group"> <!--input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name = "user_query" required>
                           
                           <span class="input-group-btn"> <!--input-group-btn Begin -->
                           
                               <button type="submit" name="search" value="search" class="btn btn-primary"> <!--btn btn-primary Begin -->

                                   <i class="fa fa-search"></i>

                               </button><!--btn btn-primary finish -->
                           
                           </span> <!--input-group-btn finish -->
                           
                       </div> <!--input-group finish -->
                       
                   </form> <!--navbar-form finish -->
                   
               </div> <!--collapse clearfix finish -->
               
            </div> <!-- navbar-collapse collapse finish -->
            
        </div>  <!-- container finish -->
        
    </div> <!-- navbar navbar-default finish -->