<?php
include('../include/connect.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/e140702b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .product_img {
            width: 100px;
            margin: auto;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <section id="header">
        <a href="#"><img src="https://i.ibb.co/F46mDQn/logo-removebg-preview.png" class="logo" width="100px" height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>

            </ul>
            <div id="mobile">
                <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></i></a>

                <i id="bar" class="fas fa-outdent"></i>

            </div>
        </div>
    </section>
        
        <section id="function-buttons" class="section-p1">
            <button class="normal" ><a href="home.php?view-seller">View Seller</a></button>
            <button class="normal" >LogOut</button>

        </section>
        <?php

         
       if(isset($_GET['view-seller'])){
        include('view-seller.php');
    }
        
       if(isset($_GET['delete_seller'])){
            include('delete_seller.php');
        }
        if(isset($_GET['edit_seller'])){
            include('edit_seller.php');
        }
        ?>
   



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