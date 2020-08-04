
<?php
include 'includes/db.php';
include 'functions/functions.php';

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

                        <li>
                            <a href="shop.php">Shop</a>
                        </li>


                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>


                        <li class="active">
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
                    <li> CART</li>
                </ul>
            </div>
            <!--column-md-12 ends-->
<div class="col-md-9" id="cart">
 <div class="box">
<form action="cart.php" method="post" enctype="multipart-form-data">
<h1>Shopping Cart</h1>
<p class="text-muted">Currently you have 3 items in your cart.</p>
<div class="table-responsive">
    <table class="table">
       <thead>
           <tr>
               <th colspan="2">Product</th>
               <th>Quantity</th>
               <th>Unit price</th>              
               <th>Size</th>
               <th colspan="1">Delete</th>
               <th colspan="1">Sub Total</th>
           </tr>
       </thead>
       <tbody>
           <tr>
               <td>
                   <img src="product-images/type1.jpg">
               </td>
               <td> Men's T-shirt</td>
               <td>2</td>
               <td>INR 399</td>
               <td>Large</td>
               <td><input type="checkbox" name="remove[]"></td>
               <td>INR 798</td>
                
           </tr>

           <tr>
               <td>
                   <img src="product-images/type1.jpg">
               </td>
               <td> Men's T-shirt</td>
               <td>2</td>
               <td>INR 399</td>
               <td>Large</td>
               <td><input type="checkbox" name="remove[]"></td>
               <td>INR 798</td>
                
           </tr>

          
       </tbody>    
       <tfoot>
           <tr>
               <th colspan="5">Total</th>
                <th colspan="2">INR 398</th>  
               
           </tr>
       </tfoot>   
    </table>

</div><!--table responsive ends-->  

<div class="box-footer">
    <div class="pull-left">
       <a href="index.php" class="btn btn-default">
           <i class="fa fa-chevron-left"></i>Continue Shopping
       </a>

    </div>

    <div>
    <div class="pull-right">

       <button class="btn btn-default" type="submit" name="update" value="update cart">
        <i class="fa fa-refresh"></i>Update Cart
       </button>


       <a href="checkout.php" class="btn btn-success">Proceed to checkout <i class="fa fa-chevron-right"></i></a>

    </div>
    </div>
</div>
</form>
 </div><!--box ends-->
 <div id="row same-height-row">

<div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 starts-->
    <div class="box same-height headline">
         <h3 class="text-center">you may also like these products </h3>
    </div>
</div><!--col-md-3 col-sm-6 ends-->

<div class="center-responsive col-md-3"><!--"center-responsive col-md-3 starts"-->
   <div class="product same-height">
       <a href="">
         <img src="product-images/type1.jpg" height="200" width="200">
       </a>
       <div class="text">
              <h3><a href="details.php">Mens T-shirt</a></h3>
              <p class="price">INR 499</p>
       </div>
</div>
</div><!--"center-responsive col-md-3 ends"-->

<div class="center-responsive col-md-3"><!--"center-responsive col-md-3 starts"-->
   <div class="product same-height">
       <a href="">
         <img src="product-images/type2.jpg" height="200" width="200">
       </a>
       <div class="text">
              <h3><a href="details.php">Mens T-shirt</a></h3>
              <p class="price">INR 499</p>
       </div>
</div>
</div><!--"center-responsive col-md-3 ends"-->

<div class="center-responsive col-md-3"><!--"center-responsive col-md-3 starts"-->
   <div class="product same-height">
       <a href="">
         <img src="product-images/type3.jpg" height="200" width="200">
       </a>
       <div class="text">
              <h3><a href="details.php">Mens T-shirt</a></h3>
              <p class="price">INR 499</p>
       </div>
</div>
</div><!--"center-responsive col-md-3 ends"-->

</div><!--same height row ends-->
</div><!--col-md-9-ends-->

   <div class="col-md-3">
       <div class="box" id="order-summary">

         <div class="box-header">
          <h3>Order Summary</h3>
         </div>
      <p class="text-muted">
       shipping and additional costs will be applied based on the value that you have entered.
      </p>
        <div class="table-responsive">
            <table class="table">
               <tbody>

               <tr>
               <td>Order subtotal</td>
               <th>INR 798</th>
               </tr>

               <tr>
               <td>Shipping and Handling</td>
               <td>INR 0</td>
               </tr>

               <tr>
               <td>Tax</td>
               <td>INR 0</td>
               </tr>

               <tr>
               <th>Total cost</th>
               <th>INR 798</th>
               </tr>



               </tbody>
            </table>
        </div>
       </div>
   </div><!--col-md-3 ends-->


</div>
</div>


<?php 
include "includes/footer.php";
?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>