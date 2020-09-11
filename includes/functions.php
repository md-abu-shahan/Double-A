<?php 

$db = mysqli_connect("localhost","root","","ecom_store");

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// begin getPro functions ///

function getPro(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];
        
        echo "
        
        
           
            <div class='col-sm-4 col-sm-6 single'>
                
                <div class='product''>
                    
                    <a href='details.php?pro_id=$pro_id'>
                        
                        <img class='img-responsive' src='admin/product_images/$pro_img1' alt='$pro_img1'>
                        
                    </a>
                    
                    <div class='text'>
                        
                        <h3>
                            <a href='details.php?pro_id=$pro_id'>
                                $pro_title
                            </a>                           
                        </h3>
                        
                        <p class='price'>
                            
                            ৳ $pro_price
                        
                        </p>
                        
                        <p class='button'>
                            
                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                View Details
                            </a>
                            
                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                
                                <i class='fa fa-shopping-cart'>
                                    
                                    Add To Cart
                                    
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div>
                    
                </div>
                
            </div>
        
        ";
        
    }
    
}

/// begin getPCats functions ///

function getPCats(){
    
    global $db;
    
    $get_p_cats = "select * from product_categories";
    
    $run_p_cats = mysqli_query($db,$get_p_cats);
    
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        
        $p_cats_id = $row_p_cats['p_cat_id'];
        $p_cats_title = $row_p_cats['p_cat_title'];
        
        echo "
            <li>
                
                <a href = 'shop.php?p_cat=$p_cats_id'>$p_cats_title</a>
                
            </li>
        ";
    }
    
    
}

/// begin getCats functions ///

function getCats(){
    
    global $db;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($db,$get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        
        $cats_id = $row_cats['cat_id'];
        $cats_title = $row_cats['cat_title'];
        
        echo "
            <li>
                
                <a href = 'shop.php?cat=$cats_id'>$cats_title</a>
                
            </li>
        ";
    }
    
    
}


/// begin getpcatpro functions ///

function getpcatpro(){
    
    global $db;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "select * from product_categories where p_cat_id = '$p_cat_id'";
        
        $run_p_cat = mysqli_query($db, $get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        $p_cat_desc = $row_p_cat['p_cat_desc'];
        
        
        $get_products = "select * from products where p_cat_id = '$p_cat_id'";
        
        $run_products = mysqli_query($db, $get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            echo "
            
            <div class = 'box'>
            
                <h1> No Product Found In This Product Categories </h1>
            
            </div>
            
            ";
        }else{
            
            echo "
            
            <div class = 'box'>
            
                <h1> $p_cat_title </h1>
                <p> $p_cat_desc </p>
            
            </div>
            
            ";
            
        }
        
       while($row_products=mysqli_fetch_array($run_products)){
        
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
           
           echo "
        
        
           
            <div class='col-sm-4 col-sm-6 center-responsive''>
                
                <div class='product''>
                    
                    <a href='details.php?pro_id=$pro_id'>
                        
                        <img class='img-responsive' src='admin/product_images/$pro_img1' alt='$pro_img1'>
                        
                    </a>
                    
                    <div class='text'>
                        
                        <h3>
                            <a href='details.php?pro_id=$pro_id'>
                                $pro_title
                            </a>                           
                        </h3>
                        
                        <p class='price'>
                            
                            ৳ $pro_price
                        
                        </p>
                        
                        <p class='button'>
                            
                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                View Details
                            </a>
                            
                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                
                                <i class='fa fa-shopping-cart'>
                                    
                                    Add To Cart
                                    
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div>
                    
                </div>
                
            </div>
        
        ";
           
       }
        
    }

 }

/// begin getcatpro functions ///

function getcatpro()
{
    global $db;
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
        $get_cat = "select * from categories where cat_id = '$cat_id'";
        
        $run_cat = mysqli_query($db, $get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];
        
        $cat_desc = $row_cat['cat_desc'];
        
        
        $get_products = "select * from products where cat_id = '$cat_id' ";
        
        $run_products = mysqli_query($db, $get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            echo "
            
            <div class = 'box'>
            
                <h1> No Product Found In This Product Categories </h1>
            
            </div>
            
            ";
        }else{
            
            echo "
            
            <div class = 'box'>
            
                <h1> $cat_title </h1>
                <p> $cat_desc </p>
            
            </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
        
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];
           
           echo "
        
        
           
            <div class='col-sm-4 col-sm-6 center-responsive''>
                
                <div class='product''>
                    
                    <a href='details.php?pro_id=$pro_id'>
                        
                        <img class='img-responsive' src='admin/product_images/$pro_img1' alt='$pro_img1'>
                        
                    </a>
                    
                    <div class='text'>
                        
                        <h3>
                            <a href='details.php?pro_id=$pro_id'>
                                $pro_title
                            </a>                           
                        </h3>
                        
                        <p class='price'>
                            
                            ৳ $pro_price
                        
                        </p>
                        
                        <p class='button'>
                            
                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                View Details
                            </a>
                            
                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                
                                <i class='fa fa-shopping-cart'>
                                    
                                    Add To Cart
                                    
                                </i>
                                
                            </a>
                            
                        </p>
                        
                    </div>
                    
                </div>
                
            </div>
        
        ";
           
       }
    }
}


?>

