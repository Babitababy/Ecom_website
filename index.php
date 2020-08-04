<?php
include 'includes/db.php';
include_once 'functions/functions.php';

?>
<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
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

                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="shop.php">Shop</a>
                        </li>


                        <li>
                            <a href="customer/my_account.php">My Account</a>
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

    <div class="container" id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <!--carousel inner starts-->
                    <?php

                    $sql= "select * from slider LIMIT 0,1";
                    $result= mysqli_query($conn,$sql);

                    while($row=mysqli_fetch_array($result))
                    {

                       $slider_name= $row['slider_name'];
                       $slider_image=$row['slider_image'];

                      

                       echo "<div class='item active'>
                       <img src='img/$slider_image'></div>";

                    }
                    ?>

                       <?php

                    $sql= "select * from slider LIMIT 1,3";
                    $result= mysqli_query($conn,$sql);

                    while($row=mysqli_fetch_array($result))
                     {

                         $slider_name= $row['slider_name'];
                         $slider_image=$row['slider_image'];

                        echo "<div class='item'>
                         <img src='img/$slider_image'></div>";
                      }
                    ?>

                </div>
                <!--carousel inner ends-->


                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!--carousel-slide-->
        </div>
        <!--col-md-12-->
    </div>
    <!--container-->


    <div id="advantage">
        <!--advantage starts-->
        <div class="container">
            <div class="same-height-row">

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">BEST PRICES</h3>
                        <p>you can check on all other sites about the price and then compare with us.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">100% SATISFACTION GUARANTEED FROM US.</h3>
                        <p>Free returns on everything for 3 months.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">WE LOVE OUR CUSTOMERS.</h3>
                        <p>we are known to provide best possible service.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--advantage ends here-->

    <div id="hot">
        <!-- hot box starts-->
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>LATEST THIS WEEK</h2>

                </div>
            </div>
        </div>
    </div>
    <!--hot box ends here-->






    <div id="content" class="container">
        <div class="row"> 
          <?php
               getPro();
          ?>

        </div>
    </div>
<?php 
include "includes/footer.php";
?>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>