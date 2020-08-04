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

    <div id="content">

        <div class="container">
            <!--container starts-->
            <div class="col-md-12">
                <!--col-md-12 starts-->
                <ul class="breadcrumb">
                    <li><a href="home.php">HOME</a></li>
                    <li> Registration</li>
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
              <div class="box">
                  <div class="box-header">

                  <center>
                     <h2>Customer Registration</h2>
                  </center>
                  </div><!--box-header ends-->

                  <form action="customer_registration.php" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="c_name" class="form-control" required="">
                      </div>

                      <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="c_email" class="form-control" required="">
                      </div>

                      <div class="form-group">
                          <label>Customer Password</label>
                          <input type="password" name="c_password" class="form-control" required="">
                      </div>

                      
                      <div class="form-group">
                          <label>Country</label>
                          <input type="text" name="c_country" class="form-control" required="">
                      </div>
                             
                      <div class="form-group">
                          <label>City</label>
                          <input type="text" name="c_city" class="form-control" required="">
                      </div>

                      <div class="form-group">
                          <label>Contact Number</label>
                          <input type="number" name="c_contact" class="form-control" required="">
                      </div>

                      <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="c_address" class="form-control" required="">
                      </div>

                      <div class="form-group">
                          <label>Image</label>
                          <input type="file" name="c_image" class="form-control" required="">
                      </div>

                      <div class="text-center">
                          <button type="submit" name="submit" class="btn btn-primary">
                              <i class="fa fa-user-md">Register</i>
                          </button>
                      </div>
                  </form>

              </div>
          </div>

</div>
</div>


            
    <?php 
include "includes/footer.php";
?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>