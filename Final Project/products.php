<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our E-Store!</h1>
                <p>Mobile Phones- Buy mobile phones online at best prices in India.</p>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/realme6pro.jpeg" alt="">
                        <div class="caption">
                            <h3>Realme 6 Pro </h3>
                            <p>Price: Rs. 18000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/samsunggalaxy.jpeg" alt="">
                        <div class="caption">
                            <h3>Samsung Galaxy S10</h3>
                            <p>Price: Rs. 42,000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/motorola.jpeg" alt="">
                        <div class="caption">
                            <h3>Motorola One Vision</h3>
                            <p>Price: Rs. 15000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/redmi20pro.jpeg" alt="">
                        <div class="caption">
                            <h3>Redmi K20 Pro</h3>
                            <p>Price: Rs. 27000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/infinix8.jpeg" alt="">
                        <div class="caption">
                            <h3>Infinix Hot8 </h3>
                            <p>Price: Rs. 8000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/asus2.jpeg" alt="">
                        <div class="caption">
                            <h3>Asus ROG phone2</h3>
                            <p>Price: Rs. 38000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/blackshark2.jpeg" alt="">
                        <div class="caption">
                            <h3>Black Shark 2</h3>
                            <p>Price: Rs. 32000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/honor10.jpeg" alt="">
                        <div class="caption">
                            <h3>Honor 10 Lite </h3>
                            <p>Price: Rs. 11500.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/asus6z.jpeg" alt="">
                        <div class="caption">
                            <h3>Asus 6Z </h3>
                            <p>Price: Rs. 28000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/lenovoa6.jpeg" alt="">
                        <div class="caption">
                            <h3>Lenovo A6 Note</h3>
                            <p>Price: Rs. 7000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/tecno.jpeg" alt="">
                        <div class="caption">
                            <h3>Tecno Camon 15 Pro</h3>
                            <p>Price: Rs. 15000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/gioneef10.jpeg" alt="">
                        <div class="caption">
                            <h3>Gionee F10</h3>
                            <p>Price Rs. 7000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php
} else {
    //We have created a function to check whether this particular product is added to cart or not.
    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
                            ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
    }
}
                            ?>

                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
