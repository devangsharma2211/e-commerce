<?php
include('include/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Shop</title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/e140702b99.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='style.css'>
</head>

<body>
    <section id='header'>
        <a href='#'><img src='https://i.ibb.co/F46mDQn/logo-removebg-preview.png' class='logo' width='100px' height='100px'></a>
        <div>
            <ul id='navbar'>
                <li><a href='index.php'>Home</a></li>
                <li><a class='active' href='shop.php'>Shop</a></li>
                <li><a href='#'>Blog</a></li>
                <li><a href='#'>About</a></li>
                <li><a href='#'>Contact</a></li>
                <li><a href='signin.php'>Sign In</a></li>
                <li><a href='cart.php' id='lg-bag'><i class='fa-solid fa-bag-shopping'></i><sup>
                            <?php
                            cart_item();
                            ?>
                        </sup></a></li>
                <a href='#' id='close'><i class='fa-solid fa-xmark'></i></a>

            </ul>
            <div id='mobile'>
                <a href='cart.php'><i class='fa-solid fa-bag-shopping'></i><sup>
                        <?php
                        cart_item();
                        ?>
                    </sup></a>

                <i id='bar' class='fas fa-outdent'></i>

            </div>
        </div>
    </section>
    <section id='page-header'>
        <h2>#STAYHOME</h2>
        <p>Save more with coupons & up to 70% off</p>
    </section>

    <section class='row'>
    <?php
    getproducts();
    cart();
    getIPAddress();
    
    ?>
    </section>

    <section id='pagination' class='section-p1'>
        <a href='#'>1</a>
        <a href='#'>2</a>
        <a href='#'><i class='fa fa-right-long'></i></a>


    </section>
    <section id='newsletter' class='section-p1 section-m1'>
        <div class='newstext'>
            <h4>SignUp for NewsLetters</h4>
            <p>Get E-mail updates about our latest shop and <span> special offers</span></p>
        </div>
        <div class='form'>
            <input type='text' placeholder='Your E-mail address'>
            <button class='normal'>SignUp</button>
        </div>
    </section>
    <footer class='section-p1'>
        <div class='col'>
            <img class='logo' src='https://i.ibb.co/F46mDQn/logo-removebg-preview.png' width='100px' height='100px'>
            <h4>Contact</h4>
            <p><strong>Address:</strong> Lorem ipsum dolor sit </p>
            <p><strong>Phone:</strong> +91 7742280073 </p>
            <div class='follow'>
                <h4>Follow Us</h4>
                <div class='icon'>
                    <i class='fab fa-facebook-f'></i>
                    <i class='fab fa-instagram'></i>
                    <i class='fab fa-x'></i>
                    <i class='fab fa-youtube'></i>
                    <i class='fab fa-pinterest-p'></i>
                </div>
            </div>
        </div>
        <div class='col'>
            <h4>About</h4>
            <a href='#'>About us</a>
            <a href='#'>Delivery Information</a>
            <a href='#'>Privacy Policy</a>
            <a href='#'>Terms & Conditions</a>
            <a href='#'>Contact Us</a>

        </div>
        <div class='col'>
            <h4>My Account</h4>
            <a href='#'>Sign In</a>
            <a href='#'>View Cart</a>
            <a href='#'>My Wishlist</a>
            <a href='#'>Track My Order</a>
            <a href='#'>Help</a>
        </div>
        <div class='col install'>
            <h4>Install Apps</h4>
            <p>From App Store and Google Play</p>
            <div class='row'>
                <img src='https://i.ibb.co/VW36cqz/app.jpg' alt=''>
                <img src='https://i.ibb.co/92tkZb3/play.jpg' alt=''>
                <p>Secure Payment Gateways</p>
                <img src='https://i.ibb.co/VmtvMry/pay.png' alt=''>

            </div>
        </div>
        <div class='copyright'>
            <p>&#169 2024, Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
    </footer>
    <script src='script.js'></script>
</body>

</html>