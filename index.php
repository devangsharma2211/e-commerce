<?php
include('./functions/common_function.php');
include('./include/connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#l">Contact</a></li>
                <li><a href="signin.php">Sign In</a></li>
                <li><a href="cart.php" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i>
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
    <section id="hero">
        <h4>Trade In Offer</h4>
        <h2>Super value deals</h2>
        <h1>On All Products</h1>
        <p>Save more with coupons & up to 70% off</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="https://i.ibb.co/jRZcJF8/f1.png">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="
                https://i.ibb.co/KsP6YVC/f2.png">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="
                https://i.ibb.co/WHBkwg5/f3.png">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="
                https://i.ibb.co/W0bKZRR/f4.png">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="
                https://i.ibb.co/pdh7MGz/f5.png">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="
                https://i.ibb.co/gMRKSdG/f6.png">
            <h6>F24/7 Support</h6>
        </div>
    </section>
    <section class="row">
        <?php
        //calling functions
        $ip = getIPAddress();
        cart();
        getproducts();
        ?>
    </section>
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All Clothes & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>
    <section class="row">
        <?php
        getproducts();?>
    </section>
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>Buy 1 Get 1 free</h2>
            <span>The Best Classic Dress is on Sale On Shopstore</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>Upcoming Season</h2>
            <span>The Best Classic Dress is on Sale On Shopstore</span>
            <button class="white">Collection</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% off</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>SPRING/SUMMER 2024</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>NEW TRENDY PRINT</h3>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>SignUp for NewsLetters</h4>
            <p>Get E-mail updates about our latest shop and <span> special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your E-mail address">
            <button class="normal">SignUp</button>
        </div>
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