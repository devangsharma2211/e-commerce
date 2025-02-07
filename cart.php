<?php
include('./functions/common_function.php');
include('./include/connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e140702b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="https://i.ibb.co/F46mDQn/logo-removebg-preview.png" class="logo" width="100px" height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="signin.php">Sign In</a></li>
                <li><a class="active" href="cart.php" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i>
                        <sup>
                            <?php
                            cart_item();
                            ?>
                        </sup></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>

            </ul>
            <div id="mobile">
                <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i><sup>
                        <?php
                        cart_item();
                        ?>
                    </sup></a>

                <i id="bar" class="fas fa-outdent"></i>

            </div>
        </div>
    </section>
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>Leave A Message, We love to hear from you!</p>
    </section>
    <section id="cart" class="section-p1">
        <form action="" method="post">

            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Images</td>
                        <td>Products</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- php code for dynamic data-->
                    <?php
                    global $con;
                    $ip = getIPAddress();
                    $total = 0;
                    $cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$ip'";
                    $result = mysqli_query($con, $cart_query);
                    while ($row = mysqli_fetch_array($result)) {
                        $product_id = $row['product_id'];
                        $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
                        $result_products = mysqli_query($con, $select_products);
                        while ($row_product_price = mysqli_fetch_array($result_products)) {
                            $product_price = array($row_product_price['product_price']);
                            $price_table = $row_product_price['product_price'];
                            $product_title = $row_product_price['product_title'];
                            $product_image1 = $row_product_price['product_image1'];
                            $product_values = array_sum($product_price);
                            $total += $product_values;


                    ?>
                            <tr>
                                <td><i class="far fa-times-circle"></i></td>
                                <td><img src="./admin-area\product_images/<?php echo $product_image1 ?>" alt=""></td>
                                <td><?php echo $product_title ?></td>
                                <td>&#x20b9 <?php echo $price_table ?></td>
                                <td><input type="number" value="1"></td>
                                <td>&#x20b9 <?php echo $price_table ?></td>
                            </tr>
                            <?php }
                    } ?>
                </tbody>
            </table>
    </section>
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>&#x20b9 <?php total_cart_price(); ?></td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>&#x20b9 <?php total_cart_price(); ?></strong></td>
                </tr>
            </table>
            <button class="normal"><a href="orders.php?user_id=''" style="text-decoration: none; color: inherit;">Proceed To Checkout</a></button>
        </div>
        </form>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="https://i.ibb.co/F46mDQn/logo-removebg-preview.png" width="100px" height="100px">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Lorem ipsum dolor sit </p>
            <p><strong>Phone:</strong> +91 7742280073 </p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-x"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-pinterest-p"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>

        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install Apps</h4>
            <p>From App Store and Google Play</p>
            <div class="row">
                <img src="https://i.ibb.co/VW36cqz/app.jpg" alt="">
                <img src="https://i.ibb.co/92tkZb3/play.jpg" alt="">
                <p>Secure Payment Gateways</p>
                <img src="https://i.ibb.co/VmtvMry/pay.png" alt="">

            </div>
        </div>
        <div class="copyright">
            <p>&#169 2024, Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>