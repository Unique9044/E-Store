<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | E-Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Store Of Mobiles
                            </h1>
                            <p>Quality of the best Prices.</p>
                            <br/>
                            <a  href="products.php" class="btn btn-info btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/realme6pro.jpeg" alt="">
                                <div class="caption">
                                    <h3>Realme 6 Pro</h3>
                                    <p>Realme 6 Pro (Lightning Blue, 64 GB)  (6 GB RAM).</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/samsunggalaxy.jpeg" alt="">
                                <div class="caption">
                                    <h3>Samsung Galaxy</h3>
                                    <p>Samsung Galaxy S10 Lite (Prism White, 128 GB)  (8 GB RAM)</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/motorola.jpeg" alt="">
                                <div class="caption">
                                    <h3>Motorola One Vision</h3>
                                    <p>Motorola One Vision (Sapphire Gradient, 128 GB)  (4 GB RAM)</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/redmi20pro.jpeg" alt="">
                                <div class="caption">
                                    <h3>Redmi K20 Pro</h3>
                                    <p>Redmi K20 Pro (Glacier Blue, 128 GB)  (6 GB RAM)</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/infinix8.jpeg" alt="">
                                <div class="caption">
                                    <h3>Infinix Hot 8 </h3>
                                    <p>Infinix Hot 8 (Quetzal Cyan, 64 GB)  (4 GB RAM)</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/asus2.jpeg" alt="">
                                <div class="caption">
                                    <h3>Asus ROG Phone II</h3>
                                    <p>Asus ROG Phone II (Black, 128 GB)  (8 GB RAM)</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>