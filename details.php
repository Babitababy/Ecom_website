
<?php
include 'includes/db.php';
include_once 'functions/functions.php';
?>


<?php
 
 if(isset($_GET['pro_id']))
 {
     $pro_id=$_GET['pro_id'];
     $get_product="select * from products where product_id='$pro_id'";
     $run_product=mysqli_query($conn,$get_product);
     $row_product=mysqli_fetch_array($run_product);
     $p_cat_id=$row_product['p_cat_id'];
     $p_title=$row_product['product_title'];
     $p_price=$row_product['product_price'];
     $p_desc=$row_product['product_desc'];
     $p_img1=$row_product['product_img1'];
     $p_img2=$row_product['product_img2'];
     $p_img3=$row_product['product_img3'];

     $get_p_cat="select * from product_category where p_cat_id='$p_cat_id'";
     $run_p_cat=mysqli_query($conn,$get_p_cat);

     $row_p_cat=mysqli_fetch_array($run_p_cat);

     $p_cat_id=$row_p_cat['p_cat_id'];
     $p_cat_title=$row_p_cat['p_cat_title'];

 }

?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>E-commerce Websites</title>
</head>

<body>
    <div id="top">
        <!--Top bar starts-->
        <div class="container">
            <!--container starts-->
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">
                    WELCOME GUEST
                </a>
                <a href="#">
                    Shopping cart:Total price:INR 100:Total items 2
                </a>

            </div>

            <div class="col-md-6">
                <ul class="Menu">
                    <li>
                        <a href="customer_registration.php">Register</a>
                    </li>

                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>

                    <li>
                        <a href="cart.php">Go to cart</a>
                    </li>

                    <li>
                        <a href="login.php">Login</a>
                    </li>

                </ul>

            </div>
        </div>
        <!--container ends-->

    </div>
    <!--Top bar ends-->


    <div class="navbar navbar-default" id="navbar">
        <!--navbar default starts-->

        <div class="container">
            <div class="navabar- header">
                <!--navbar header-->

                <a class="navbar-brand home" href="index.php">
                    <img src="img/small-logo.jpg" alt="logo" width="50px" height="50px" class="hidden-xs">
                    <img src="img/logo.jpg" alt="logo1" width="50px" height="50px" class="visible-xs">
                </a>

                <button type="button" class="navabar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only"> Toggle navigation </span>
                    <i class="fa fa-align-justify"></i>
                </button>

                <button type="button" class="navabar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>
                </button>

            </div>
            <!--navbar header closes-->


            <div class="navbar-collapse collapse" id="navigataion">
                <!--navbar colapase-->
                <div class="padding-nav">
                    <!--padding navbar starts-->

                    <ul class="nav navbar-nav navbar-left">

                        <li>
                            <a href="index.php">Home</a>
                        </li>

                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>


                        <li>
                            <a href="customer/my_account">My Account</a>
                        </li>


                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>


                        <li>
                            <a href="about.php">About Us</a>
                        </li>


                        <li>
                            <a href="services.php">Services</a>
                        </li>


                        <li>
                            <a href="contactus.php">Contact us</a>
                        </li>

                    </ul>
                </div>
                <!--padding navbar ends-->

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in cart</span>
                </a>

                <div class="navbar-collapse collapse right">
                    <!--navbar collapse-->
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#search">
                        <span class="sr-only"> Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <!--navbar collapse ends-->

                <div class="collapse clearfix" id="search">
                    <!--clearfix starts-->
                    <form class="navbar-form" method="get" action="result.php">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                            <span class="input-group-btn">
                                <button type="submit" value="search" name="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
                <!--clearfix ends-->

            </div>
            <!--navbar collapse-->
        </div>
        <!--navbar ends-->
    </div>
    <!--navbar default ends-->

    <div id="content">

        <div class="container">
            <!--container starts-->
            


            <div class="col-md-12">
                <!--col-md-12 starts-->
                <ul class="breadcrumb">
                    <li><a href="index.php">HOME</a></li>
                    <li> SHOP</li>
                     <li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"></a>
                     <?php echo $p_cat_title; ?>
                     </li>
                     <li><?php echo $p_title; ?> </li>
                    
                </ul>
            </div>
            <!--column-md-12 ends-->




            <div class="col-md-3">
                <!--col-md-3 starts-->
                <?php
                        include "includes/sidebar.php";
                   ?>
            </div>
            <!--col-md-3 ends-->

            <div class="col-md-9">
                <div class="row" id="productmain">

                     <div class="col-sm-6">  <!--col-sm-6 starts-->
                         <div id="mainimage">
                             <div id="mycarousel" class="carousel slide" data-ride="carousel">
                               <ol class="carousel-indicators">
                                   <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                   <li data-target="#mycarousel" data-slide-to="1"> </li>
                                   <li data-target="#mycarousel" data-slide-to="2"> </li>
                               </ol>
                               <div class="carousel-inner"><!--carousel inner starts-->

                                   <div class="item active">
                                         <center>
                                             <img src="admin_area/product_images/<?php echo $p_img1 ;?>" class="img-responsive">
                                         </center>
                                   </div>

                                   <div class="item">
                                         <center>
                                             <img src="admin_area/product_images/<?php echo $p_img2 ;?>" class="img-responsive">
                                         </center>
                                   </div>

                                   <div class="item">
                                         <center>
                                             <img src="admin_area/product_images/<?php echo $p_img3 ;?>" class="img-responsive">
                                         </center>
                                   </div>

                               </div><!--carousel-inner ends-->
                               <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                               </a>

                               <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Next</span>
                               </a>

                             </div>
                         </div>
                     </div><!--col-sm-6 slider ends-->

                     <div class="col-sm-6">
                         <div class="box"><!--box staerts--->
                             <h1 class="text-center"><?php echo $p_title ?></h1>
                             <form action="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal">
                                 <div class="form-group"><!--form group starts-->

                                     <label class="col-md-5 control-label"> Product Quantity</label>
                                        <div class="col-md-7"><!--col-md-7 starts-->
                                            <select name="product_qty" class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div><!--col-md-7 ends-->
                                 </div><!--form group ends-->



                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Product Size</label>
                                        <div class="col-md-7"><!--col-md-7 starts-->
                                            <select name="product_size" class="form-control">
                                              <option>Select a size</option>
                                              <option>Small</option>
                                              <option>Large</option>
                                              <option>Extra small</option>
                                              <option>Extra Large</option>
                                            </select>
                                        </div><!--col-md-7 ends-->
                                    </div>
                                    <p class="price" text-align="center" font-size="30px">INR <?php echo $p_price ;?></p>
                                    <p class="text-center buttons">
                                        <button class="btn btn-primary" type="submit">
                                         <i class="fa fa-shopping-cart"></i>Add to cart
                                        </button>
                                    </p>
                             </form>
                         </div><!--box ends--->

                         <div class="col-xs-4">
                             <a href="#" id="thumb">
                                 <img src="admin_area/product_images/<?php echo $p_img1 ;?>" width="130" height="150" class="img-responsive">
                             </a>
                         </div>

                         
                         <div class="col-xs-4">
                             <a href="#" id="thumb">
                                 <img src="admin_area/product_images/<?php echo $p_img2 ;?>" width="130" height="150" class="img-responsive">
                             </a>
                         </div>
                         
                         <div class="col-xs-4">
                             <a href="#" id="thumb">
                                 <img src="admin_area/product_images/<?php echo $p_img3 ;?>" width="110" height="150" class="img-responsive">
                             </a>
                         </div>

                     </div>

                </div><!--row ends-->
                <div class="box" id="details">
                 <h4>Product Details</h4> 
                 <p><?php echo $p_desc ;?></p>   
                 <h4>size</h4>
                 <ul>
                     <li> Small</li>
                     <li> Medium</li>
                     <li> Large</li>
                     <li> Extra-large</li>
                 </ul>
                </div><!--box ends-->

                <div id="row same-height-row">

                 <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 starts-->
                     <div class="box same-height headline">
                          <h3 class="text-center">you may also like these products </h3>
                     </div>
                 </div><!--col-md-3 col-sm-6 ends-->

                 

                  <?php 

                  $get_product="select *all from products order by 1 LIMIT 0,3";
                  $run_product=mysqli_query($conn,$get_product);
                  while($row=mysqli_fetch_array($run_product))
                  {
                           $pro_id=$row['product_id'];
                           $product_title=['product_title'];
                           $product_price=['product_price'];
                           $product_img1=['product_img1'];

                           echo "<div class='center-responsive col-md-3 col-sm-6'>
                           <div class='product same-height'>
                           <a href='details.php?pro_id=$pro_id'>
                           <img src='admin_area/product_images/$product_img1' class='img-responsive'>
                           </a>
                           <div class='text'>
                           <h3> <a href='deatils.php?pro_id=$pro_id'>$product_title</a></h3>
                           <p class='price'>  $product_price</p>
                           </div>
                           </div>
                           </div>";

                  }
                  ?>

                

            </div><!--same height row ends-->
</div><!--container ends-->
</div><!--content ends-->


<?php 
include "includes/footer.php";
?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>